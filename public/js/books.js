$(document).ready(function () {
   $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
          });
    //Initialize tooltips
    var i = 0;
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {
      // paso 1
      i++;
      var $active = $('.wizard .nav-tabs li.active');
      // cargar periods
      var idCareer = $('input:radio[name=career]:checked').val();
      var idPeriod = $('input:radio[name=period]:checked').val();
      if (idCareer && i === 1) {
        $active.addClass('disabled');
        $active.next().removeClass('disabled');
        nextTab($active);

        $('#periods ul li').remove();
        $("#periods ul").html("<p>Cargando...</p>");
        getCareers(idCareer)
        .done(function(response) {
          $('#periods ul').html(' ');
          $.each(response.data, function (key, value) {
              $('#periods ul').append('<li>\
                <input type="radio" value="'+ value.id +'" name="period" id="period-'+ value.id +'" />\
                <label for="period-'+ value.id +'">'+ value.name +'</label>\
                <div class="check"></div>\
              </li>');
            });
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
          $("#periods ul").html("No se encontraron resultados");
        });
      }else if(idPeriod && i === 2){
        $active.addClass('disabled');
        $active.next().removeClass('disabled');
        nextTab($active);
        $('#book_list div').remove();
        $("#book_list").html("<p>Cargando...</p>");
        getBooks(idPeriod)
        .done(function(response) {
          $('#book_list').html(' ');
          $.each(response.data, function (key, value) {
              $('#book_list').append('\
                  <div class="col-md-4 col-xs-12" style="height:250px;">\
                    <div class="row">\
                      <div class="col-md-6 col-xs-6">\
                        <img src="'+storage+'/'+value.id +'/medium/'+value.avatar+'" alt="">\
                      </div>\
                    <div class="col-md-6 col-xs-6">\
                      <p><strong>Autor: </strong> autor</p>\
                      <p><strong>ISBN: </strong>'+ value.isbn +'</p>\
                      <p><strong>Año de Publicación: </strong>'+ value.year_publication +'</p>\
                      <p><strong>Numero de paginas: </strong>'+ value.number_page +'</p>\
                      <p><strong>Numero de paginas: </strong>'+ value.price +'</p>\
                      <p><strong>Sinopsis: </strong>'+ value.observations +'</p>\
                    </div>\
                  </div>\
                  <div class="col-md-6 col-xs-6 col-xs-offset-6">\
                    <label class="control control--checkbox">Selecionar\
                      <input type="checkbox" value="'+ value.isbn +'" name="book[]" id="book-'+ value.id +'" />\
                      <div class="control__indicator"></div>\
                    </label>\
                  </div>\
                  </br class="hidden-md hidden-lg">\
                  </br class="hidden-md hidden-lg">\
                  </br class="hidden-md hidden-lg">\
                  <hr class="hidden-lg hidden-md" />\
                </div>\
              ');
            });
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
          $("#books ul").html("No se encontraron resultados");
        });

      }else{
        i--;
        alert('debe selecionar un elemento');
      }

    });

    // selecionar todo los productos
    $('#cart_all').click(function(e) {
      $('input:checkbox[name="book[]"]').each( function() {      
              this.checked = true; 
          });
    });
    // agregar al  carrito

    $('#cart-add').click(function(e) {
      var $active = $('.wizard .nav-tabs li.active');
      $active.addClass('disabled');
      $active.next().removeClass('disabled');
      nextTab($active);
      $("#complete").html("<p>Cargando...</p>");
      if ('input:checkbox[name="book[]"]:checked') {
        var isbn = [];
        $('input:checkbox[name="book[]"]:checked').each(function() {
          isbn.push(this.value);
        });
        addCart(isbn)
        .done(function(argument) {
        });
      };
      // $('input:checkbox[name="book[]"]:checked').each(function() {
      //   addCart(this.value)
      //   .done(function(argument) {
      //     console.log(argument);
      //   });

      // });
      $("#complete").html('<h3>Completado</h3>\
        <p>Se agregaron los productos al carrito</p>\
        </br>\
        <a href="'+ root +'/cart/show" class="btn btn-success">Ir al carrito</a>');


    $(".prev-step").click(function (e) {
        i--;
        var $active = $('.wizard .nav-tabs li.active');
        $active.addClass('disabled');
        $active.prev().removeClass('disabled');
        prevTab($active);
    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
function addCart(isbn){
 return $.ajax({
             method: "POST",
             url: root +'/cart/add',
             data: {data: isbn}
         });
}
function getCareers(id){
  return $.ajax({
    method: "GET",
    url: "/api/academy/career/periods",
    data: { id: id}
  });
}

function getBooks(id){
  return $.ajax({
    method: "GET",
    url: "/api/academy/career/periods/bookss",
    data: { id: id}
  });
}

});
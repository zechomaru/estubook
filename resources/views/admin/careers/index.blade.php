@extends('layouts.admin')

@section('header-title')

<h1>
    Carreras
    <!--<small>Sub title</small> -->
</h1>
<style>
    hr{
        margin-bottom: 5px;
        margin-top: 5px;
    }
</style>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.carreras.index') }}"><i class="fa fa-link"></i>Carreras</a></li>
        <li class="active">Lista</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <a href="{{ route('admin.carreras.create') }}"
               class="btn btn-primary"> Crear Carrera</a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="box">
            @if(count($careers) <= 0)

            <p>No hay carreras. <a href="{{ route('admin.carreras.create') }}">Crea una nueva</a></p>

            @else
            <table class="table table-bordered table-hover dataTable">
                <thead>
                <th>Institución</th>
                <th>Carrera</th>
                <th>Descripción</th>
                <th>Modalidad</th>
                <th>Periodos</th>
                <th colspan="2">Acciones</th>
                </thead>
                <tbody>
                  @foreach($careers as $career)
                    <tr>
                      <td>{{ $career->academy->name }}</td>
                      <td>{{ $career->name }}</td>
                      <td>{{ $career->description }}</td>
                      <td>{{ $career->modality->name }}</td>
                      <td>
                        @foreach(App\Models\Period::where('career_id', $career->id)->get() as $period)
                          <p>{{ $period->name }} 
                            <span class="pull-right">
                              <i class="glyphicon glyphicon-book books" data-id="{{ $period->id }}"></i>
                              <i class="glyphicon glyphicon-edit edit"  style="cursor:pointer;" data-name="{{ $period->name }}" data-id="{{ $period->id }}"></i>
                            </span>
                          </p>
                          <hr>
                        @endforeach
                        <button type="button" class="btn btn-success create_period" data-toggle="modal" id="" value="{{$career->id}}">Agregar</button>
                      </td>

                        <td class="actions">
                            <a href="{{ route('admin.carreras.edit', [ 'id' => $career->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.carreras.destroy',$career->id]]) !!}
                            <a href="#" id="delete-btn" onclick="jQuery(this).parents('form:first').submit()"><i style="color:#ED2A2A" class="glyphicon glyphicon-remove"></i></a>
                            {!! Form::close() !!}
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
  </div>

  <!--************************************************** bools -->

  <div class="modal fade" id="books" tabindex="-1" role="dialogs" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="myModalLabel">Libros</h4>
              </div>
              <div class="modal-body">
                <div class="row book-create">
                      {!! Form::token() !!}
                      <div class="form-group error">
                          <label for="book" class="col-sm-12 control-label"></label>
                          <div class="cssload-thecube" style="display:none">
                            <div class="cssload-cube cssload-c1"></div>
                            <div class="cssload-cube cssload-c2"></div>
                            <div class="cssload-cube cssload-c4"></div>
                            <div class="cssload-cube cssload-c3"></div>
                          </div>
                          <div class="col-sm-9 test">
                            <select id="book-elements" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="" style="width: 100%;" tabindex="-1" aria-hidden="true" name="books[]">
                               </select>  
                          </div>
                     </div>
                </div>
                <div class="col-xs-12 book-items"></div>
              </div>
              <div class="modal-footer">
              </div>
          </div>
        </div>
    </div>


<script>
    $(document).ready(function () {
      

        var periodCreate = '{{route("admin.periodos.store")}}';
        var root = '{{url("/")}}';
        // var periodDelete = '{{route("admin.periodos.store")}}';
        $('.create_period').click(function(event) {
            $('#myModal').html('');
            $('#myModal').html('\
                  <div class="modal-dialog">\
                     <div class="modal-content">\
                       <div class="modal-header">\
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>\
                          <h4 class="modal-title" id="myModalLabel">Periodo</h4>\
                      </div>\
                      <div class="modal-body">\
                        <form class="form-horizontal" action="' + periodCreate +'" method="POST">\
                            {!! Form::token() !!}\
                            <div class="form-group error">\
                                <label for="inputName" class="col-sm-3 control-label">Nombre</label>\
                                <div class="col-sm-9">\
                                     <input type="text" class="form-control has-error" id="name" name="name" placeholder="Nombre">\
                                     <input type="hidden" name="career_id" value="' + $(this).val() + '">\
                                </div>\
                           </div>\
                           <input type="submit" value="guardar" class="btn btn-primary">\
                        </form>\
                      </div>\
                      <div class="modal-footer">\
                      </div>\
                  </div>\
                </div>');
            $('#myModal').modal('show');
        });

        $('.edit').click(function(event) {
            $('#myModal').modal('toggle');
            $('#myModal').html('\
                <div class="modal-dialog">\
                     <div class="modal-content">\
                       <div class="modal-header">\
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>\
                          <h4 class="modal-title" id="myModalLabel">Periodo</h4>\
                      </div>\
                      <div class="modal-body">\
                        <form class="form-horizontal" action="'+ root +'/admin/periodos/update" method="POST">\
                            {!! Form::token() !!}\
                            <input type="hidden" name="id" value="' + $(this).data('id') + '">\
                            <input name="_method" type="hidden" value="PUT">\
                            <div class="form-group error">\
                                <label for="inputName" class="col-sm-3 control-label">Nombre</label>\
                                <div class="col-sm-9">\
                                     <input type="text" class="form-control has-error" id="name" name="name" placeholder="Nombre" value="'+ $(this).data('name') +'">\
                                </div>\
                           </div>\
                           <input type="submit" value="guardar" class="btn btn-primary">\
                        </form>\
                      </div>\
                      <div class="modal-footer">\
                      </div>\
                  </div>\
                </div>');
        });

// ///////////////////////////////////////////////////books
        $('.books').click(function(event) {
          $('.test').hide();
          $('#book-elements').html('');
          $('.cssload-thecube').show('slow');

          $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
          });
          $('.select2-selection__choice').remove();
          var id = $(this).data('id');
          Books()
          .done(function(response) {
            $.each(response.data, function(key, value) {
              $('#book-elements').append('<option value="'+ value.id +'">'+ value.title +'</option>')
            });
                  $(".select2").select2({
              allowClear: false,
            });
                  getBooks(id)
                  .done(function(response) {
                    console.log(response.data);
                    $('.select2').select2().val(response.data).trigger('change');
                    
                  });

                  $('.cssload-thecube').hide('slow');
                  $('.test').show('400');

          })
          .fail(function(jqXHR, textStatus, errorThrown) {
            
          });


          $('#books').modal('toggle');
          var eventSelect = $("#book-elements");
            eventSelect.off("select2:select");
            eventSelect.off("select2:unselect");
            eventSelect.on("select2:unselect", function (event) {
              console.log(event.params.data.id);
           });
              eventSelect.on("select2:select", function (event) {
                 console.log('hola');
                addBooks(event.params.data.id, id)
                .done(function(response) {
                  console.log(response);
                })
                 .fail(function(jqXHR, textStatus, errorThrown) {
                });
                 console.log('chao');

             });

        });



          function getBooks(id){
            return $.ajax({
              method: "GET",
              url: "/api/academy/career/periods/books",
              data: { id: id}
            });
          }

          function Books(){
            return $.ajax({
              method: "GET",
              url: "/api/admin/books",
            });
          }

          function addBooks(data, id){
            return $.ajax({
              method: "POST",
              url: "/api/admin/add/books",
              data: {data: data, id: id, }
            });
          }


    });
</script>

<link rel="stylesheet" href="{{ url('plugins/select2/select2.min.css') }}">
<script src="{{ url('plugins/select2/select2.full.min.js') }}"></script>
<script>
  $(function () {
      //Initialize Select2 Elements
    
  });

</script>
@endsection
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Estubook</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/css/font-awesome.min.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css')}}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ url('/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('/css/selectize.bootstrap3.css')}}">
    <link rel="stylesheet" href="{{ url('/css/responsive.css')}}">
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="{{ url('/js/jquery-2.1.4.min.js')}}"></script>
  <script type="text/javascript" src='{{ url("/js/selectize.min.js") }}'></script>
  <style>

    .nav .open>a, .nav .open>a:focus{
    background-color: #222222;
    border-color: #337ab7;
}
.dropdown-menu{
  background-color: #25251b;
}
.dropdown-menu > li:hover{
  background-color: #25251b !important;
}
.dropdown-menu > li:hover a{
  background-color: black;
}
  </style>
  </head>
  <body>
  
    <!-- menu -->
    <div class="mainmenu-area">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ route('home') }}">Home</a></li>
            </ul>
            <ul style="" class="nav navbar-nav navbar-right">

              <li><a href="{{ route('cart-show') }}"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="badge">{{ Session::get('cart')  ? count(Session::get('cart')) : 0}}</span></a></li>
              @if (Auth::guest())
                <li><a href="{{ route('login') }}">Entrar</a></li>
                <li><a href="{{ route('register') }}">Registrate</a></li>
              @else
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a href="">Mi Cuenta</a></li>
                    <li><a href="">Mis Compras</a></li>
                    <li>
                      <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Salir
                      </a>

                      <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>
              @endif





              
            </ul>
          </div>  
        </div>
      </div>
    </div> <!-- End mainmenu area -->


    @if(\Session::has('message'))
      <div class="alert alert-info alert-dismissible text-center" id="alerts" role="alert" style="position: absolute; bottom: 0; right: 20px; z-index: 99; width: 400px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4><strong><i class="fa fa-info-circle"></i></strong> {{ \Session::get('message') }}</h4>
      </div>
    @endif
    @yield('header')
    @yield('promo')
    @yield('comoFunciona')
    @yield('content')
  
  <div class="footer-top-area">
      <div class="zigzag-bottom"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-6">
                  <div class="footer-about-us">
                      <h2>E<span>stubook</span></h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                      <div class="footer-social">
                          <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                          <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                          <!-- <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a> -->
                      </div>
                  </div>
              </div>
              
              <div class="col-md-3 col-sm-6">
                  <div class="footer-menu">
                      <h2 class="footer-wid-title">Navegación</h2>
                      <ul>
                          <li><a href="#">Mi cuenta</a></li>
                          <li><a href="#">Mis ordenes</a></li>
                          <!-- <li><a href="#">Wishlist</a></li> -->
                          <!-- <li><a href="#">Vendor contact</a></li> -->
                          <!-- <li><a href="#">Front page</a></li> -->
                      </ul>                        
                  </div>
              </div>
              
              <div class="col-md-3 col-sm-6">
                  <div class="footer-menu">
                      <h2 class="footer-wid-title">Menu</h2>
                      <ul>
                          <li><a href="#">Home</a></li>
                          <!-- <li><a href="#">Home accesseries</a></li> -->
                          <!-- <li><a href="#">LED TV</a></li> -->
                          <!-- <li><a href="#">Computer</a></li> -->
                          <!-- <li><a href="#">Gadets</a></li> -->
                      </ul>                        
                  </div>
              </div>
              
              <div class="col-md-3 col-sm-6">
                  <div class="footer-newsletter">
                      <h2 class="footer-wid-title">Newsletter</h2>
                      <p>Dejanos tu correo para informarte de lo nuevo en Estubook!</p>
                      <div class="newsletter-form">
                          <form action="#">
                              <input type="email" placeholder="Escribe tu correo">
                              <input type="submit" value="Subscribete">
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> <!-- End footer top area -->
  
  <div class="footer-bottom-area">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="copyright">
                      <p>&copy; 2015-2016 Estubook. All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="http://pildoracreativa.com" target="_blank">Pildora Creativa</a></p>
                  </div>
              </div>
              
              <div class="col-md-4">
                  <div class="footer-card-icon">
                      <i class="fa fa-cc-discover"></i>
                      <i class="fa fa-cc-mastercard"></i>
                      <i class="fa fa-cc-paypal"></i>
                      <i class="fa fa-cc-visa"></i>
                  </div>
              </div>
          </div>
      </div>
  </div> <!-- End footer bottom area -->


</body>

<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
    var root = '{{url("/")}}';
</script>
<script type="text/javascript" src="{{url('/js/main.js')}}"></script>

<!-- jQuery sticky menu -->
<script type="text/javascript" src="{{url('/js/jquerysticky.js')}}"></script>


<!-- jQuery easing -->
<script src="{{url('/js/jquery.easing.1.3.min.js')}}"></script>

<!-- Main Script -->
<script src="{{url('/js/main2.js')}}"></script>
<script>
  var storage = '{{asset("storage/book/")}}';
</script>
<script src="{{url('/js/books.js')}}"></script>
<script>
$(document).ready(function() {
  // Update item cart
    $(".btn-update-item").on('click', function(e){
      e.preventDefault();
      
      var id = $(this).data('id');
      var href = $(this).data('href');
      var quantity = $("#product_" + id).val();

      window.location.href = href + "/" + quantity;
    });
    
   
    // 
    
});
</script>
<script>
    $("#alerts").fadeTo(2000, 500).slideUp(500, function(){
        $("#alerts").slideUp(500);
    });
</script>

</html>
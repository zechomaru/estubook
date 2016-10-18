<!DOCTYPE html>
<html lang="es" style="background-image: url('img/header.jpg');background-repeat: no-repeat; background-size: cover; background-position: center center;">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
      @yield('title')
    </title>
    <link rel="stylesheet" href="css/login/reset.css">
    <!-- <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> -->
    <link rel="stylesheet" href="/css/login/style.css">
    <script src="{{ url('/js/jquery-2.1.4.min.js')}}"></script>
    <style>
      body{
        background-color: transparent;
      }
      body:before{
        background-color: transparent;
      }
    </style>
  </head>
  <body style="backgroud-color: transparent">
    @yield('content')
  
  </body>
</html>
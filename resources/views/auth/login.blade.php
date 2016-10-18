@extends('layouts.authUsers')

  @section('title')
    Login
  @stop

  @section('content')
    <div class="container">
      <div class="info">
        <!-- <h1>Flat Login Form</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a> </span> -->
      </div>
    </div>
    <div class="form">
      <div class="thumbnail">
        <img src="/img/login/hat.svg"/>
      </div>
      <form class="login-form" role="form" method="POST" action="{{ route('auth.login') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">Correo</label>
          <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-4 control-label">Contraseña</label>
            <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
              <label>
                <input type="checkbox" style="width:auto" name="remember"> Recuerdame
              </label>
            </div>
          </div>
        </div>
        
        <button>Entrar</button>
        

        <p class="message">
          <a  class="pull-left" href="{{ route('register') }}">Registrate </a> 
         <a class="btn btn-link pull-right" href="{{ route('password.email.reset') }}">Olvidaste la Contraseña?</a>
        </p>
      </form>
    </div>

  @stop


                        

                        

     
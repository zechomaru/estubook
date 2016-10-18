@extends('layouts.authUsers')

  @section('title')
    Registro
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
      <form class="form-horizontal" role="form" method="POST" action="{{ route('auth.register') }}">
        {{ csrf_field() }}

        @if($errors)
          <div class="form-group has-error">
            @foreach ($errors->all() as $error)
              <li style="color:#CF2929; font-size: 14px;">{{ $error }}</li>
            @endforeach
          </div>
          </br>
          </br>
          </br>
        @endif

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" class="col-md-4 control-label">Nombre</label>
          <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
        </div>


        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
          <label for="lastname" class="col-md-4 control-label">Apellido</label>
          <div class="col-md-6">
            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
            @if ($errors->has('lastname'))
              <span class="help-block">
                <strong>{{ $errors->first('lastname') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
          <label for="direction" class="col-md-4 control-label">Dirección</label>
          <div class="col-md-6">
            <input id="direction" type="text" class="form-control" name="direction" value="{{ old('direction') }}" required autofocus>
            @if ($errors->has('direction'))
              <span class="help-block">
                <strong>{{ $errors->first('direction') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
          <label for="phone" class="col-md-4 control-label">Telefono</label>
          <div class="col-md-6">
            <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
            @if ($errors->has('phone'))
              <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
              </span>
            @endif
          </div>
        </div>




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

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        
        <button>Registrate</button>
        

        <p class="message">
          <a class="pull-right" href="{{ route('register') }}">Entrar </a> 
        </p>
      </form>
    </div>

  @stop

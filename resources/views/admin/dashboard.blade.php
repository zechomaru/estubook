@extends('layouts.admin')


@section('header-title')
    <h1>
        Dashboard
        <!--<small>Sub title</small> -->
    </h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li class="active"> <i class="fa fa-dashboard"></i> Dashboard</li>
    </ol>
@endsection

@section('content')

    <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Usuarios</span>
                  <span class="info-box-number">{{$data['user']}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Instutuciones</span>
                  <span class="info-box-number">{{$data['academy']}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Libros</span>
                  <span class="info-box-number">{{$data['book']}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Autores</span>
                  <span class="info-box-number">{{$data['author']}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>

@endsection

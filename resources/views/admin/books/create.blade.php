@extends('layouts.admin')

@section('header-title')
<h1>
    Crea un Libro
    <small></small> 
</h1>
@endsection

@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ url('admin/libros') }}"><i class="fa fa-link"></i>Libros</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'admin.libros.store','enctype' => 'multipart/form-data']) !!}
                    @include('admin.books._fields')
                    @include('template.submit',['label' => 'Crear'])
                {!! Form::close() !!}
            </div>
        </div>
@endsection
@extends('layouts.admin')
@section('header-title')
<h1>
    Editar Libro
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.libros.index') }}"><i class="fa fa-link"></i>Libros</a></li>
        <li class="active">Editar</li>
    </ol>
@endsection
@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($book, ['method' => 'PUT', 'route' => ['admin.libros.update', $book->id] ,'enctype' => 'multipart/form-data']) !!}
                        @include('admin.books._fields')
                        @include('template.hidden',['key' => 'id'])
                        @include('template.submit',['label' => 'Actualizar'])  
                {!! Form::close() !!}
            </div>
        </div>
@endsection
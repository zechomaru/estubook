@extends('layouts.admin')

@section('header-title')
<h1>
    Crea un Autor
    <small></small> 
</h1>
@endsection

@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ url('admin/autores') }}"><i class="fa fa-link"></i>Autores</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'admin.autores.store']) !!}
                    @include('admin.authors._fields')
                    @include('template.submit',['label' => 'Crear'])
                {!! Form::close() !!}
            </div>
        </div>
@endsection
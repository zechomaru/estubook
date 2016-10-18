@extends('layouts.admin')

@section('header-title')
<h1>
    Crear Academia
    <small>Nombre del Colegio/Universidad/instituto</small> 
</h1>
@endsection

@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ url('admin/academias') }}"><i class="fa fa-link"></i>Academias</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                <p>No hay Tipos de academia. <a href="{{ route('admin.tiposdeacademia.create') }}">Cree un tipo</a></p>
            </div>
        </div>
@endsection
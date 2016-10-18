@extends('layouts.admin')

@section('header-title')
<h1>
    Crear Academia
    <small>Nombre del Colegio/Universidad/instituto</small> 
</h1>
@endsection

@section('bread-crumb')
<meta name="csrf-token" content="{{csrf_token()}}" />
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ url('admin/academias') }}"><i class="fa fa-link"></i>Academias</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'admin.academias.store','enctype' => 'multipart/form-data']) !!}
                {!! Form::token() !!}
                    @include('admin.academies._fields')
                    @include('template.submit',['label' => 'Crear'])
                {!! Form::close() !!}
            </div>
        </div>
@endsection
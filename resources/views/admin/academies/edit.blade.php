@extends('layouts.admin')
@section('header-title')
<h1>
    Editar El Tipo de Academia
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.tiposdeacademia.index') }}"><i class="fa fa-link"></i>Tipos de Academia</a></li>
        <li class="active">Editar</li>
    </ol>
@endsection
@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($academy, ['method' => 'PUT', 'route' => ['admin.academias.update', $academy->id] ,'enctype' => 'multipart/form-data']) !!}
                @include('admin.academies._fields')
                @include('template.submit',['label' => 'Actualizar'])  
                {!! Form::close() !!}
            </div>
        </div>
@endsection
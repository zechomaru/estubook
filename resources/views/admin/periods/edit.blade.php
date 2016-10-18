@extends('layouts.admin')
@section('header-title')
<h1>
    Editar la Modalidad
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.modalidades.index') }}"><i class="fa fa-link"></i>Modalidades</a></li>
        <li class="active">Editar</li>
    </ol>
@endsection
@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($modality, ['method' => 'PUT', 'route' => ['admin.modalidades.update', $modality->id]]) !!}
                        @include('admin.typeAcademies._fields', ['data' => $modality->name ])
                        @include('template.hidden',['key' => 'id'])
                        @include('template.submit',['label' => 'Actualizar'])  
                {!! Form::close() !!}
            </div>
        </div>
@endsection
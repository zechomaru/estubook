@extends('layouts.admin')
@section('header-title')
<h1>
    Editar la Carrera
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.carreras.index') }}"><i class="fa fa-link"></i>Carreras</a></li>
        <li class="active">Editar</li>
    </ol>
@endsection
@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($career, ['method' => 'PUT', 'route' => ['admin.carreras.update', $career->id]]) !!}
                        @include('template.select',['key' => 'academy_id','label' => 'Academia', 'options' => App\Models\Academy::pluck('name','id'), 'attributes' => 'Selecione'])

                        @include('template.select',['key' => 'modality_id','label' => 'Modalidad', 'options' => App\Models\Modality::pluck('name','id'), 'attributes' => 'Selecione'])

                        @include('template.text',['key' => 'name','label' => 'Nombre', 'data' => $career->name])

                        @include('template.text',['key' => 'description','label' => 'Descripción', 'data' => $career->description])
                        @include('template.hidden',['key' => 'id'])
                        @include('template.submit',['label' => 'Actualizar'])  
                {!! Form::close() !!}
            </div>
        </div>
@endsection
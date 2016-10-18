@extends('layouts.admin')

@section('header-title')
<h1>
    Crea una Modalidad
    <small>Como lapsos, semestres, periodos.</small> 
</h1>
@endsection

@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.modalidades.index') }}"><i class="fa fa-link"></i>Modalidades</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'admin.modalidades.store']) !!}
                    @include('admin.modalities._fields')
                    @include('template.submit',['label' => 'Crear'])
                {!! Form::close() !!}
            </div>
        </div>
@endsection
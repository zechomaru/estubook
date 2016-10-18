@extends('layouts.admin')

@section('header-title')
<h1>
    Crea un Tipo de Academia
    <small>Como colegio, universidad, instituto</small> 
</h1>
@endsection

@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ url('admin/tiposdeacademias') }}"><i class="fa fa-link"></i>Tipos de Academias</a></li>
        <li class="active">Crear</li>
    </ol>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'admin.tiposdeacademia.store']) !!}
                    @include('admin.typeAcademies._fields')
                    @include('template.submit',['label' => 'Crear'])
                {!! Form::close() !!}
            </div>
        </div>
@endsection
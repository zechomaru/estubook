@extends('layouts.admin')

@section('header-title')
<h1>
    Modalidades
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.modalidades.index') }}"><i class="fa fa-link"></i>Modalidades</a></li>
        <li class="active">Lista</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <a href="{{ route('admin.modalidades.create') }}"
               class="btn btn-primary"> Crear Modalidad</a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="box">
            @if(count($modalities) <= 0)

            <p>No hay Modalidades. <a href="{{ route('admin.modalidades.create') }}">Crea una nueva</a></p>

            @else
            <table class="table table-bordered table-hover dataTable">
                <thead>
                <th>Nombre</th>
                <th colspan="2">Acciones</th>
                </thead>
                <tbody>
                    @foreach($modalities as $modality)
                    <tr>
                        <td>{{ $modality->name }}</td>


                        <td class="actions">
                            <a href="{{ route('admin.modalidades.edit', [ 'id' => $modality->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.modalidades.destroy',$modality->id]]) !!}
                            <a href="#" onclick="jQuery(this).parents('form:first').submit()"><i style="color:#ED2A2A" class="glyphicon glyphicon-remove"></i></a>
                            {!! Form::close() !!}
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection


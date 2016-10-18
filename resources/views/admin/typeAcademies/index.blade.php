@extends('layouts.admin')

@section('header-title')
<h1>
    Tipos de Academias
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.tiposdeacademia.index') }}"><i class="fa fa-link"></i>Tipos de Academias</a></li>
        <li class="active">Lista</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <a href="{{ route('admin.tiposdeacademia.create') }}"
               class="btn btn-primary"> Crear Tipo de Academia</a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="box">
            @if(count($typeAcademies) <= 0)

            <p>No hay Tipos de Academias. <a href="{{ route('admin.tiposdeacademia.create') }}">Crea una nueva</a></p>

            @else
            <table class="table table-bordered table-hover dataTable">
                <thead>
                <th>Name</th>
                <th>Acciones</th>
                </thead>
                <tbody class="table-middle">
                    @foreach($typeAcademies as $typeAcademy)
                    <tr>
                        <td>{{ $typeAcademy->name }}</td>

                        <td class="actions">
                            <a href="{{ route('admin.tiposdeacademia.edit', [ 'id' => $typeAcademy->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.tiposdeacademia.destroy',$typeAcademy->id]]) !!}
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


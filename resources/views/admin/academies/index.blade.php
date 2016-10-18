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
        <li><a href="{{ route('admin.academias.index') }}"><i class="fa fa-link"></i>Academias</a></li>
        <li class="active">Lista</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="pull-right">
            <a href="{{ route('admin.academias.create') }}"
               class="btn btn-primary"> Crear Academia</a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="box">
            @if(count($academies) <= 0)

            <p>No hay Academias. <a href="{{ route('admin.academias.create') }}">Crea una nueva</a></p>

            @else
            <table class="table table-bordered table-hover dataTable">
                <thead>
                <th>Avatar</th>
                <th>Name</th>
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Codigo Postal</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th colspan="2">Acciones</th>
                </thead>
                <tbody class="table-middle">
                    @foreach($academies as $academy)
                    <tr>
                        <td><img src="{{ asset('storage/academy/'. $academy->id . '/thumb/' . $academy->avatar) }}" alt=""></td>

                        <td>{{ $academy->name }}</td>
                        <td>{{ $academy->type_academy->name }}</td>
                        <td>{{ $academy->description }}</td>
                        <td>{{ $academy->zip_code }}</td>
                        <td>{{ $academy->direction }}</td>
                        <td>{{ $academy->phone }}</td>

                        <td class="actions">
                            <a href="{{ route('admin.academias.edit', [ 'id' => $academy->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.academias.destroy',$academy->id]]) !!}
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


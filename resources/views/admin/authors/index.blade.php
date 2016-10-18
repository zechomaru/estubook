@extends('layouts.admin')

@section('header-title')
<h1>
    Autores
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.autores.index') }}"><i class="fa fa-link"></i>Autores</a></li>
        <li class="active">Lista</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <a href="{{ route('admin.autores.create') }}"
               class="btn btn-primary"> Crear Autor</a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="box">
            @if(count($authors) <= 0)

            <p>No hay Autores. <a href="{{ route('admin.autores.create') }}">Crea una nueva</a></p>

            @else
            <table class="table table-bordered table-hover dataTable">
                <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th colspan="2">Acciones</th>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->lastname }}</td>
                        <td>{{ date('d / m / Y' ,strtotime($author->birthdate)) }}</td>


                        <td class="actions">
                            <a href="{{ route('admin.autores.edit', [ 'id' => $author->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.autores.destroy',$author->id]]) !!}
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


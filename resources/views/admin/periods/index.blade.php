@extends('layouts.admin')

@section('header-title')
<h1>
    Periodos
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.periodos.index') }}"><i class="fa fa-link"></i>Periodos</a></li>
        <li class="active">Lista</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <a href="{{ route('admin.periodos.create') }}"
               class="btn btn-primary"> Crear un Periodo</a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="box">
            @if(count($periods) <= 0)

            <p>No hay periodos. <a href="{{ route('admin.periodos.create') }}">Crea una nueva</a></p>

            @else
            <table class="table table-bordered table-hover dataTable">
                <thead>
                <th>Nombre</th>
                <th colspan="2">Acciones</th>
                </thead>
                <tbody>
                    @foreach($periods as $period)
                    <tr>
                        <td>{{ $period->name }}</td>

                        <td>
                            <a href="{{ route('admin.periodos.edit', [ 'id' => $period->id]) }}">Edit</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.periodos.destroy',$period->id]]) !!}
                            <a href="#" onclick="jQuery(this).parents('form:first').submit()">Delete</a>
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


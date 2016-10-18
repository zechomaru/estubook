@extends('layouts.admin')

@section('header-title')
<h1>
    Libros
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.libros.index') }}"><i class="fa fa-link"></i>Libros</a></li>
        <li class="active">Lista</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="pull-right">
            <a href="{{ route('admin.libros.create') }}"
               class="btn btn-primary"> Crear Libro</a>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="box">
            @if(count($books) <= 0)

            <p>No hay Libros. <a href="{{ route('admin.libros.create') }}">Crea una nueva</a></p>

            @else
            <table class="table table-bordered table-hover dataTable">
                <thead>
                <th>Imagen</th>
                <th>ISBN</th>
                <th>Nombre</th>
                <th>Fecha de Publicación</th>
                <th>Paginas</th>
                <th>Edición</th>
                <th>Autores</th>
                <th colspan="2">Acciones</th>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td><img src="{{ asset('storage/book/'. $book->id . '/thumb/' . $book->avatar) }}" alt=""></td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->year_publication }}</td>
                        <td>{{ $book->number_page }}</td>
                        <td>{{ $book->edition }}</td>
                        <td>
                            @foreach($book->authors as $author)
                                <li>{{$author->name . ' ' . $author->lastname}}</li>
                            @endforeach
                        </td>


                        <td class="actions">
                            <a href="{{ route('admin.libros.edit', [ 'id' => $book->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.libros.destroy',$book->id]]) !!}
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


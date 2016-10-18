@extends('layouts.admin')
@section('header-title')
<h1>
    Editar Autor
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="{{ route('admin.autores.index') }}"><i class="fa fa-link"></i>Autores</a></li>
        <li class="active">Editar</li>
    </ol>
@endsection
@section('content')
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($author, ['method' => 'PUT', 'route' => ['admin.autores.update', $author->id]]) !!}
                    @include('template.text',['key' => 'name','label' => 'Nombre', 'data' => $author->name])
                    @include('template.text',['key' => 'lastname','label' => 'Apellido', 'data' => $author->lastname])
                    @include('template.datetime', ['key' => 'birthdate', 'label' => 'Fecha de nacimiento', 'data' => $author->birthdate])

                        @include('template.hidden',['key' => 'id'])
                        @include('template.submit',['label' => 'Actualizar'])  
                {!! Form::close() !!}
            </div>
        </div>
        <script src="{{ url('plugins/input-mask/jquery.inputmask.js') }}"></script>
        <script src="{{ url('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
        <script src="{{ url('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

        <script>
          
          $(function () {

            //Datemask dd/mm/yyyy
            $("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "dd/mm/yyyy"});
            //Datemask2 mm/dd/yyyy
            $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
            //Money Euro
            $("[data-mask]").inputmask();


            //Date picker
            $('#datepicker').datepicker({
              autoclose: true
            });


          });

        </script>
@endsection
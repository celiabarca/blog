@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['url' => 'admin.categories.store ']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'nombre') !!}
                    {!! Form::text('name', null , ['class'=>'form-control', 'placeholder'=>'Categoria']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null , ['class'=>'form-control', 'placeholder'=>'URL']) !!}
                </div>
                {!! Form::submit('Crear categoria', ['class'=>"btn btn-primary"]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
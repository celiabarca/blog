@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <a class="btn btn-secondary" href="{{route('admin.categories.create')}}">Crear Categorias</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td colspan="2"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="10px"><a href="{{route('admin.categories.edit', $category)}}" class="btn btn-primary btn-sm">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-danger btn btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
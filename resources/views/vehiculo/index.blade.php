@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Vehiculo index</p>
    <a href="vehiculos/create" class="btn btn-primary">Crear</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Patente</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Año</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->id}}</td>
                <td>{{ $vehiculo->patente}}</td>
                <td>{{ $vehiculo->marca}}</td>
                <td>{{ $vehiculo->modelo}}</td>
                <td>{{ $vehiculo->annio}}</td>
                <td>{{ $vehiculo->tipo}}</td>
                
                <td>
                    <form action="{{route ('vehiculos.destroy', $vehiculo->id)}}" method="POST">
                    
                    <a class="btn btn-info" href="/vehiculos/{{ $vehiculo->id}}/edit">Editar</a>
                   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>pedido index</p>
    <a href="pedidos/create" class="btn btn-primary">Crear</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                @can('admin')
                <th scope="col">ID</th>
                @endcan
                <th scope="col">Destinatario</th>
                <th scope="col">Contacto</th>
                <th scope="col">Peso (kg)</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">V-Asignado</th>
                <th scope="col">Cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
            <tr>
                @can('admin')
                <td>{{ $pedido->id}}</td>
                @endcan
                <td>{{ $pedido->destinatario}}</td>
                <td>{{ $pedido->contacto}}</td>
                <td>{{ $pedido->peso}}</td>
                <td>{{ $pedido->descripcion}}</td>
                <td>{{ $pedido->estado}}</td>
               
                
                    

                <td>{{$pedido->vehiculo->patente}}</td>
                <td>{{$pedido->user->name}} {{$pedido->user->apellido}}</td>
                
                

                {{-- <td>{{ $pedido->estado}}</td> --}}
                
                
                

                
                <td>
                    <form action="{{route ('pedidos.destroy', $pedido->id)}}" method="POST">
                    @can('admin')
                    <a class="btn btn-info" href="/pedidos/{{ $pedido->id}}/edit">Editar</a>
                    @csrf
                    
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    @endcan
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
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Crear Pedido</h2>
    <form action="/pedidos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input id="id" name="id" type="text" class="form-control" tabindex="1" value="{{old('id')}}" autofocus>
        @if ($errors->has('id'))
            <span class="error text-danger" for="input-id">{{ $errors->first('id')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Destinatario</label>
        <input id="destinatario" name="destinatario" type="tel" class="form-control" tabindex="2" value="{{old('destinatario')}}" autofocus>
        @if ($errors->has('destinatario'))
            <span class="error text-danger" for="input-destinatario">{{ $errors->first('destinatario')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Peso(Kg)</label>
        <input id="peso" name="peso" type="tel" class="form-control" tabindex="2" value="{{old('peso')}}" autofocus>
        @if ($errors->has('peso'))
            <span class="error text-danger" for="input-peso">{{ $errors->first('peso')}}</span>
        @endif
    </div>
        
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="tel" class="form-control" tabindex="2" value="{{old('descripcion')}}" autofocus>
        @if ($errors->has('descripcion'))
            <span class="error text-danger" for="input-descripcion">{{ $errors->first('descripcion')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contacto</label>
        <input id="contacto" name="contacto" type="tel" class="form-control" tabindex="2" value="{{old('contacto')}}" autofocus>
        @if ($errors->has('contacto'))
            <span class="error text-danger" for="input-contacto">{{ $errors->first('contacto')}}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="tel" class="form-control" tabindex="2" value="{{old('estado')}}" autofocus>
        @if ($errors->has('estado'))
            <span class="error text-danger" for="input-estado">{{ $errors->first('estado')}}</span>
        @endif
    </div>
    <a href="/pedidos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
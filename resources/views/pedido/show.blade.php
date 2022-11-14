@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? 'Show Pedido' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Destinatario:</strong>
                            {{ $pedido->destinatario }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pedido->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $pedido->peso }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $pedido->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $pedido->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Servicio:</strong>
                            {{ $pedido->id_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Vehiculo:</strong>
                            {{ $pedido->id_vehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Precio:</strong>
                            {{ $pedido->id_precio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $pedido->id_cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Destinatario</th>
										<th>Estado</th>
										<th>Peso</th>
										<th>Descripcion</th>
										<th>Contacto</th>
										<th>Id Servicio</th>
										<th>Id Vehiculo</th>
										<th>Id Precio</th>
										<th>Id Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pedido->destinatario }}</td>
											<td>{{ $pedido->estado }}</td>
											<td>{{ $pedido->peso }}</td>
											<td>{{ $pedido->descripcion }}</td>
											<td>{{ $pedido->contacto }}</td>
											<td>{{ $pedido->id_servicio }}</td>
											<td>{{ $pedido->id_vehiculo }}</td>
											<td>{{ $pedido->id_precio }}</td>
											<td>{{ $pedido->id_cliente }}</td>

                                            <td>
                                                <form action="{{ route('pedidos.destroy',$pedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedidos.show',$pedido->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedidos.edit',$pedido->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pedidos->links() !!}
            </div>
        </div>
    </div>
@endsection

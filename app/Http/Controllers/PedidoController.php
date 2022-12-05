<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

//Referencias
use App\Models\User;
use App\Models\Servicio;
use App\Models\Vehiculo;
use App\Models\Precio;



use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoFaadExpress;

class PedidoController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedido.index')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //llamamos a los modelos
        $pedidos = Pedido::all();
        $users = User::all();
        $servicios = Servicio::all();
        $vehiculos = Vehiculo::all();
        $precios = Precio::all();

       
        
        return view('pedido.create')->with(compact('pedidos', 'users', 'servicios', 'vehiculos', 'precios'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //asignacion default valor vehiculo_id me tome en el index uwu
        

        $pedidos = new Pedido();        
        $pedidos->id = $request -> get('id');
        $pedidos->destinatario = $request -> get('destinatario');
        $pedidos->peso = $request -> get('peso');
        $pedidos->descripcion = $request -> get('descripcion');
        $pedidos->contacto = $request -> get('contacto');
        $pedidos->estado = $request -> get('estado');
        //Claves foraneas
        
        // $pedidos->servicio_id = $request -> get('servicio_id');
        $pedidos->vehiculo_id = $request -> get('vehiculo_id');
        $pedidos->cliente_id = $request -> get('cliente_id');
        // $pedidos->precio_id = $request -> get('precio_id');

        $pedidos->save();

        Mail::to($request->user())
        ->send(new PedidoFaadExpress($pedidos));
        

        return redirect('/pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        //llamamos a los modelos
        $users = User::all();
        $servicios = Servicio::all();
        $vehiculos = Vehiculo::all();
        $precios = Precio::all();

        return view('pedido.edit')->with('pedido', $pedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedidos = Pedido::find($id);

        $pedidos->id = $request -> get('id');
        $pedidos->destinatario = $request -> get('destinatario');
        $pedidos->peso = $request -> get('peso');
        $pedidos->descripcion = $request -> get('descripcion');
        $pedidos->contacto = $request -> get('contacto');
        $pedidos->estado = $request -> get('estado');

        //Claves foraneas
        
        // $pedidos->servicio_id = $request -> get('servicio_id');
        $pedidos->vehiculo_id = $request -> get('vehiculo_id');
        $pedidos->cliente_id = $request -> get('cliente_id');
        // $pedidos->precio_id = $request -> get('precio_id');

        

        $pedidos->save();

        return redirect('/pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido -> delete();
        return redirect ('/pedidos');
    }


    

}



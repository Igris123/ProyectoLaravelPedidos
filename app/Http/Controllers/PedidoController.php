<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\Pedido;
>>>>>>> da52587aef20c18180c6c1ff554d0611882985c0

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
<<<<<<< HEAD
        return view('pedido.create');
=======
        //
>>>>>>> da52587aef20c18180c6c1ff554d0611882985c0
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $pedidos = new Pedido();
        $pedidos->id = $request -> get('id');
        $pedidos->destinatario = $request -> get('destinatario');
        $pedidos->contacto = $request -> get('contacto');
        $pedidos->peso = $request -> get('peso');
        $pedidos->descripcion = $request -> get('descripcion');
        $pedidos->estado = $request -> get('estado');

        $pedidos->save();

        return redirect('/pedidos');
=======
        //
>>>>>>> da52587aef20c18180c6c1ff554d0611882985c0
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
<<<<<<< HEAD
        $pedido = Pedido::find($id);
        return view('pedido.edit')->with('pedido', $pedido);
=======
        //
>>>>>>> da52587aef20c18180c6c1ff554d0611882985c0
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
<<<<<<< HEAD
        $pedidos = new Pedido();
        $pedidos->id = $request -> get('id');
        $pedidos->destinatario = $request -> get('destinatario');
        $pedidos->contacto = $request -> get('contacto');
        $pedidos->peso = $request -> get('peso');
        $pedidos->descripcion = $request -> get('descripcion');
        $pedidos->estado = $request -> get('estado');

        $pedidos->save();

        return redirect('/pedidos');
=======
        //
>>>>>>> da52587aef20c18180c6c1ff554d0611882985c0
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $pedido = Pedido::find($id);
        $pedido -> delete();
        return redirect ('/pedidos');
    }
}

=======
        //
    }
}
>>>>>>> da52587aef20c18180c6c1ff554d0611882985c0

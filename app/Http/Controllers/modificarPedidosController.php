<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modificarPedidosController extends Controller
{
    public function retornoModificarPedido(){
        return view('modificarPedido');
    }
}

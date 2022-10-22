<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crearPedidosController extends Controller
{
    public function retornoCrearPedido(){
        return view('crearPedido');
    }
}

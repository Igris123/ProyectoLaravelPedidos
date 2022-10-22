<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pedidosController extends Controller
{
    public function retornoPedido(){
        return view('pedidos');
    }
}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\crearPedidoController;

class seguimientoController extends Controller
{
    public function retornoSeguimiento(){

        return view('seguimiento');
    }

    
}


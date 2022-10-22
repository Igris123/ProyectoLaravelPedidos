<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crearConductoresController extends Controller
{
    public function retornoCrearConductores(){
        return view('crearConductores');
    }
}

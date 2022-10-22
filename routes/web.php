<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landingpage');
});

/*
Route::get('/', function () {
    return view('auth.login');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
    Route::get('/pedidos', function () {
        return view('pedidos');
    })->name('pedidos');
    Route::get('/crearPedido', function () {
        return view('crearPedido');
    })->name('crearPedido');
    Route::get('/clientes', function () {
        return view('clientes');
    })->name('clientes');
    Route::get('/conductores', function () {
        return view('conductores');
    })->name('conductores');
    Route::get('/crearConductores', function () {
        return view('crearConductores');
    })->name('crearConductores');
    Route::get('/modificarPedido', function () {
        return view('modificarPedido');
    })->name('modificarPedido');
});

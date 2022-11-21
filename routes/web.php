<?php

use Illuminate\Support\Facades\Route;

use App\Mail\PedidoFaadExpress;
use Illuminate\Support\Facades\Mail;
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

/*
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landingpage');
});*/

Route::get('/', [App\Http\Controllers\landingPageController::class, 'index'])->name('landingpage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', [App\Http\Controllers\DashController::class, 'index'])->name('dashboard');
    Route::get('/pedidos', [App\Http\Controllers\pedidosController::class, 'retornoPedido'])->name('pedidos');
    Route::get('/crearPedido', [App\Http\Controllers\crearPedidoController::class, 'retornoCrearPedido'])->name('crearPedido');
    Route::get('/clientes', [App\Http\Controllers\clientesController::class, 'retornoClientes']);
    Route::get('/conductores', [App\Http\Controllers\conductoresController::class, 'retornoConductores']);
    Route::get('/crearConductores', [App\Http\Controllers\crearConductorController::class, 'retornoCrearConductor'])->name('crearConductor');
    Route::get('/modificarPedido', [App\Http\Controllers\modificarPedidoController::class, 'retornoModificarPedido'])->name('modificarPedido');

    // C R U D //
    Route::resource('vehiculos', 'App\Http\Controllers\VehiculoController');
    Route::resource('pedidos', 'App\Http\Controllers\PedidoController');
    Route::resource('servicios', 'App\Http\Controllers\ServicioController');
    Route::resource('users', 'App\Http\Controllers\UserController');
    Route::resource('precios', 'App\Http\Controllers\PrecioController');
    Route::resource('tipos', 'App\Http\Controllers\TipoController');
    Route::resource('estados', 'App\Http\Controllers\EstadoController');
    Route::resource('cotizacions', 'App\Http\Controllers\CotizacionController');
});

Route::get('envio', function(){
    $correo = new PedidoFaadExpress;

    Mail::to('juanpablog2.0@gmail.com')->send($correo);

    return "Mensaje enviado";
});

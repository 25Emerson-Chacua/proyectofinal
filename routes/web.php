<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\ClientesController;
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

//¡BIENVENIDOS AL SUPERMERCADO!
Route::get('/', [Administracion::class, 'index']) ;

// Clientes
Route::get('clientes', [ClientesController::class, 'index'] )->name('listadoClientes');
Route::get('clientes/registro', [ClientesController::class , 'formularioReg'])->name('form_registroCliente');
Route::post('clientes/registro', [ClientesController::class, 'registrar'])->name('registrarCliente');
Route::get('clientes/actualizar/{id}', [ClientesController::class, 'formularioAct'])->name('form_actualizaCliente');
Route::post('clientes/actualizar/{id}', [ClientesController::class, 'actualizar'])->name('actualizarCliente');
Route::get('clientes/eliminar/{id}', [ClientesController::class, 'eliminar'])->name('eliminarCliente');
Route::get('clientes/activar/{id}', [ClientesController::class, 'activar'])->name('activarCliente');

Route::get('clientes/consulta', [ClientesController::class, 'form_consulta'])->name('form_consultaProducto');
Route::post('clientes/consulta', [ClientesController::class, 'consultar'])->name('consulta_cliente');
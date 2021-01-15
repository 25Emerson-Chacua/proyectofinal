<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
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

// Categorias 
Route::get('categorias', [CategoriasController::class, 'index'])->name('listadoCategorias');
Route::get('categorias/registro', [CategoriasController::class , 'formularioReg'])->name('form_registroCategoria');
Route::post('categorias/registro', [CategoriasController::class, 'registrar'])->name('registrarCategoria');
Route::get('categorias/actualizar/{id}', [CategoriasController::class, 'formularioAct'])->name('form_actualizaCategoria');
Route::post('categorias/actualizar/{id}', [CategoriasController::class, 'actualizar'])->name('actualizarCategoria');
Route::get('categorias/eliminar/{id}', [CategoriasController::class, 'eliminar'])->name('eliminarCategoria');
Route::get('categorias/activar/{id}', [CategoriasController::class, 'activar'])->name('activarCategoria');

// Productos

Route::get('productos', [ProductosController::class, 'listado'])->name('listadoProductos');
Route::get('productos/ordenado/producto', [ProductosController::class, 'porProducto'])->name('porProducto');
Route::get('productos/ordenado/categoria', [ProductosController::class, 'porCategoria'])->name('porCategoria');
Route::get('productos/ordenado/precio', [ProductosController::class, 'porPrecio'])->name('porPrecio');
Route::get('productos/detalle/{id}', [ProductosController::class, 'detalle']);
Route::get('productos/registro', [ProductosController::class , 'formulario_registrar']);
Route::post('productos/registro', [ProductosController::class , 'registrar']);
Route::get('productos/actualizar/{id}', [ProductosController::class, 'formulario_actualizar']);

Route::post('productos/actualizar/{id}', [ProductosController::class, 'actualizar']);

Route::get('productos/eliminar/{id}', [ProductosController::class, 'eliminar']);

Route::get('productos/consulta', [ProductosController::class, 'formulario_consultar']);

Route::post('productos/consulta', [ProductosController::class, 'consultar']);

Route::get('productos/{id}/{descripcion?}', [ProductosController::class, 'descripcion']);

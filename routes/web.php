<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('paginaweb', function () {
    return view('paginaweb');
});

Route::get('registro', function () {
    return view('registro');
});

Route::get('cesion', function () {
    return view('cesion');
});

Route::get('registro_producto', function () {
    return view('registro_producto');
});
Route::get('indice', function () {
    return view('indice');
});
Route::get('superKompas', function () {
    return view('superKompas');
});

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SessionController;

// Rutas para el controlador de Personas
Route::resource('personas', PersonaController::class);

// Rutas para el controlador de Usuarios (UserController)
Route::resource('users', UserController::class);

// Rutas para el controlador de Clientes
Route::resource('clientes', ClienteController::class);

// Rutas para el controlador de Ventas
Route::resource('ventas', VentaController::class);

// Rutas para el controlador de Detalle de Venta
Route::resource('detalle_venta', DetalleVentaController::class);

// Rutas para el controlador de Inventarios
Route::resource('inventarios', InventarioController::class);

// Rutas para el controlador de Productos
Route::resource('productos', ProductoController::class);

// Rutas para el controlador de Proveedores
Route::resource('proveedores', ProveedorController::class);

// Rutas para el controlador de Sessions
Route::resource('sessions', SessionController::class);


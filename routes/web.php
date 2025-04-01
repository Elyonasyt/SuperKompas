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

Route::resource('persona', App\Http\Controllers\PersonaController::class);


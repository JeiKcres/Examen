<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/paginaprincipal', [DirectorioController::class , 'paginaPrincipal']);

Route::get('/directorio/crear', [DirectorioController::class , 'crearEntrada'])->name('directorio.crear');
Route::get('/directorio/buscar', [DirectorioController::class , 'buscarEntrada'])->name('directorio.buscar');
Route::get('/directorio/vercontactos', [DirectorioController::class , 'verEntrada'])->name('directorio.ver');
Route::get('/directorio/eliminar', [DirectorioController::class , 'eliminarEntrada'])->name('directorio.eliminar');

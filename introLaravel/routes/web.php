<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

/* Route::get('/', function () {
    return view(view: 'inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view(view: 'formulario');
})->name('rutaFormulario');

Route::get('/consultar', function () {
    return view(view: 'clientes');
})->name('rutaClientes'); */

/* Route::view('/','inicio')->name('rutaInicio');
Route::view('/form','formulario')->name('rutaFormulario');
Route::view('/consultar','clientes')->name('rutaClientes');
Route::view('/component','componentes')->name('rutaComponent'); */

/* Rutas para controladorVistas */

Route::get('/',[ControladorVistas::class, 'home'])->name('rutaInicio');
/* Route::get('/form',[ControladorVistas::class, 'formulario'])->name('rutaFormulario'); */



/* Rutas para controlador clienteController */

Route::get('/cliente/create',[clienteController::class, 'create'])->name('rutaFormulario');
Route::post('/cliente',[clienteController::class, 'store'])->name('rutaEnviar');
Route::get('/cliente',[clienteController::class, 'index'])->name('rutaClientes');
Route::get('/cliente/{id}/editar',[clienteController::class, 'edit'])->name('rutaFormularioEditar');
Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('rutaActualizar');

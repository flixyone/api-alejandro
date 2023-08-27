<?php

use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\login\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vista_api_pokemones.listaPokemon');
})->name('listaPokemones');

Route::get('/Login', [LoginController::class, 'login'])->name('login');

Route::post('/Login/verificar', [LoginController::class, 'verificarLogin'])->name('verificarLogin');

Route::get('/Login/crear/usuario', [LoginController::class, 'crearUsuario'])->name('crearUsuario');

Route::post('/Login/guardar/usuario', [LoginController::class, 'guardarUsuario'])->name('guardarUsuario');

Route::get('/Login/cerrar', [LoginController::class, 'finalizarSesionUsuario'])->name('finalizarSesionUsuario');

Route::get('/Pokemon/informacion/{id}', [ApiController::class, 'informacionPokemon'])->name('informacionPokemon');
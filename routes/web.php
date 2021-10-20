<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


/**
 * UsuarioController
 */
Route::get("usuario/index",     [UsuarioController::class, 'index']);
Route::get("usuario/form/{id}", [UsuarioController::class, 'form']);
Route::post("usuario/save",     [UsuarioController::class, 'save']);
Route::post("usuario/delete",   [UsuarioController::class, 'delete']);


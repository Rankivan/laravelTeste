<?php

use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;


/**
 * UsuarioController
 */
Route::get("/teste", [TesteController::class, 'index']);
Route::get("/delete", [TesteController::class, 'delete']);


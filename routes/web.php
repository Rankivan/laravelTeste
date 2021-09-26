<?php

use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;


/**
 * UsuarioController
 */
Route::get("/teste",  [TesteController::class, 'index']);
Route::get("/form",   [TesteController::class, 'form']);
Route::post("/create", [TesteController::class, 'create']);
Route::post("/delete", [TesteController::class, 'delete']);


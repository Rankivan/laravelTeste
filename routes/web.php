<?php

use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;


/**
 * UsuarioController
 */
Route::get("/teste",     [TesteController::class, 'index']);
Route::get("/form/{id}", [TesteController::class, 'form']);
Route::post("/save",     [TesteController::class, 'save']);
Route::post("/delete",   [TesteController::class, 'delete']);


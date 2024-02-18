<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::get('/personas', [PersonasController::class, 'index']);
Route::post('/personas', [PersonasController::class, 'create']);
Route::put('/personas', [PersonasController::class, 'update']);
Route::delete('/personas', [PersonasController::class, 'delete']);
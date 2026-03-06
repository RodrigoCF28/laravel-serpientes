<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\VenenosasController;
use App\Http\Controllers\GaleriaController;

Route::get('/', [InicioController::class, 'index']);
Route::get('/venenosas', [VenenosasController::class, 'index']);
Route::get('/galeria', [GaleriaController::class, 'index']);
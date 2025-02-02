<?php

use App\Http\Controllers\NumeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/numero',[NumeroController::class, 'numeroSecreto']);
Route::post('/gameOver',[NumeroController::class, 'gameOver']);
Route::post('/numero', [NumeroController::class, 'resultado']);
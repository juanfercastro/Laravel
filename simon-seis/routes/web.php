<?php

use App\Http\Controllers\SimonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simon',[SimonController::class, 'simonSays']);
Route::post('/simon', [SimonController::class, 'resultado']);
Route::post('/gameOver',[SimonController::class, 'gameOver']);
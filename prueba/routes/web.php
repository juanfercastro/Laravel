<?php

use App\Http\Controllers\AlumnController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('info');

Route::get('/hola', function () {
    return view('hola');
});

Route::get('/principal', [HolaController::class,'show']);

/* Route::get('/saludo/general', [HolaController::class,'general']); */

Route::get('/saludo/{nombre?}', [HolaController::class,'saludo']);

Route::delete('usuario/eliminar/{id}',[UserController::class, 'eliminar']);

Route::post('usuario/alta',[UserController::class, 'alta'])->name("alta-usuario");

Route::get('/usuario/alta',[UserController::class, 'formAlta'])->name('alta-form');

Route::get('/producto/alta',[ProductController::class, 'addProduct']);
Route::get('/producto/listar',[ProductController::class, 'getProducts']);
Route::get('/producto/listar/{id}',[ProductController::class, 'getProduct']);

Route::get('alumno/alta',[AlumnController::class, 'addAlumn']);
Route::get('/alumno/listar',[AlumnController::class, 'getAlumns']);
Route::get('/alumno/listar/{id?}',[AlumnController::class, 'getAlumn']);
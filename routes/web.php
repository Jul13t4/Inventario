<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');


Route::get('/login', [SessionsController::class, 'create'])
    ->name('login.index');

Route::post('/login', [RegisterController::class, 'store'])
    ->name('login.store');

Route::get('/data', function () {
    return view('welcome');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('ListadoSolicitudes',[SolicitudesController::class,'ListadoSolicitudes']);
Route::post('guardarData',[SolicitudesController::class,'guardarData']);
Route::post('insertarData',[SolicitudesController::class,'insertarData']);
Route::post('usuarios',[SolicitudesController::class,'usuarios']);
Route::delete('eliminarData',[SolicitudesController::class,'eliminarData']);

/**
 * rutas user
 */              //ruta         controlador             //nombre funcion
Route::get('ListadoUsuarios',[UsuariosController::class,'ListadoUsuarios']);

/**
 * rutas productos
 */              //ruta         controlador             //nombre funcion
 Route::get('Productos',[SolicitudesController::class,'productos']);
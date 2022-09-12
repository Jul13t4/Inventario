<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

/**
 * rutas de login
 */              //ruta         controlador             //nombre funcion

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

/**
 * rutas de registro
 */              //ruta         controlador             //nombre funcion
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/data', function () {
    return view('welcome');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});
Route::get('/productos-view', function () {
    return view('theme-producto.home');
});

Route::get('ListadoSolicitudes',[SolicitudesController::class,'ListadoSolicitudes']);
Route::post('guardarData',[SolicitudesController::class,'guardarData']);
Route::post('insertarData',[SolicitudesController::class,'insertarData']);
Route::post('usuarios',[SolicitudesController::class,'usuarios']);

/**
 * rutas user
 */              //ruta         controlador             //nombre funcion
Route::get('ListadoUsuarios',[UsuariosController::class,'ListadoUsuarios']);

/**
 * rutas productos
 */              //ruta         controlador             //nombre funcion
 Route::get('Productos',[SolicitudesController::class,'productos']);
 Route::get('showProducts',[AdminController::class,'showProducts']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EmpresaEmisoraController;
use App\Http\Controllers\EmpresaReceptoraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

//metodos de registro
Route::get('/registro', [RegisterController::class, 'index'])->name('registro');
Route::post('/registro', [RegisterController::class, 'store']);

Route::get('/muro', [PostController::class, 'index'])->name('posts.index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/EmpresaEmisora', [EmpresaEmisoraController::class, 'index'])->name('EmpresaE.index');
Route::post('/EmpresaEmisora', [EmpresaEmisoraController::class, 'store'])->name('EmpresaE.store');
Route::get('/fact/index', [EmpresaEmisoraController::class, 'index'])->name('fact.index');

Route::get('/EmpresaReceptora', [EmpresaReceptoraController::class, 'index'])->name('EmpresaR.index');
Route::post('/EmpresaReceptora', [EmpresaReceptoraController::class, 'store'])->name('EmpresaR.store');
Route::post('/fact/index', [EmpresaReceptoraController::class, 'index']);

Route::post('/archivos', [ArchivoController::class, 'store'])->name('archivos.store');
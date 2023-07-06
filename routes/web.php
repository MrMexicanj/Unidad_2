<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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

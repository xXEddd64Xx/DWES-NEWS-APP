<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autores', [AutorController::class, 'index'])
-> name('autores.index');

Route::get('/categorias', [CategoriaController::class, 'index'])
-> name('categorias.index');

Route::get('/noticias', [NoticiaController::class, 'index'])
-> name('noticias.index');
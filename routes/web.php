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

Route::get('/autores/crear', [AutorController::class, 'create'])
-> name('autores.create');

Route::post('/autores/crear', [AutorController::class, 'store'])
-> name('autores.store');

Route::get('/categorias/crear', [CategoriaController::class, 'create'])
-> name('categorias.create');

Route::post('/categorias/crear', [CategoriaController::class, 'store'])
-> name('categorias.store');

Route::get('/noticias/crear', [NoticiaController::class, 'create'])
-> name('noticias.create');

Route::post('/noticias/crear', [NoticiaController::class, 'store'])
-> name('noticias.store');
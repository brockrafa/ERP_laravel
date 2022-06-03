<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\AppController::class,'index'])->name('site.index');
Route::get('/chamados', [\App\Http\Controllers\AppController::class,'chamados'])->name('site.chamados');
Route::get('/novo-chamado', [\App\Http\Controllers\AppController::class,'novoChamado'])->name('site.novo_chamado');
Route::get('/features', [\App\Http\Controllers\AppController::class,'features'])->name('site.features');
<?php

use App\Http\Controllers\Frontend\ContatoController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\SobreController;
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


Route::get('/', [IndexController::class, 'index'])->name('frontend.index');

Route::get('/sobre-nos', [SobreController::class, 'index'])->name('frontend.sobre');;

Route::get('/contato', [ContatoController::class, 'index'])->name('frontend.contato');;


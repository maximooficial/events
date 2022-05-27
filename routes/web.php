<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\PainelController;

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


Route::get('/eventos', [EventosController::class, 'index']); 
Route::get('/eventos/novo', [EventosController::class, 'novo']); 

Auth::routes();

// rotas do painel 

Route::get('/painel', [App\Http\Controllers\PainelController::class, 'painel'])->name('painel');
Auth::routes();

Route::get('/criareventos', [App\Http\Controllers\PainelController::class, 'eventos'])->name('criareventos');
Auth::routes();

//Route::get('/criareventos', [App\Http\Controllers\PainelController::class, 'painel'])->name('criareventos');
//Auth::routes();

Route::post('/enviareventos', [App\Http\Controllers\PainelController::class, 'store'])->name('enviareventos');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosControler;
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


Route::get('/eventos', [EventosControler::class, 'index']); 
Route::get('/eventos/novo', [EventosControler::class, 'novo']); 

Route::get('/painel', function () {
    return view('painel/index');
});



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/painel', [App\Http\Controllers\HomeController::class, 'index'])->name('painel');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

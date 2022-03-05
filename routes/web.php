<?php

use App\Http\Controllers\BotManController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DenunciaController;
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

Route::get('/', function () {
    return view('welcome');
})->name('inicio');;

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('/denuncias', DenunciaController::class)->names('denuncias');


Route::get('/quienes', function () {
    return view('welcome');
})->name('quienes');;

Route::get('/creditos', function () {
    return view('welcome');
})->name('creditos');;

Route::get('/estadisticas', function () {
    return view('welcome');
})->name('estadisticas');;

Route::get('/ver', function () {
    return view('ver');
})->name('ver');

Route::get('/fin', function () {
    return view('fin');
})->name('fin');


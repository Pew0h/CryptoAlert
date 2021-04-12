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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'home']); //appel de la fonction home

Route::get('/alerts/create/{coin}', [\App\Http\Controllers\AlertController::class, 'create'])->name('createCoin'); //appel de la fonction home
Route::get('/alerts/', [\App\Http\Controllers\AlertController::class, 'index'])->name('alerts.index'); //appel de la fonction home

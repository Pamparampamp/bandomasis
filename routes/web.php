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
Route::middleware(['auth'])->group(function(){
Route::resource('betters', App\Http\Controllers\BetterController::class);
Route::resource('horses', App\Http\Controllers\HorseController::class);
Route::get('horses/{id}/travel', [App\Http\Controllers\HorseController::class, 'travel'])->name('horses.travel');
Route::get('betters/{id}/info', [App\Http\Controllers\BetterController::class, 'info'])->name('betters.info');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

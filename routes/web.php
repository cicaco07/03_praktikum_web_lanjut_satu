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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/homee', [App\Http\Controllers\HomeeController::class, 'index'])->name('homee');

Route::prefix('product')->group(function(){
    Route::get('/bestseller', [App\Http\Controllers\ProductController::class, 'bestseller'])->name('bestseller');
    Route::get('/food', [App\Http\Controllers\ProductController::class, 'food'])->name('food');
    Route::get('/promo', [App\Http\Controllers\ProductController::class, 'promo'])->name('promo');
});

Route::get('/news/{id}', [App\Http\Controllers\NewsController::class, 'index']);

Route::prefix('program')->group(function(){
    Route::get('/pro1', [App\Http\Controllers\ProgramController::class, 'index']);
    Route::get('/pro2', [App\Http\Controllers\ProgramController::class, 'pro1']);
});
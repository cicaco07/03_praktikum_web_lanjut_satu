<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/homie', [App\Http\Controllers\HomieController::class, 'index'])->name('homie');

Route::prefix('product')->group(function(){
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
    Route::get('/bestseller', [App\Http\Controllers\ProductController::class, 'bestseller'])->name('bestseller');
    Route::get('/food', [App\Http\Controllers\ProductController::class, 'food'])->name('food');
    Route::get('/promo', [App\Http\Controllers\ProductController::class, 'promo'])->name('promo');
});

Route::get('/news/{id?}', [App\Http\Controllers\NewsController::class, 'index'])->name('news');

Route::prefix('program')->group(function(){
    Route::get('/', [App\Http\Controllers\ProgramController::class, 'index'])->name('program');
    Route::get('/promo-puasa', [App\Http\Controllers\ProgramController::class, 'puasa'])->name('puasa');
    Route::get('/makan-gratis', [App\Http\Controllers\ProgramController::class, 'gratis'])->name('gratis');
    Route::get('/berbagi-takjil', [App\Http\Controllers\ProgramController::class, 'takjil'])->name('takjil');
});

Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutus');

Route::resource('contactus', ContactUsController::class)->only('index','destroy');
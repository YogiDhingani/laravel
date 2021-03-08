<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\ProductController;

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

// Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');

Route::resource('products','App\Http\Controllers\ProductController');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/user/', \App\Http\Controllers\UserController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('/product/', \App\Http\Controllers\ProductController::class)->middleware(['auth:sanctum', 'verified']);
Route::resource('/brand/', \App\Http\Controllers\BrandController::class)->middleware(['auth:sanctum', 'verified']);
//Route::resource('/product/', ProductController::class);






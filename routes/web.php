<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/', [MenuController::class, 'home']);
Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/all-product', [MenuController::class, 'show_product']);
Route::get('/about', [MenuController::class, 'about']);
Route::resource('product', ProductController::class)->middleware('can:isAdmin');
Route::resource('product', ProductController::class)->only('show')->middleware('can:isAdminPelanggan');
Route::resource('pelanggan', PelangganController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

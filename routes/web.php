<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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

Route::view('/','login');

Route::post('login',[UserController::class, 'login']);

Route::get('home',[HomeController::class, 'index']);

Route::get('products',[ProductsController::class, 'index']);

Route::get('signout', [UserController::class, 'signOut']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('categories', [CategoriesController::class, 'index']);
Route::post('addUser', [CategoriesController::class, 'addUser'])->name('addUser');

Route::get('products', [ProductsController::class, 'index']);

Route::get('users', [UsersController::class, 'index']);

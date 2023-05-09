<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MenuController;

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

Route::get('/', [MenuController::class, 'index']);


Route::get('home', [HomeController::class, 'index']);
Route::get('login', [HomeController::class, 'login']);

Route::get('categories', [CategoriesController::class, 'index']);
Route::post('addUser', [CategoriesController::class, 'addUser'])->name('addUser');

Route::controller('products', ProductsController::class)->group(function () {
    Route::get('products', [ProductsController::class, 'index']);
    Route::post('addProduct', [ProductsController::class, 'addProduct'])->name('addProduct');
    Route::get('product/{id}', [ProductsController::class, 'product']);
    Route::get('deleteProduct/{id}', [ProductsController::class, 'deleteProduct']);    
    Route::post('updateProduct', [ProductsController::class, 'updateProduct']);    
});

// Route::get('products', [ProductsController::class, 'index']);
// Route::post('addProduct', [ProductsController::class, 'addProduct'])->name('addProduct');
// Route::get('products/{id}', [ProductsController::class, 'products']);
// Route::get('deleteProduct/{id}', [ProductsController::class, 'deleteProduct']);
// Route::get('editProduct/{id}', [ProductsController::class, 'editProduct']);

// Route::get('editProduct/{id}', [ProductsController::class, 'editProduct']);
// Route::post('updateProduct/{id}', [ProductsController::class, 'updateProduct'])->name('updateProduct');

Route::get('users', [UsersController::class, 'index']);

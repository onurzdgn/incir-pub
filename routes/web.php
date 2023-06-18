<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderCategoriesController;
use App\Http\Controllers\OrderProductsController;

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
Route::get('login', [HomeController::class, 'login']);

Route::controller(CategoriesController::class)->group(function () {
    Route::get('categories', 'index');
    Route::post('addCategory', 'addCategory')->name('addCategory');
    Route::post('addSubcategory', 'addSubcategory')->name('addSubcategory');
    Route::get('category/{id}', 'category');
    Route::get('deleteCategory/{id}', 'deleteCategory');
    Route::post('updateCategory', 'updateCategory'); 
});

Route::controller(ProductsController::class)->group(function () {
    Route::get('products','index');
    Route::post('addProduct','addProduct')->name('addProduct');
    Route::get('product/{id}','product');
    Route::get('deleteProduct/{id}','deleteProduct');    
    Route::post('updateProduct','updateProduct');    
});

Route::controller(UsersController::class)->group(function () {
    Route::get('users', 'index');
    Route::post('addUser', 'addUser')->name('addUser');
    Route::get('deleteUser/{id}', 'deleteUser');
    Route::get('editUser/{id}', 'editUser');
    Route::post('updateUser/{id}', 'updateUser')->name('updateUser');
});

Route::controller(OrderCategoriesController::class)->group(function () {
    Route::get('orderCategories', 'index');
    Route::get('orderableCategories', 'orderableCategories');
    Route::get('orderableSubCategories/{id}', 'orderableSubCategories');
});

Route::controller(OrderProductsController::class)->group(function () {
    Route::get('orderProducts', 'index');
    Route::get('orderableProducts/{id}', 'orderableProducts')->name('orderableProducts');
});

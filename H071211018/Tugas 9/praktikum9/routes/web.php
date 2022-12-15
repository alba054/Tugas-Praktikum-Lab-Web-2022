<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionController;

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

Route::get('/product', [ProductController::class, "index"]);
Route::post('/product', [ProductController::class, "store"]);
Route::get('/product/delete/{id}', [ProductController::class, "delete"]);
Route::get('/product/edit/{id}', [productController::class, 'edit']);
Route::post('/product/edit/{id}', [productController::class, 'update']);

Route::get('/', [CategoryController::class, "index"]);
Route::post('/', [CategoryController::class, "store"]);
Route::get('/category/delete/{id}', [CategoryController::class, "delete"]);
Route::get('/category/edit/{id}', [categoryController::class, 'edit']);
Route::post('/category/edit/{id}', [categoryController::class, 'update']);

Route::get('/seller', [SellerController::class, "index"]);
Route::post('/seller', [SellerController::class, "store"]);
Route::get('/seller/delete/{id}', [SellerController::class, "delete"]);
Route::get('/seller/edit/{id}', [sellerController::class, 'edit']);
Route::post('/seller/edit/{id}', [sellerController::class, 'update']);

Route::get('/permission', [PermissionController::class, "index"]);
Route::post('/permission', [PermissionController::class, "store"]);
Route::get('/permission/delete/{id}', [PermissionController::class, "delete"]);
Route::get('/permission/edit/{id}', [permissionController::class, 'edit']);
Route::post('/permission/edit/{id}', [permissionController::class, 'update']);
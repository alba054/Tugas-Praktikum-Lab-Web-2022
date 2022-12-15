<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\homeController;;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [homeController::class, 'index']);

Route::get('/seller', [SellerController::class, 'index']);
Route::post('/seller', [SellerController::class, 'store']);
Route::get("/editSeller/{id}", [SellerController::class, 'edit']);
Route::post("/editSeller/{id}", [SellerController::class, 'update']);
Route::get("/deleteSeller/{id}", [SellerController::class, 'delete']);

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get("/editCategory/{id}", [CategoryController::class, 'edit']);
Route::post("/editCategory/{id}", [CategoryController::class, 'update']);
Route::get("/deleteCategory/{id}", [CategoryController::class, 'delete']);

Route::get('/product', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'Store']);
Route::get("/editProduct/{id}", [ProductController::class, 'edit']);
Route::post("/editProduct/{id}", [ProductController::class, 'update']);
Route::get("/deleteProduct/{id}", [ProductController::class, 'delete']);

Route::get('/permission', [PermissionController::class, 'index']);
Route::post('/permission', [PermissionController::class, 'store']);
Route::get("/editPermission/{id}", [PermissionController::class, 'edit']);
Route::post("/editPermission/{id}", [PermissionController::class, 'update']);
Route::get("/deletePermission/{id}", [PermissionController::class, 'delete']);


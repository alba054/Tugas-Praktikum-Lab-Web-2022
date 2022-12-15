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

Route::get('/p', function () {
    return view('product');
});


Route::get('/c', [CategoryController::class, "index"]);
Route::post('/c', [CategoryController::class, "store"]);
Route::get('/c/delete/{id}', [CategoryController::class, "delete"]);
Route::get('/c/edit/{id}', [CategoryController::class, "edit"]);
Route::post('/c/edit/{id}', [CategoryController::class, "update"]);


Route::get('/s', [SellerController::class, "index"]);
Route::post('/s', [SellerController::class, "store"]);
Route::get('/s/delete/{id}', [SellerController::class, "delete"]);
Route::get('/s/edit/{id}', [SellerController::class, "edit"]);
Route::post('/s/edit/{id}', [SellerController::class, "update"]);

Route::get('/ps', [PermissionController::class, "index"]);
Route::post('/ps', [PermissionController::class, "store"]);
Route::get('/ps/delete/{id}', [PermissionController::class, "delete"]);
Route::get('/ps/edit/{id}', [PermissionController::class, "edit"]);
Route::post('/ps/edit/{id}', [PermissionController::class, "update"]);

Route::get('/p', [ProductController::class, "index"]);
Route::post('/p', [ProductController::class, "store"]);
Route::get('/p/delete/{id}', [ProductController::class, "delete"]);
Route::get('/p/edit/{id}', [ProductController::class, "edit"]);
Route::post('/p/edit/{id}', [ProductController::class, "update"]);



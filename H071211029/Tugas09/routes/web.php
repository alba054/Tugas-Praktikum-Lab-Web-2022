<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SellerPermissionController;

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

Route::get('/index', [SellerPermissionController::class, 'index']); 

Route::get('/viewcategory', function () {
    return view('add.category');
});

Route::get('/viewpermission', function () {
    return view('add.permission');
});

Route::get('/viewsellerpermission', [SellerPermissionController::class, 'view']);

Route::get('/viewproduct', [ProductController::class, 'view']);
Route::get('/viewseller', [SellerController ::class, 'view']);

Route::get('/product', [ProductController::class, 'index']);
Route::post('/addproduct', [ProductController::class, 'store']);
Route::get('/editproduct/{id}', [ProductController::class, 'edit']);
Route::post('/updateproduct/{id}', [ProductController::class, 'update']);
Route::get('/deleteproduct/{id}', [ProductController::class, 'delete']);

Route::get('/seller', [SellerController::class, 'index']);
Route::post('/addseller', [SellerController::class, 'store']);
Route::get('/editseller/{id}', [SellerController::class, 'edit']);
Route::post('/updateseller/{id}', [SellerController::class, 'update']);
Route::get('/deleteseller/{id}', [SellerController::class, 'delete']);

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/addcategory', [CategoryController::class, 'store']);
Route::get('/editcategory/{id}', [CategoryController::class, 'edit']);
Route::post('/updatecategory/{id}', [CategoryController::class, 'update']);
Route::get('/deletecategory/{id}', [CategoryController::class, 'delete']);

Route::get('/permission', [PermissionController::class, 'index']);
Route::post('/addpermission', [PermissionController::class, 'store']);
Route::get('/editpermission/{id}', [PermissionController::class, 'edit']);
Route::post('/updatepermission/{id}', [PermissionController::class, 'update']);
Route::get('/deletepermission/{id}', [PermissionController::class, 'delete']);

Route::post('/addsellerpermission', [SellerPermissionController::class, 'store']);
Route::get('/editsellerpermission/{id}', [SellerPermissionController::class, 'edit']);
Route::post('/updatesellerpermission/{id}', [SellerPermissionController::class, 'update']);
Route::get('/deletesellerpermission/{id}', [SellerPermissionController::class, 'delete']);



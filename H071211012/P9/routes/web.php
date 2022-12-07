<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
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

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Welcome'
    ]);
});

Route::resource('/products', ProductController::class);
Route::post('/insertproduct', [ProductController::class, 'insertProductQueryBuilder'])->name('insertProductQueryBuilder');
// Route::post('/insertproduct', [ProductController::class, 'insertProductEloquent'])->name('insertProductEloquent');
Route::post('/editproduct', [ProductController::class, 'updateProductQueryBuilder'])->name('updateProductQueryBuilder');

Route::resource('/categories', CategoryController::class);
Route::post('/insertcategory', [CategoryController::class, 'insertCategoryQueryBuilder'])->name('insertCategoryQueryBuilder');

Route::resource('/sellers', SellerController::class);
// Route::post('/insertseller', [SellerController::class, 'insertSellerQueryBuilder'])->name('insertSellerQueryBuilder');
Route::post('/insertseller', [SellerController::class, 'insertSellerEloquent'])->name('insertSellerEloquent');

Route::resource('/permissions', PermissionController::class);
Route::post('/insertpermission', [PermissionController::class, 'insertPermissionQueryBuilder'])->name('insertPermissionQueryBuilder');

Route::resource('/seller_permission', SellerPermissionController::class);




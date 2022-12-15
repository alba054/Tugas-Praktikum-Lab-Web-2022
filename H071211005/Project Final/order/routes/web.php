<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\CategoryController;

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
    return view('dbd');
});

Route::get('/mkn',[MakananController::class,'index']);
Route::post('/mkn',[MakananController::class,'store']);
Route::get('/mkn/delete/{id}', [MakananController::class, "Delete"]);



Route::get('/cat',[CategoryController::class,'index']);
Route::post('/cat',[CategoryController::class,'store']);
Route::get('/cat/delete/{id}', [CategoryController::class, "Delete"]);



Route::get('/user',[UserController::class,'index']);
Route::post('/user',[UserController::class,'store']);
Route::get('/user/delete/{id}',[UserController::class,'Delete']);


Route::get('/tag',[TagController::class,'index']);
Route::post('/tag',[TagController::class,'store']);
Route::get('/tag/delete/{id}', [TagController::class, "Delete"]);


Route::get('/pes', function () {
    return view('pes');
});

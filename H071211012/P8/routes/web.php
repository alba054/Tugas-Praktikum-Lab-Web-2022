<?php

use App\Http\Controllers\MinumanController;
use Illuminate\Support\Facades\Route;

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

// Put all the resource from MinumanController class to '/'
Route::resource('/', MinumanController::class);

Route::post('/add', [MinumanController::class, 'add'])->name('add');

Route::post('/edit', [MinumanController::class, 'edit'])->name('edit');

Route::post('/delete', [MinumanController::class, 'delete'])->name('delete');

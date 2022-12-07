<?php

use App\Models\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;

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
//     return view('admin.dashboard');
// });

Route::resource('/', DashboardController::class);
Route::resource('/dashboard', DashboardController::class);

Route::resource('/kelas', KelasController::class);

Route::resource('/mahasiswa', MahasiswaController::class);

Route::resource('/dosen', DosenController::class);

Route::resource('/mahasiswa', MahasiswaController::class);

Route::resource('/matakuliah', MataKuliahController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

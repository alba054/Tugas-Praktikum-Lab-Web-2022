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

Route::get('cms', function () {
    return view('admin.dashboard');
});

Route::resource('cms/dashboard', DashboardController::class);

Route::resource('cms/kelas', KelasController::class);

Route::resource('cms/mahasiswa', MahasiswaController::class);

Route::resource('cms/dosen', DosenController::class);

Route::resource('cms/matakuliah', MataKuliahController::class);

Route::get('/', function () {
    return view('frontend.homepage');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

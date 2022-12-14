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

// CMS

Route::get('cms', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::resource('cms/dashboard', DashboardController::class);

Route::resource('cms/kelas', KelasController::class);

Route::resource('cms/mahasiswa', MahasiswaController::class);

Route::resource('cms/dosen', DosenController::class);
Route::post('cms/dosen/adddosen', [DosenController::class, 'store']);

Route::resource('cms/matakuliah', MataKuliahController::class);

// front end

    // login
Route::get('/loginmahasiswa', function () {
    return view('frontend.login.loginmahasiswa');
});

Route::get('/logindosen', function () {
    return view('frontend.login.logindosen');
});

Route::get('/loginadmin', function () {
    return view('frontend.login.loginadmin');
});

    // mainview
Route::get('/', function () {
    return view('frontend.homepage', [
        'title' => 'Homepage'
    ]);
});

Route::get('/daftarkelas', function () {
    return view('frontend.daftarkelas', [
        'title' => 'Daftar Kelas'
    ]);
});

Route::get('/kelasku', function () {
    return view('frontend.kelasku', [
        'title' => 'Kelasku'
    ]);
});

Route::get('/tugas', function () {
    return view('frontend.tugas', [
        'title' => 'Tugas'
    ]);
});

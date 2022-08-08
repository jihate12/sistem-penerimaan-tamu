<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SadminController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;

/*
|-----------------------------------------------------------------------Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');
// route::get('tambah-kegiatan-tamu/{nik}', [KegiatanController::class, 'tambah_kegiatan_tamu'])->name('tambah-kegiatan-tamu');
route::get('/kegiatan/notif/{id}', [KegiatanController::class, 'show_notif'])->name('show-notifikasi');

// Login & Logout
Route::group(['middleware' => 'auth'], function () {
    Route::get('/login', [LoginController::class, 'login_index'])->name('login-index');
    Route::get('/cek-nik', function () {
        return view('user.ceknik');
    })->name('cek-nik');
});
Route::post('/login/prosess/admin', [LoginController::class, 'login_action'])->name('login-action');
Route::post('/login/prosess/tamu', [UserController::class, 'login_action_tamu'])->name('login-action-tamu');


// page registrasi kegiatan & data diri user side
Route::get('/registrasi/kegiatan', function () {
    return view('user.datakegiatan');
});
Route::get('download-dokumen/{id}', [KegiatanController::class], 'downloadpdf')->name('download-dokumen');
Route::post('/upload', [FileController::class, 'upload'])->name('uploadktp');
Route::get('/registrasi/upload', [UserController::class, 'uploadview']);
// Route::get('/search-nik', [UserController::class, 'search_data'])->name('search_data');
Route::resource('kegiatan', KegiatanController::class);
Route::resource('registrasi', UserController::class);

//page dashboard tamu
Route::group(['middleware' => 'tamu'], function () {
    Route::get('/tamu/dashboard', [UserController::class, 'show_data'])->name('dashboard-tamu');
    route::get('/tambah-kegiatan-tamu', [KegiatanController::class, 'tambah_kegiatan_tamu'])->name('tambah-kegiatan-tamu');
    Route::get('/logout-tamu', [UserController::class, 'logout_user'])->name('logout_tamu');
});


// Route::get('/admin/dashboard/tambah-karyawan', [KaryawanController::class, 'index_tambah_karyawan'])->name('index-tambah-karyawan');
// Route::post('/admin/dashboard/tambah-karyawan/input', [KaryawanController::class, 'index_input_karyawan'])->name('index-input-karyawan');

// page dashboard super-admin & login super-admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [KaryawanController::class, 'index'])->name('show-pegawai');
    Route::get('/admin/dashboard/tamu', [KaryawanController::class, 'show_user'])->name('show-tamu-index');
    Route::get('/admin/dashboard/kegiatan', [KaryawanController::class, 'show_kegiatan'])->name('show-kegiatan-index');
    Route::get('/admin/dashboard/tambah-kegiatan', [SadminController::class, 'index_tambah_kegiatan'])->name('index-tambah-kegiatan');
    Route::post('/admin/dashboard/tambah-kegiatan/input', [SadminController::class, 'index_input_kegiatan'])->name('index-input-kegiatan');
    Route::post('/admin/dashboard/tambah-tamu/input', [SadminController::class, 'index_input_tamu'])->name('index-input-tamu');
    Route::get('/user-data-tamu-index/{nik}', [SadminController::class, 'edit_tamu'])->name('detail-tamu-index');
    Route::get('/admin/dashboard/tambah-karyawan', [KaryawanController::class, 'index_tambah_karyawan'])->name('index-tambah-karyawan');
    Route::post('/admin/dashboard/tambah-karyawan/input', [KaryawanController::class, 'index_input_karyawan'])->name('index-input-karyawan');
    Route::get('/user-data-kegiatan-index/{id_kegiatan}', [SadminController::class, 'edit_kegiatan'])->name('detail-kegiatan-index');
    Route::post('/update-kegiatan', [SadminController::class, 'update_kegiatan'])->name('update-kegiatan');
    Route::post('/update-tamu', [SadminController::class, 'update_tamu'])->name('update-tamu');
    Route::get('/admin/dashboard/tambah-tamu', [SadminController::class, 'index_tambah_tamu'])->name('index-tambah-tamu');
    Route::get('/logout-admin', [LoginController::class, 'logout_admin'])->name('logout_admin');

    Route::get('/admin/dashboard/kegiatan/download', [KaryawanController::class, 'export_excel_kegiatan'])->name('export_excel_kegiatan');
    Route::get('/admin/dashboard/tamu/download', [KaryawanController::class, 'export_excel_tamu'])->name('export_excel_tamu');
});

// page dashboard admin & login admin
Route::group(['middleware' => 'karyawan'], function () {
    Route::get('/dashboard-admin/tamu', [UserController::class, 'show'])->name('show-tamu');
    Route::get('/dashboard-admin/kegiatan', [KegiatanController::class, 'showall'])->name('show-kegiatan');
    Route::post('/dashboard-admin/tambah-tamu/input', [AdminController::class, 'admin_input_tamu'])->name('admin-input-tamu');
    Route::post('/dashboard-admin/tambah-kegiatan/input', [AdminController::class, 'admin_input_kegiatan'])->name('admin-input-kegiatan');
    Route::get('/dashboard-admin/tambah-kegiatan', [AdminController::class, 'admin_tambah_kegiatan'])->name('admin-tambah-kegiatan');
    Route::get('/dashboard-admin/kegiatan/{id_kegiatan}', [KegiatanController::class, 'edit'])->name('detail-kegiatan');
    Route::get('dashboard-admin/detail/{nik}', [UserController::class, 'edit'])->name('detail-tamu');
    Route::get('/dashboard-admin/tambah-tamu', [UserController::class, 'index'])->name('admin-tambah-tamu');
    Route::get('/logout-karyawan', [LoginController::class, 'logout_karyawan'])->name('logout_karyawan');
});

// Route::get('/admin/dashboard/tambah-karyawan', [KaryawanController::class, 'index_tambah_karyawan'])->name('index-tambah-karyawan');
// Route::post('/admin/dashboard/tambah-karyawan/input', [KaryawanController::class, 'index_input_karyawan'])->name('index-input-karyawan');
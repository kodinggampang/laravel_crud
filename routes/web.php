<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/data-mahasiswa', [MahasiswaController::class, 'index'])->name('data-mahasiswa');
    Route::get('/tambah-data-mahasiswa', [MahasiswaController::class, 'add'])->name('tambah-data-mahasiswa');
    Route::post('/store-data-mahasiswa', [MahasiswaController::class, 'store'])->name('store-data-mahasiswa');
    Route::post('/delete-data-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('delete-data-mahasiswa');
    Route::get('/edit-data-mahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('edit-data-mahasiswa');
    Route::post('/update-data-mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('update-data-mahasiswa');
    Route::get('/detail-data-mahasiswa/{id}', [MahasiswaController::class, 'detail'])->name('detail-data-mahasiswa');
});

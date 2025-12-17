<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::prefix('/pekerjaan')->group(function () {
    Route::get('/', [App\Http\Controllers\PekerjaanController::class, 'index'])->name('pekerjaan.index');
    Route::get('/add', [App\Http\Controllers\PekerjaanController::class, 'add'])->name('pekerjaan.add');
    Route::post('insert', [App\Http\Controllers\PekerjaanController::class, 'store'])->name('pekerjaan.store');
    Route::get('edit/{id}', [App\Http\Controllers\PekerjaanController::class, 'edit'])->name('pekerjaan.edit');
    Route::put('update', [App\Http\Controllers\PekerjaanController::class, 'update'])->name('pekerjaan.update');
    Route::delete('delete', [App\Http\Controllers\PekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/pegawai/tambah', [PegawaiController::class, 'create'])->name('pegawai.add');
    Route::post('/pegawai/tambah', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
});

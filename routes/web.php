<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('dashboard');
Route::get('/tambah-skor', [AppController::class, 'formTambah'])->name('tambah-skor');
Route::post('/tambah-skor', [AppController::class, 'tambah'])->name('tambah-skor');

Route::get('/edit/{id}', [AppController::class, 'formEdit'])->name('edit-skor');
Route::put('/update', [AppController::class, 'update'])->name('update');

Route::delete('/delete', [AppController::class, 'destroy'])->name('delete-skor');

Route::get('tabel-frekuensi', [AppController::class, 'tabelFrekuensi'])->name('tabel-frekuensi');
Route::get('data-bergolong', [AppController::class, 'dataBergolong'])->name('data-bergolong');

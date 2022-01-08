<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UjiAnavaController;
use App\Http\Controllers\UjiTController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('dashboard');
Route::get('/tambah-skor', [AppController::class, 'formTambah'])->name('tambah-skor');
Route::post('/tambah-skor', [AppController::class, 'tambah'])->name('tambah-skor');

Route::get('/edit/{id}', [AppController::class, 'formEdit'])->name('edit-skor');
Route::put('/update', [AppController::class, 'update'])->name('update');

Route::delete('/delete', [AppController::class, 'destroy'])->name('delete-skor');

Route::get('tabel-frekuensi', [AppController::class, 'tabelFrekuensi'])
    ->name('tabel-frekuensi');

Route::get('data-bergolong', [AppController::class, 'dataBergolong'])
    ->name('data-bergolong');

Route::get('chi-kuadrat', [AppController::class, 'chiKuadrat'])
    ->name('chi-kuadrat');

Route::get('lilliefors', [AppController::class, 'lilliefors'])
    ->name('lilliefors');

Route::get('export-skor', [AppController::class, 'skorExport'])
    ->name('export-skor');

Route::post('import-skor', [AppController::class, 'skorImport'])
    ->name('import-skor');

Route::prefix('uji-t')->group(function () {
    Route::get('/', [UjiTController::class, 'index'])->name('uji-t');
});

Route::prefix('uji-anava')->group(function () {
    Route::get('/', [UjiAnavaController::class, 'index'])->name('uji-anava');
});

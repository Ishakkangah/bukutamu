<?php

use App\Http\Controllers\BukutamuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('cari', [BukutamuController::class, 'cari'])->name('cari');
Route::prefix('bukutamu')->middleware('auth')->group(function () {
    Route::get('/', [BukutamuController::class, 'index']);
    Route::get('/create', [BukutamuController::class, 'create'])->name('create');
    Route::patch('/store', [BukutamuController::class, 'store'])->name('store');
    Route::get('/{bukutamu:id}/edit', [BukutamuController::class, 'edit'])->name('edit');
    Route::patch('/{bukutamu:id}/edit', [BukutamuController::class, 'update'])->name('update');
    Route::delete('/{bukutamu:id}/delete', [BukutamuController::class, 'destroy'])->name('delete');
    Route::get('/{bukutamu:id}/detailsTamu', [BukutamuController::class, 'detailsTamu'])->name('detailsTamu');
    Route::get('/totalTamuHariIni', [BukutamuController::class, 'totalTamuHariIni'])->name('totalTamuHariIni');
    Route::get('/cetakBukuTamuHariIni/cetak_pdf', [BukutamuController::class, 'cetakDaftarTamuHariIni_PDF'])->name('cetakBukuTamuHariIni');

    Route::get('/totalTamuBulanIni', [BukutamuController::class, 'totalTamuBulanIni'])->name('totalTamuBulanIni');
    Route::get('/cetakBukuTamuMingguIni/cetak_pdf', [BukutamuController::class, 'cetakBukuTamuMingguIni'])->name('cetakBukuTamuMingguIni');
    Route::get('cetakBukuTamuBerdasarkanPilihan', [BukutamuController::class, 'cetakBukuTamuBerdasarkanPilihan'])->name('cetakBukuTamuBerdasarkanPilihan');
});
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

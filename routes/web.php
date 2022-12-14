<?php

use App\Http\Controllers\BukutamuController;
use App\Models\bukutamu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('cari', [BukutamuController::class, 'cari'])->name('cari');
Route::get('/', [BukutamuController::class, 'index']);
Route::patch('/store', [BukutamuController::class, 'store'])->name('store');
Route::prefix('bukutamu')->middleware('auth')->group(function () {
    Route::get('/create', [BukutamuController::class, 'create'])->name('create');
    Route::get('/{bukutamu:id}/edit', [BukutamuController::class, 'edit'])->name('edit');
    Route::patch('/{bukutamu:id}/edit', [BukutamuController::class, 'update'])->name('update');
    Route::delete('/{bukutamu:id}/delete', [BukutamuController::class, 'destroy'])->name('delete');
    Route::get('/{bukutamu:id}/detailsTamu', [BukutamuController::class, 'detailsTamu'])->name('detailsTamu');

    //    DOWNLOAD PDF
    Route::get('/totalTamuHariIni', [BukutamuController::class, 'totalTamuHariIni'])->name('totalTamuHariIni');
    Route::get('/cetakBukuTamuHariIni/cetak_pdf', [BukutamuController::class, 'cetakDaftarTamuHariIni_PDF'])->name('cetakBukuTamuHariIni');
    Route::get('/totalTamuMingguIni', [BukutamuController::class, 'totalTamuMingguIni'])->name('totalTamuBulanIni');
    Route::get('/cetakBukuTamuMingguIni/cetak_pdf', [BukutamuController::class, 'cetakBukuTamuMingguIni'])->name('cetakBukuTamuMingguIni');
    Route::get('filterTamu', [BukutamuController::class, 'filterTamu'])->name('filterTamu');
    Route::get('tampilkanBukuTamuBerdasarkanFilter', [BukutamuController::class, 'tampilkanBukuTamuBerdasarkanFilter'])->name('tampilkanBukuTamuBerdasarkanFilter');
    Route::get('cetakBukuTamuBerdasarkanPilihan', [BukutamuController::class, 'cetakBukuTamuBerdasarkanPilihan'])->name('cetakBukuTamuBerdasarkanPilihan');

    //    DOWNLOAD EXCEL
    Route::get('exportExcelHariIni', [BukutamuController::class, 'exportExcelHariIni'])->name('exportExcelHariIni');
    Route::get('exportExcelMingguIni', [BukutamuController::class, 'cetakPengunjungBerdasakanMinggu'])->name('exportExcelMungguIni');
    Route::get('exportExcelByFilter', [BukutamuController::class, 'exportExcelByFilter'])->name('exportExcelByFilter');
    Route::get('cetakBukuTamuBerdasarkanFilter', [BukutamuController::class, 'cetakBukuTamuBerdasarkanFilter'])->name('cetakExcelBukuTamuBerdasarkanFilter');
});
Auth::routes(['register' => false]);
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

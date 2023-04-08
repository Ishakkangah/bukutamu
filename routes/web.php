<?php

use App\Http\Controllers\BukutamuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('cari',                          [BukutamuController::class, 'cari'])->name('cari');
Route::get('/',                             [BukutamuController::class, 'index']);
Route::patch('store',                       [BukutamuController::class, 'store'])->name('store');

Route::prefix('bukutamu')->middleware('auth')->group(function () {
    // ADMIN
    Route::get('create',                    [BukutamuController::class, 'create'])->name('create');
    Route::get('{bukutamu:id}/edit',        [BukutamuController::class, 'edit'])->name('edit');
    Route::get('{bukutamu:id}/detail',      [BukutamuController::class, 'detail'])->name('detailsTamu');
    Route::patch('{bukutamu:id}/edit',      [BukutamuController::class, 'update'])->name('update');
    Route::delete('{bukutamu:id}/delete',   [BukutamuController::class, 'destroy'])->name('delete');

    //    DOWNLOAD PDF
    Route::get('total/hari',                [BukutamuController::class, 'tamu_hari'])->name('totalTamuHariIni');
    Route::get('total/Minggu',              [BukutamuController::class, 'tamu_minggu'])->name('totalTamuBulanIni');
    Route::get('total/filter',              [BukutamuController::class, 'filter'])->name('filterTamu');
    Route::get('filter/tampil',             [BukutamuController::class, 'by_filter'])->name('tampilkanBukuTamuBerdasarkanFilter');
    Route::get('pdf/hari)',                 [BukutamuController::class, 'pdf_hari'])->name('cetakBukuTamuHariIni');
    Route::get('pdf/minggu',                [BukutamuController::class, 'pdf_minggu'])->name('cetakBukuTamuMingguIni');
    Route::get('pdf/pilihan',               [BukutamuController::class, 'pdf_pilihan'])->name('cetakBukuTamuBerdasarkanPilihan');

    //    DOWNLOAD EXCEL
    Route::get('Excel/Hari',                [BukutamuController::class, 'excel_hari'])->name('exportExcelHariIni');
    Route::get('Excel/Minggu',              [BukutamuController::class, 'excel_minggu'])->name('exportExcelMungguIni');
    Route::get('Excel/By-Filter',           [BukutamuController::class, 'excel_filter'])->name('cetakExcelBukuTamuBerdasarkanFilter');
});
Auth::routes(['register' => false]);
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

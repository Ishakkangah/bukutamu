<?php

use App\Http\Controllers\BukutamuController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BukutamuController::class, 'index']);
Route::get('cari', [BukutamuController::class, 'cari'])->name('cari');
Route::get('/create', [BukutamuController::class, 'create'])->name('bukutamu.create');
Route::patch('/store', [BukutamuController::class, 'store'])->name('store');
Route::get('/{bukutamu:id}/edit', [BukutamuController::class, 'edit'])->name('edit');
Route::patch('/{bukutamu:id}/edit', [BukutamuController::class, 'update'])->name('update');
Route::delete('/{bukutamu:id}/edit', [BukutamuController::class, 'destroy'])->name('delete');
Route::get('/{bukutamu:id}/detailsTamu', [BukutamuController::class, 'detailsTamu'])->name('detailsTamu');

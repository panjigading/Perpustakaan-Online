<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BukuController::class, 'index'])->name('buku.index');
Route::get('/add', [BukuController::class, 'create'])->name('buku.create');
Route::get('/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::get('/destroy/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::post('/store', [BukuController::class, 'store'])->name('buku.store');
Route::post('/update', [BukuController::class, 'update'])->name('buku.update');
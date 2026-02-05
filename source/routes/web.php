<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/tra-cuu-diem-bo-phieu', [SiteController::class, 'traCuuDiemBoPhieu'])->name('traCuuDiemBoPhieu');
Route::get('/khoms', [\App\Http\Controllers\KhomController::class, 'index'])->name('khom.index');
Route::post('/khoms', [\App\Http\Controllers\KhomController::class, 'store'])->name('khom.store');

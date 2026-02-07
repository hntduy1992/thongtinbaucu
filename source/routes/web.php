<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginHandle'])->name('login.handle');
});
Route::middleware('auth')->group(function () {
    Route::get('/tra-cuu-diem-bo-phieu', [SiteController::class, 'traCuuDiemBoPhieu'])->name('traCuuDiemBoPhieu');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [SiteController::class, 'home'])->name('home');
});

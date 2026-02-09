<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginHandle'])->name('login.handle');
});
Route::middleware('auth')->group(function () {
    Route::get('/tra-cuu-diem-bo-phieu', [SiteController::class, 'traCuuDiemBoPhieu'])->name('traCuuDiemBoPhieu');
    Route::get('/hoi-dap', [QuestionController::class, 'index'])->name('question.index');
    Route::post('/hoi-dap/create', [QuestionController::class, 'store'])->name('question.create');
    Route::put('/hoi-dap/{id}/update', [QuestionController::class, 'update'])->name('question.update');
    Route::delete('/hoi-dap/delete', [QuestionController::class, 'destroy'])->name('question.delete');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [SiteController::class, 'home'])->name('home');
});



<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginHandle'])->name('login.handle');
    Route::get('/don-vi-bau-cu/{slug}', [SiteController::class, 'viewUnit'])->name('site.viewUnit');
    Route::get('/', [SiteController::class, 'home'])->name('home');
});
Route::middleware('auth')->group(function () {

    Route::get('/locations/create', [LocationController::class, 'create'])->name('location.create');
    Route::get('/locations/{id}', [LocationController::class, 'view'])->name('location.view');
    Route::put('/locations/{id}', [LocationController::class, 'update'])->name('location.update');
    Route::post('/locations', [LocationController::class, 'store'])->name('location.store');
    Route::delete('/locations', [LocationController::class, 'destroy'])->name('location.destroy');
    Route::get('/locations', [LocationController::class, 'index'])->name('location.index');

    Route::get('/units/create', [UnitController::class, 'create'])->name('unit.create');
    Route::get('/units', [UnitController::class, 'index'])->name('unit.index');
    Route::post('/hoi-dap/create', [QuestionController::class, 'store'])->name('question.create');
    Route::put('/hoi-dap/{id}/update', [QuestionController::class, 'update'])->name('question.update');
    Route::delete('/hoi-dap/delete', [QuestionController::class, 'destroy'])->name('question.delete');
    Route::get('/hoi-dap', [QuestionController::class, 'index'])->name('question.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});



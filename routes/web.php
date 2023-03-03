<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('home');

Route::get('/show', [App\Http\Controllers\HomePageController::class, 'show'])->name('show');

Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');

Route::get('/welcome', function () {
    return view('welcome');
});


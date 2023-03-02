<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});


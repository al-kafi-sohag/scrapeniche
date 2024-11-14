<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController as HC;
use App\Http\Controllers\Frontend\HomeController;

// Frontend Routes
Route::name('f.')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
});

Auth::routes();

Route::get('/home', [HC::class, 'index'])->name('home');

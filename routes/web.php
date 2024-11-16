<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;

// Frontend Routes
Route::name('f.')->group(function () {
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');

});

Auth::routes();

// Route::get('/home', [HC::class, 'index'])->name('home');

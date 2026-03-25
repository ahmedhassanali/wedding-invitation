<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WeddingController::class, 'index'])->name('home');
Route::post('/api/save-score', [WeddingController::class, 'saveScore']);
Route::post('/wishes', [WeddingController::class, 'storeWish'])->name('wishes.store');

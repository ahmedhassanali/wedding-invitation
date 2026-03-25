<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WeddingController::class, 'index'])->name('home');
Route::post('/api/save-score', [WeddingController::class, 'saveScore']);
Route::post('/wishes', [WeddingController::class, 'storeWish'])->name('wishes.store');
Route::get('/leaderboard', function () {
    $topScores = GameScore::select('player_name', 'time_seconds', 'moves', 'created_at')
        ->orderBy('time_seconds')      // أقل وقت أولاً
        ->orderBy('moves')             // ثم أقل حركات
        ->limit(10)
        ->get();

    return view('leaderboard', compact('topScores'));
})->name('leaderboard');

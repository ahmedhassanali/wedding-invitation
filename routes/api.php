<?php

use App\Models\Congratulations;
use App\Models\GameScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/congratulations', function (Request $request) {
    $request->validate([
        'name'    => 'required|string|max:100',
        'message' => 'required|string|max:500',
    ]);

    Congratulations::create([
        'name'        => $request->name,
        'message'     => $request->message,
        'ip_address'  => $request->ip()
    ]);

    return response()->json(['success' => true]);
});

Route::post('/game-scores', function (Request $request) {
    $request->validate([
        'player_name'   => 'required|string|max:80',
        'time_seconds'  => 'required|integer|min:1',
        'moves'         => 'required|integer|min:6',
    ]);

    GameScore::create([
        'player_name'  => $request->player_name,
        'time_seconds' => $request->time_seconds,
        'moves'        => $request->moves,
        'ip_address'   => $request->ip()
    ]);

    return response()->json(['success' => true]);
});

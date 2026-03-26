<?php

namespace App\Http\Controllers;

use App\Models\GameScore;
use Illuminate\Http\Request;

class GameScoreController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'player_name'  => 'required|string|max:255',
            'time_seconds' => 'required|integer|min:0',
            'moves'        => 'required|integer|min:0',
        ]);

        $ip = $request->ip();

        // Save the score
        GameScore::create([
            'player_name'   => strip_tags($request->player_name),
            'time_seconds'  => $request->time_seconds,
            'moves'         => $request->moves,
            'ip_address'    => $ip,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'تم حفظ رقمك القياسي بنجاح'
        ]);
    }
}

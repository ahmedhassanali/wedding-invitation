<?php

namespace App\Http\Controllers;

use App\Models\Congratulations;
use Illuminate\Http\Request;

class CongratulationsController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name'    => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $ip = $request->ip();

        // Prevent spam (same IP can't send more than 1 message every 5 minutes)
        $recent = Congratulations::where('ip_address', $ip)
                    ->where('created_at', '>', now()->subMinutes(5))
                    ->exists();

        if ($recent) {
            return response()->json([
                'success' => false,
                'message' => 'انتظر قليلاً قبل إرسال تهنئة أخرى'
            ], 429);
        }

        // Save to database
        Congratulations::create([
            'name'        => strip_tags($request->name),
            'message'     => strip_tags($request->message),
            'ip_address'  => $ip,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'تم إرسال تهنئتك بنجاح'
        ]);
    }
}

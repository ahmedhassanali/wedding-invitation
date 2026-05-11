<?php

namespace App\Http\Controllers;

use App\Models\Congratulations;
use App\Mail\CongratulationsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CongratulationsController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name'          => 'required|string',
            'message'       => 'required|string',
            'wedding_name'  => 'required|string',
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
        $congratulation = Congratulations::create([
            'name'           => strip_tags($request->name),
            'message'        => strip_tags($request->message),
            'ip_address'     => $ip,
            'wedding_name'   => strip_tags($request->wedding_name),
        ]);

        // Send email
        try {
            $recipientEmail = env('WEDDING_EMAIL_TO', 'kamal.noura@example.com');
            Mail::to($recipientEmail)->send(new CongratulationsMail([
                'name' => $congratulation->name,
                'message' => $congratulation->message,
                'wedding_name' => $congratulation->wedding_name,
            ]));
        } catch (\Exception $e) {
            \Log::error('Failed to send congratulation email: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'تم إرسال تهنئتك بنجاح'
        ]);
    }
}

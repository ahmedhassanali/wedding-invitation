<?php

namespace App\Http\Controllers; // تأكد من هذا السطر

use App\Models\GameScore;
use App\Models\Wish;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    // عرض الصفحة الرئيسية مع أفضل 3 نتائج والتهاني
    public function index()
    {
        $topScores = GameScore::orderBy('moves', 'asc')->take(3)->get();
        $wishes = Wish::latest()->take(10)->get();

        return view('welcome', compact('topScores', 'wishes'));
    }

    // حفظ نتيجة اللعبة
    public function saveScore(Request $request)
    {
        $validated = $request->validate([
            'player_name' => 'required|string|max:20',
            'moves' => 'required|integer',
        ]);

        GameScore::create($validated);

        return response()->json(['message' => 'تم تسجيل النتيجة بنجاح!']);
    }
}

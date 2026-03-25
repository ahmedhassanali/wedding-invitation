<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>لوحة المتصدرين - أحمد وأمنية</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700;900&family=Rakkas&family=Reem+Kufi:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background: linear-gradient(to bottom, #0a0f1a, #1a2338);
            color: #e2e8f0;
        }
        .gold-text {
            background: linear-gradient(to right, #bf953f, #fcf6ba, #b38728);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .rank-1 { background: linear-gradient(135deg, #ffd700, #ffed4e); color: #1e2937; }
        .rank-2 { background: linear-gradient(135deg, #c0c0c0, #e5e7eb); color: #1e2937; }
        .rank-3 { background: linear-gradient(135deg, #cd7f32, #e8b589); color: #1e2937; }
    </style>
</head>
<body class="min-h-screen py-12 px-4">

    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-3 mb-4">
                <span class="text-5xl">🏆</span>
                <h1 class="text-5xl font-rakkas gold-text tracking-widest">لوحة المتصدرين</h1>
            </div>
            <p class="text-xl text-yellow-200/80 font-aref-ruqaa">أسرع 10 لاعبين في لعبة الذاكرة 💍</p>
            <a href="{{ url('/') }}"
               class="mt-6 inline-block text-gold hover:text-yellow-300 transition-colors underline">
                ← العودة لدعوة الفرح
            </a>
        </div>

        <!-- Leaderboard Table -->
        <div class="glass bg-slate-900/70 backdrop-blur-xl border border-yellow-500/20 rounded-3xl overflow-hidden shadow-2xl">
            <div class="p-8 border-b border-yellow-500/10">
                <h2 class="text-2xl text-center text-gold font-bold">أفضل 10 نتايج</h2>
            </div>

            @if($topScores->isEmpty())
                <div class="p-20 text-center">
                    <p class="text-2xl text-gray-400">لم يتم تسجيل أي نتايج بعد...</p>
                    <p class="text-sm text-gray-500 mt-2">كن أول من يكسر الرقم القياسي! 🎮</p>
                </div>
            @else
                <div class="divide-y divide-yellow-500/10">
                    @foreach($topScores as $index => $score)
                        <div class="px-8 py-6 flex items-center gap-6 hover:bg-white/5 transition-colors
                                    {{ $index === 0 ? 'rank-1' : ($index === 1 ? 'rank-2' : ($index === 2 ? 'rank-3' : '')) }}">

                            <!-- Rank -->
                            <div class="w-12 text-center">
                                @if($index < 3)
                                    <span class="text-4xl font-black">{{ $index + 1 }}</span>
                                @else
                                    <span class="text-2xl text-yellow-100/70 font-bold">#{{ $index + 1 }}</span>
                                @endif
                            </div>

                            <!-- Player Info -->
                            <div class="flex-1">
                                <div class="font-bold text-lg text-white">{{ $score->player_name }}</div>
                                <div class="text-xs text-yellow-100/60">
                                    {{ $score->created_at->diffForHumans() }}
                                </div>
                            </div>

                            <!-- Score Details -->
                            <div class="text-right">
                                <div class="flex items-center gap-6">
                                    <div>
                                        <span class="block text-[10px] text-yellow-400">الوقت</span>
                                        <span class="text-2xl font-black text-gold">{{ $score->time_seconds }}</span>
                                        <span class="text-xs text-yellow-100/60">ث</span>
                                    </div>
                                    <div>
                                        <span class="block text-[10px] text-yellow-400">الحركات</span>
                                        <span class="text-2xl font-black text-gold">{{ $score->moves }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Footer Message -->
        <div class="text-center mt-10 text-xs text-gray-500">
            <p>بارك الله لأحمد وأمنية وجمع بينهما في خير ❤️</p>
            <p class="mt-2">2026 • ليلة العمر</p>
        </div>
    </div>

</body>
</html>

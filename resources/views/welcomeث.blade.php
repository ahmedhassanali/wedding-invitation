<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>عقد قران أَحْمَدُ وَأُمْنِيَّةُ</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700;900&family=Rakkas&family=Reem+Kufi:wght@400;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&display=swap" rel="stylesheet">

    <style>
        [x-cloak] { display: none !important; }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #05080f;
            scroll-behavior: smooth;
        }

        /* Enhanced Background */
        .bg-flowers {
            background-image:
                linear-gradient(rgba(10, 15, 26, 0.85), rgba(5, 8, 15, 0.95)),
                url('https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        /* Refined Glassmorphism */
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px) saturate(180%);
            -webkit-backdrop-filter: blur(12px) saturate(180%);
            border: 1px solid rgba(212, 175, 55, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        /* Premium Gold Text */
        .text-gold {
            background: linear-gradient(to right, #bf953f 22%, #fcf6ba 45%, #b38728 50%, #fcf6ba 55%, #bf953f 78%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shineGold 5s linear infinite;
            filter: drop-shadow(0 2px 10px rgba(191, 149, 63, 0.3));
        }

        @keyframes shineGold {
            to { background-position: 200% center; }
        }

        /* Floating Petals Styling */
        .petal {
            position: fixed;
            background: linear-gradient(135deg, #ffb3c1, #ff4d6d);
            border-radius: 150% 0 150% 0;
            pointer-events: none;
            z-index: 1;
            filter: blur(1px);
            animation: petalFall linear infinite;
        }

        @keyframes petalFall {
            0% { transform: translateY(-10vh) rotate(0deg) translateX(0); opacity: 0; }
            10% { opacity: 0.6; }
            90% { opacity: 0.6; }
            100% { transform: translateY(110vh) rotate(720deg) translateX(100px); opacity: 0; }
        }

        /* Button Pulse */
        .btn-pulse {
            animation: pulse-gold 2s infinite;
        }

        @keyframes pulse-gold {
            0% { box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.4); }
            70% { box-shadow: 0 0 0 20px rgba(212, 175, 55, 0); }
            100% { box-shadow: 0 0 0 0 rgba(212, 175, 55, 0); }
        }

        /* Game Card Styling */
        .card-inner {
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0a0f1a; }
        ::-webkit-scrollbar-thumb { background: #bf953f; border-radius: 10px; }

        .font-rakkas { font-family: 'Rakkas', serif; }
        .font-aref-ruqaa { font-family: 'Aref Ruqaa', serif; }
        .font-kufi { font-family: 'Reem Kufi', sans-serif; }
    </style>
</head>

<body class="bg-[#0a0f1a] bg-flowers text-slate-200 antialiased overflow-x-hidden" x-data="weddingApp()">

    <template x-if="contentVisible">
        <div>
            <template x-for="n in 20">
                <div class="petal"
                    :style="`left: ${Math.random()*100}vw; width: ${Math.random()*12+8}px; height: ${Math.random()*12+8}px; animation-duration: ${Math.random()*8+6}s; animation-delay: ${Math.random()*5}s; opacity: ${Math.random()*0.5}`">
                </div>
            </template>
        </div>
    </template>

    <audio id="bgMusic" loop src="https://dl.dropboxusercontent.com/scl/fi/o56fsq5awqeqsvx4sgm4y/voice.m4a?rlkey=fn0xpuib6te3mtniytvw69pd3"></audio>
    <audio id="openSfx" src="https://assets.mixkit.co/active_storage/sfx/2571/2571-preview.mp3"></audio>
    <audio id="flipSfx" src="https://assets.mixkit.co/active_storage/sfx/2048/2048-preview.mp3"></audio>
    <audio id="winSfx" src="https://assets.mixkit.co/active_storage/sfx/1435/1435-preview.mp3"></audio>

    <div :class="opened ? 'hidden-scale opacity-0 pointer-events-none' : ''"
        class="intro-overlay fixed inset-0 z-[100] flex flex-col items-center justify-center text-center px-6 transition-all duration-1000 bg-[#05080f]">
        <div class="mb-8" data-aos="zoom-in">
             <h2 class="font-rakkas text-gold text-4xl mb-2">دعوة عقد قران</h2>
             <p class="text-gray-400 font-tajawal tracking-widest text-sm">أحمد & أمنية</p>
        </div>

        <button @click="openInvitation()"
            class="relative group transition-all active:scale-95 duration-500 flex items-center justify-center btn-pulse rounded-full">
            <div class="bg-gradient-to-br from-[#d4af37] via-[#fcf6ba] to-[#aa771c] w-36 h-36 rounded-full flex items-center justify-center shadow-2xl relative overflow-hidden">
                <div class="flex items-center justify-center border-2 border-[#aa771c]/30 w-28 h-28 rounded-full bg-gradient-to-tl from-[#d4af37] to-[#fcf6ba] z-10 shadow-inner">
                    <span class="text-[#7a5a12] font-parisienne font-bold text-4xl">A&O</span>
                </div>
                <div class="absolute inset-0 bg-white/20 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
            </div>
        </button>
        <span class="font-rakkas mt-6 text-yellow-500/80 animate-bounce tracking-widest">تفضلوا بالدخول</span>
    </div>

    <div x-show="contentVisible" x-cloak class="relative z-10">
        <header class="relative min-h-screen flex flex-col items-center justify-center text-center px-4 pt-20 pb-32">
            <div class="rings-animation mb-8" data-aos="fade-down">
                <svg width="120" height="80" viewBox="0 0 120 80" fill="none" class="filter drop-shadow-lg">
                    <circle cx="45" cy="40" r="30" stroke="#d4af37" stroke-width="3" opacity="0.8"/>
                    <circle cx="75" cy="40" r="30" stroke="#fcf6ba" stroke-width="3" opacity="0.8"/>
                </svg>
            </div>

            <h1 class="font-rakkas text-7xl md:text-9xl text-gold mb-6" data-aos="zoom-in">أَحْمَدُ وَ أُمْنِيَّةُ</h1>

            <p class="max-w-2xl text-2xl md:text-4xl leading-relaxed text-gray-100 font-aref-ruqaa mb-12" data-aos="fade-up">
                بَارَكَ اللَّهُ لَكُمَا وَبَارَكَ عَلَيْكُمَا وَجَمَعَ بَيْنَكُمَا فِي خَيْر
            </p>

            <div class="bg-white/5 border border-yellow-500/20 backdrop-blur-md px-8 py-3 rounded-full mb-12" data-aos="fade-up">
                <p class="font-kufi text-xl md:text-2xl text-yellow-200/90">3 أبريل • 2026</p>
            </div>

            <div class="flex flex-row-reverse justify-center gap-3 md:gap-6" data-aos="fade-up">
                <template x-for="(val, label) in { 'يوم': countdown.days, 'ساعة': countdown.hours, 'دقيقة': countdown.minutes, 'ثانية': countdown.seconds }">
                    <div class="glass w-20 md:w-28 py-5 rounded-3xl group hover:border-yellow-500/50 transition-colors">
                        <div class="text-3xl md:text-5xl font-black text-gold" x-text="String(val).padStart(2, '0')"></div>
                        <div class="text-xs text-yellow-100/40 font-bold mt-2 uppercase tracking-tighter" x-text="label"></div>
                    </div>
                </template>
            </div>
        </header>

        <section class="max-w-5xl mx-auto px-6 -mt-24 relative z-20">
            <div class="glass p-1 md:p-12 rounded-[4rem]" data-aos="fade-up">
                <div class="grid md:grid-cols-2 gap-0 divide-y md:divide-y-0 md:divide-x md:divide-x-reverse divide-yellow-500/10">
                    <div class="p-10 text-center hover:bg-white/5 transition-colors rounded-t-[4rem] md:rounded-tr-none md:rounded-r-[4rem]">
                        <div class="bg-yellow-500/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">🕒</span>
                        </div>
                        <h3 class="text-yellow-500 text-2xl mb-3 font-bold font-kufi">موعدنا</h3>
                        <p class="text-white text-xl font-medium">من الساعة 3:00 عصرًا</p>
                    </div>
                    <div class="p-10 text-center hover:bg-white/5 transition-colors rounded-b-[4rem] md:rounded-bl-none md:rounded-l-[4rem]">
                        <div class="bg-yellow-500/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">📍</span>
                        </div>
                        <h3 class="text-yellow-500 text-2xl mb-3 font-bold font-kufi">المكان</h3>
                        <p class="text-white text-xl font-medium mb-1">نادي الجلاء للقوات المسلحة</p>
                        <p class="text-yellow-100/50 text-sm">قاعة سوليتير - مصر الجديدة</p>
                    </div>
                </div>
            </div>
        </section>

        <main class="max-w-3xl mx-auto px-6 py-32 space-y-32">
            <section data-aos="fade-up" class="glass p-10 rounded-[3rem]">
                <div class="text-center mb-10">
                    <h2 class="text-4xl text-white font-aref-ruqaa mb-3">النص التاني فين؟</h2>
                    <p class="text-yellow-500/80 font-medium">كل حاجة وليها اللي يكملها.. ورّينا شطارتك 💍</p>

                    <div class="flex justify-center gap-8 mt-8">
                        <div class="text-center">
                            <p class="text-gray-500 text-xs uppercase mb-1">الحركات</p>
                            <p class="text-2xl text-white font-bold" x-text="moves">0</p>
                        </div>
                        <div class="h-10 w-[1px] bg-yellow-500/20"></div>
                        <div class="text-center">
                            <p class="text-gray-500 text-xs uppercase mb-1">الوقت</p>
                            <p class="text-2xl text-white font-bold"><span x-text="timer">0</span>ث</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-4">
                    <template x-for="(card, index) in cards" :key="index">
                        <div @click="flipCard(index)" class="h-28 relative cursor-pointer group">
                            <div class="w-full h-full transition-all duration-500 transform-style-3d relative"
                                :class="card.flipped || card.cleared ? '[transform:rotateY(180deg)]' : ''">
                                <div class="absolute inset-0 bg-slate-800/40 rounded-2xl border border-yellow-500/20 flex items-center justify-center backface-hidden group-hover:bg-slate-700/50 transition-colors">
                                    <span class="text-gold opacity-20 text-3xl">💝</span>
                                </div>
                                <div class="absolute inset-0 bg-white rounded-2xl flex items-center justify-center [transform:rotateY(180deg)] backface-hidden shadow-2xl">
                                    <span :class="['أَحْمَدُ', 'أُمْنِيَّةُ'].includes(card.value) ? 'text-yellow-800 font-bold text-sm' : 'text-4xl'"
                                          x-text="card.value"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </section>

            <section data-aos="fade-up" class="glass p-10 rounded-[3rem] relative">
                <div class="text-center mb-10">
                    <h2 class="text-3xl text-gold font-aref-ruqaa">بارك لنا بدعوة من قلبك</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-transparent via-yellow-500 to-transparent mx-auto mt-4"></div>
                </div>

                <form @submit.prevent="submitForm" class="space-y-6">
                    <div class="space-y-2">
                        <label class="text-xs text-yellow-500/60 mr-4 font-bold uppercase">الاسم الكريم</label>
                        <input type="text" x-model="formData['guest-name']" placeholder="اكتب اسمك هنا..." required
                            class="w-full bg-black/40 border border-yellow-500/10 rounded-2xl px-6 py-4 text-white focus:border-yellow-500/50 focus:bg-black/60 outline-none transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs text-yellow-500/60 mr-4 font-bold uppercase">رسالتك للعروسين</label>
                        <textarea x-model="formData['guest-message']" placeholder="اللهم بارك لهما..." required
                            class="w-full bg-black/40 border border-yellow-500/10 rounded-2xl px-6 py-4 h-40 text-white focus:border-yellow-500/50 focus:bg-black/60 outline-none transition-all resize-none"></textarea>
                    </div>
                    <button type="submit" :disabled="loading"
                        class="w-full bg-gradient-to-r from-[#bf953f] via-[#fcf6ba] to-[#b38728] py-5 rounded-2xl text-slate-900 font-black text-lg shadow-xl hover:scale-[1.02] active:scale-95 transition-all disabled:opacity-50">
                        <span x-show="!loading">إرسال التهنئة ✨</span>
                        <span x-show="loading" class="flex items-center justify-center gap-2">
                            <svg class="animate-spin h-5 w-5 text-slate-900" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            جاري الإرسال...
                        </span>
                    </button>
                </form>

                <div x-show="showSuccess" x-transition.opacity
                    class="absolute inset-0 z-50 flex items-center justify-center bg-slate-950/98 rounded-[3rem] text-center p-8 border border-yellow-500/30" x-cloak>
                    <div data-aos="zoom-in">
                        <div class="text-7xl mb-6">🤲</div>
                        <h3 class="text-3xl text-gold font-black mb-4 font-aref-ruqaa">اللهم آمين</h3>
                        <p class="text-gray-300 text-lg mb-8">وصلت تهنئتك الرقيقة ودعواتك الطيبة.<br>عقبال عندكم جميعاً!</p>
                        <button @click="showSuccess = false"
                            class="bg-yellow-500/10 hover:bg-yellow-500/20 text-yellow-500 border border-yellow-500/50 px-10 py-3 rounded-full font-bold transition-colors">إغلاق</button>
                    </div>
                </div>
            </section>

            <section data-aos="fade-up">
                <div class="flex items-center gap-4 mb-8">
                    <div class="h-[1px] flex-1 bg-yellow-500/20"></div>
                    <h2 class="font-kufi text-3xl text-gold">موقع القاعة</h2>
                    <div class="h-[1px] flex-1 bg-yellow-500/20"></div>
                </div>
                <div class="rounded-[3rem] overflow-hidden h-96 border border-yellow-500/10 shadow-2xl relative group">
                    <iframe width="100%" height="100%" style="border:0; filter: grayscale(0.5) invert(0.9) contrast(1.2);" loading="lazy" allowfullscreen
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.3456!2d31.3324!3d30.0886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDA1JzE5LjAiTiAzMcKwMTknNTYuNiJF!5e0!3m2!1sen!2seg!4v1600000000000!5m2!1sen!2seg">
                    </iframe>
                    <div class="absolute inset-0 pointer-events-none border-[12px] border-black/20 rounded-[3rem]"></div>
                </div>
            </section>
        </main>

        <footer class="py-20 text-center border-t border-yellow-500/10 bg-black/20">
            <h2 class="text-5xl text-gold mb-4 font-rakkas">أَحْمَدُ & أُمْنِيَّةُ</h2>
            <p class="text-gray-500 text-sm font-bold uppercase tracking-[0.4em]">بانتظاركم بكل حب وشوق</p>
            <div class="mt-12 text-gray-700 text-xs">2026 • ليلة العمر</div>
        </footer>
    </div>

    <script>
        function weddingApp() {
            return {
                opened: false,
                contentVisible: false,
                countdown: { days: 0, hours: 0, minutes: 0, seconds: 0 },
                cards: [],
                flippedCards: [],
                moves: 0,
                timer: 0,
                timerInterval: null,
                gameFinished: false,
                formData: { 'guest-name': '', 'guest-message': '' },
                loading: false,
                showSuccess: false,
                pairs: [
                    { a: 'أَحْمَدُ', b: 'أُمْنِيَّةُ' },
                    { a: '👰', b: '🤵' },
                    { a: '🏡', b: '🔑' },
                    { a: '✍️', b: '📖' },
                    { a: '🌞', b: '🌕' },
                    { a: '🌧️', b: '☂️' }
                ],
                init() {
                    AOS.init({ duration: 1200, once: true, easing: 'ease-out-back' });
                    this.resetGame();
                    this.startCountdown();
                },
                startCountdown() {
                    const weddingDate = new Date('April 3, 2026 15:00:00').getTime();
                    setInterval(() => {
                        const now = new Date().getTime();
                        const distance = weddingDate - now;
                        if (distance < 0) return;
                        this.countdown.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        this.countdown.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        this.countdown.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        this.countdown.seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    }, 1000);
                },
                openInvitation() {
                    this.opened = true;
                    document.getElementById('openSfx').play();
                    confetti({
                        particleCount: 150,
                        spread: 70,
                        origin: { y: 0.6 },
                        colors: ['#d4af37', '#ff4d6d', '#ffffff']
                    });
                    setTimeout(() => {
                        this.contentVisible = true;
                        document.getElementById('bgMusic').play().catch(e => {});
                        this.startTimer();
                        AOS.refresh();
                    }, 800);
                },
                startTimer() {
                    this.timerInterval = setInterval(() => {
                        if (!this.gameFinished && this.contentVisible) this.timer++;
                    }, 1000);
                },
                resetGame() {
                    let flatList = [];
                    this.pairs.forEach(p => {
                        flatList.push({ v: p.a, m: p.b }, { v: p.b, m: p.a });
                    });
                    this.cards = flatList.sort(() => Math.random() - 0.5).map((item, id) => ({
                        id, value: item.v, match: item.m, flipped: false, cleared: false
                    }));
                },
                flipCard(index) {
                    if (this.cards[index].flipped || this.cards[index].cleared || this.flippedCards.length === 2) return;
                    document.getElementById('flipSfx').play();
                    this.cards[index].flipped = true;
                    this.flippedCards.push(index);
                    if (this.flippedCards.length === 2) {
                        this.moves++;
                        setTimeout(() => this.checkMatch(), 700);
                    }
                },
                checkMatch() {
                    let [idx1, idx2] = this.flippedCards;
                    if (this.cards[idx1].match === this.cards[idx2].value) {
                        this.cards[idx1].cleared = this.cards[idx2].cleared = true;
                        if (this.cards.every(c => c.cleared)) {
                            this.gameFinished = true;
                            document.getElementById('winSfx').play();
                            confetti({ particleCount: 200, spread: 90, colors: ['#d4af37', '#ffffff'] });
                        }
                    } else {
                        this.cards[idx1].flipped = this.cards[idx2].flipped = false;
                    }
                    this.flippedCards = [];
                },
                submitForm() {
                    this.loading = true;
                    setTimeout(() => {
                        this.showSuccess = true;
                        this.loading = false;
                        this.formData = { 'guest-name': '', 'guest-message': '' };
                        confetti({ particleCount: 100, spread: 70 });
                    }, 1500);
                }
            }
        }
    </script>
</body>
</html>

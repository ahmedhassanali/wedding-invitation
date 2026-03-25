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

    <link
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700;900&family=Rakkas&family=Reem+Kufi:wght@400;700&family=Great+Vibes&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&display=swap" rel="stylesheet">

    <style>
        [x-cloak] {
            display: none !important;
        }

        .font-tajawal {
            font-family: 'Tajawal', sans-serif;
        }

        .font-kufi {
            font-family: 'Reem Kufi', sans-serif;
        }

        .font-wedding {
            font-family: 'Great Vibes', cursive;
        }

        .font-rakkas {
            font-family: 'Rakkas', serif;
            letter-spacing: -3px;
            line-height: 1;
        }

        .font-allura {
            font-family: "Allura", cursive;
            font-weight: 1000;
            font-style: bold !important;
            /* letter-spacing: -3px; */
            line-height: 1;
        }

        .font-parisienne {
            font-family: "Parisienne", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .font-aref-ruqaa {
            font-family: "Aref Ruqaa", serif;
            font-weight: 400;
            font-style: normal;
        }


        body {
            font-family: 'Tajawal', sans-serif;
        }

        .bg-flowers {
            background-image: linear-gradient(rgba(37, 29, 66, 0.9), rgba(0, 0, 0, 0.9)),
                url('https://images.unsplash.com/photo-1526047932273-341f2a7631f9?q=80&w=2080&auto=format&fit=crop');
            background-attachment: fixed;
            background-size: cover;
        }

        .glass {
            background: rgba(238, 43, 43, 0.03);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 215, 0, 0.15);
        }

        /* تأثير الوميض الذهبي Shine */
        .text-gold {
            background: linear-gradient(to right, #bf953f 20%, #fcf6ba 40%, #b38728 60%, #fcf6ba 80%, #bf953f 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shineGold 4s linear infinite;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
        }

        @keyframes shineGold {
            to {
                background-position: 200% center;
            }
        }

        .btn-pulse {
            animation: pulse-gold 2s infinite;
        }

        .leaf {
            position: fixed;
            top: -50px;
            z-index: 1;
            /* خلف المحتوى وأمام الخلفية الزرقاء */
            pointer-events: none;
            background: linear-gradient(135deg, #ffb3c1, #a12a40);
            /* لون وردي ناعم كبتلات الورد */
            border-radius: 100% 0 100% 0;
            opacity: 0.7;
            filter: blur(1.5px);
            animation: fall linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(0) rotate(0deg) translateX(0);
                opacity: 0;
            }

            10% {
                opacity: 0.8;
            }

            90% {
                opacity: 0.8;
            }

            100% {
                transform: translateY(110vh) rotate(720deg) translateX(100px);
                opacity: 0;
            }
        }

        /* نظام تساقط بتلات الزهور */
        .petal {
            position: fixed;
            background: #ff4d6d;
            border-radius: 150% 0 150% 0;
            opacity: 0.3;
            pointer-events: none;
            z-index: 1;
            animation: petalFall linear infinite;
        }

        @keyframes petalFall {
            0% {
                transform: translateY(-10vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.3;
            }

            90% {
                opacity: 0.3;
            }

            100% {
                transform: translateY(110vh) rotate(360deg);
                opacity: 0;
            }
        }

        .bg-gold-gradient {
            background: linear-gradient(135deg, #bf953f, #fcf6ba, #b38728);
        }

        .rings-animation {
            animation: ring-float 4s ease-in-out infinite;
        }

        @keyframes ring-float {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-10px) scale(1.05);
            }
        }

        .intro-overlay {
            transition: all 1.2s cubic-bezier(0.4, 0, 0.2, 1);
            background: radial-gradient(circle at center, #1a202c 0%, #0a0f1a 100%);
        }

        .intro-overlay.hidden-scale {
            opacity: 0;
            transform: scale(1.1);
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-[#0a0f1a] bg-flowers text-slate-200 antialiased overflow-x-hidden" x-data="weddingApp()">



    <template x-if="contentVisible">
        <div class="fixed inset-0 pointer-events-none overflow-hidden" style="z-index: 1;">
            <template x-for="n in 10">
                <div class="leaf"
                    :style="`
                                                                                left: ${Math.random() * 100}vw;
                                                                                width: ${Math.random() * 12 + 8}px;
                                                                                height: ${Math.random() * 12 + 8}px;
                                                                                animation-duration: ${Math.random() * 10 + 12}s;
                                                                                animation-delay: ${Math.random() * 15}s;
                                                                                opacity: ${Math.random() * 0.4 + 0.2};
                                                                            `">
                </div>
            </template>
        </div>
    </template>

    <audio id="bgMusic" loop
        src="https://dl.dropboxusercontent.com/scl/fi/o56fsq5awqeqsvx4sgm4y/voice.m4a?rlkey=fn0xpuib6te3mtniytvw69pd3"></audio>
    <audio id="openSfx" src="https://assets.mixkit.co/active_storage/sfx/2571/2571-preview.mp3"></audio>
    <audio id="flipSfx" src="https://assets.mixkit.co/active_storage/sfx/2048/2048-preview.mp3"></audio>
    <audio id="winSfx" src="https://assets.mixkit.co/active_storage/sfx/1435/1435-preview.mp3"></audio>

    <div :class="opened ? 'hidden-scale' : ''"
        class="intro-overlay fixed inset-0 z-[100] flex flex-col items-center justify-center text-center px-6">


        <button @click="openInvitation()"
            class="relative group transition-transform active:scale-95 duration-300 flex items-center justify-center btn-pulse">
            <div
                class="bg-gradient-to-br from-[#d4af37] via-[#fcf6ba] to-[#aa771c] w-32 h-32 rounded-full flex items-center justify-center shadow-[0_10px_20px_rgba(0,0,0,0.4),inset_0_2px_5px_rgba(255,255,255,0.5)] before:content-[''] before:absolute before:inset-[-5px] before:bg-gradient-to-tr before:from-[#aa771c] before:to-[#d4af37] before:rounded-[45%_55%_50%_50%] before:-z-10 before:rotate-12 transition-all duration-700 relative">
                <div
                    class="flex items-center justify-center border-2 border-[#aa771c]/50 w-24 h-24 rounded-full shadow-[inset_0_4px_8px_rgba(0,0,0,0.3)] bg-gradient-to-tl from-[#d4af37] to-[#fcf6ba]">
                    <span class="text-[#7a5a12] font-parisienne font-bold text-3xl select-none"
                        style="text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); font-size: 1.8rem; line-height: 1; font-weight: bold;">
                        A&O </span>
                </div>
            </div>
            <div class="absolute inset-0 bg-yellow-600/20 blur-2xl -z-20 rounded-full"></div>
        </button>
        <span class="font-rakkas font-medium text-yellow-500/80 tracking-[0.2em] my-2 text-sm uppercase">تفضلوا
            بالدخول</span>
    </div>

    <div x-show="contentVisible" x-cloak class="relative z-10">
        <header class="relative min-h-screen flex flex-col items-center justify-center text-center px-4 py-20">
            <div class="rings-animation mb-4" data-aos="zoom-in">
                <svg width="100" height="70" viewBox="0 0 120 80" fill="none">
                    <circle cx="40" cy="40" r="35" stroke="#d4af37" stroke-width="4" />
                    <circle cx="80" cy="40" r="35" stroke="#fcf6ba" stroke-width="4" />
                </svg>
            </div>
            <div class="font-rakkas text-6xl md:text-8xl text-gold mb-4 pt-7" data-aos="fade-down">أَحْمَدُ وَ
                أُمْنِيَّةُ</div>
            <p class="max-w-1xl text-1xl md:text-4xl leading-relaxed text-gray-200 font-aref-ruqaa font-medium px-6 mb-12"
                data-aos="fade-up">
                بَارَكَ اللَّهُ لَكُمَا وَبَارَكَ عَلَيْكُمَا وَجَمَعَ بَيْنَكُمَا فِي خَيْر
            </p>
            <p class="font-kufi text-2xl text-yellow-200/80 mb-8" data-aos="fade-up">3 أبريل • 2026</p>

            <div class="flex flex-row-reverse justify-center gap-3 md:gap-6 font-tajawal" data-aos="fade-up">
                <template
                    x-for="(val, label) in { 'يوم': countdown.days, 'ساعة': countdown.hours, 'دقيقة': countdown.minutes, 'ثانية': countdown.seconds }">
                    <div class="glass w-20 md:w-24 py-4 rounded-2xl border-yellow-500/20">
                        <div class="text-3xl md:text-4xl font-black text-gold" x-text="String(val).padStart(2, '0')">
                        </div>
                        <div class="text-[10px] md:text-xs text-yellow-100/50 font-bold mt-1" x-text="label"></div>
                    </div>
                </template>
            </div>
        </header>

        <section class="max-w-4xl mx-auto px-6 -mt-16 relative z-20">
            <div class="glass p-10 rounded-[3rem] text-center border-yellow-500/20" data-aos="flip-up">
                <div
                    class="grid md:grid-cols-2 gap-12 divide-y md:divide-y-0 md:divide-x md:divide-x-reverse divide-yellow-500/20 font-tajawal">
                    <div class="pb-8 md:pb-0">
                        <span class="text-3xl mb-4 block">🕒</span>
                        <h3 class="text-yellow-500 text-xl mb-2 font-bold">موعدنا</h3>
                        <p class="text-white text-lg font-bold">من الساعة 3:00 عصرًا</p>
                    </div>
                    <div class="pt-8 md:pt-0">
                        <span class="text-3xl mb-4 block">📍</span>
                        <h3 class="text-yellow-500 text-xl mb-2 font-bold">المكان</h3>
                        <p class="text-white text-lg font-bold">نادي الجلاء للقوات المسلحة</p>
                        <p class="text-yellow-100/70">قاعة سوليتير - مصر الجديدة</p>
                    </div>
                </div>
            </div>
        </section>

        <main class="max-w-2xl mx-auto px-6 py-24 space-y-32">
            <section data-aos="fade-up" class="glass p-8 rounded-[2.5rem] font-tajawal">
                <div class="text-center mb-8">
                    <h2 class="text-3xl text-white font-aref-ruqaa">النص التاني فين؟</h2>
                    <p class="text-yellow-500 text-sm mt-2 font-medium"> كل حاجة وليها اللي يكملها.. ورّينا شطارتك💍</p>
                    <div class="flex justify-center gap-6 mt-4 text-xs text-yellow-100/60 font-bold">
                        <span>عدد الحركات: <span class="text-white" x-text="moves">0</span></span>
                        <span>الوقت: <span class="text-white" x-text="timer">0</span> ثانية</span>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-3">
                    <template x-for="(card, index) in cards" :key="index">
                        <div @click="flipCard(index)" class="h-24 relative cursor-pointer">
                            <div class="w-full h-full transition-all duration-500 transform-style-3d relative"
                                :class="card.flipped || card.cleared ? '[transform:rotateY(180deg)]' : ''">
                                <div
                                    class="absolute inset-0 bg-slate-800/50 rounded-xl border border-yellow-500/10 flex items-center justify-center backface-hidden">
                                    <span class="text-gold font-wedding opacity-30 text-2xl">💝</span>
                                </div>
                                <div
                                    class="absolute inset-0 bg-white rounded-xl flex items-center justify-center [transform:rotateY(180deg)] backface-hidden shadow-inner">
                                    <span
                                        :class="['أَحْمَدُ', 'أُمْنِيَّةُ'].includes(card.value) ?
                                            'text-yellow-700 font-bold text-xs' : 'text-3xl'"
                                        x-text="card.value"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </section>

            <section data-aos="fade-up" class="glass p-8 rounded-[2.5rem] relative font-tajawal">
                <h2 class="text-2xl text-center mb-4 text-gold font-tajawal">بارك لنا بدعوة من قلبك</h2>
                <form name="wedding-wishes" method="POST" data-netlify="true" @submit.prevent="submitForm"
                    class="space-y-4">
                    <input type="hidden" name="form-name" value="wedding-wishes">
                    <input type="text" name="guest-name" x-model="formData['guest-name']" placeholder="الاسم"
                        required
                        class="w-full bg-slate-900/50 border border-yellow-500/20 rounded-xl px-4 py-3 text-white focus:border-yellow-500 outline-none">
                    <textarea name="guest-message" x-model="formData['guest-message']" placeholder="اكتب دعواتك وتهنئتك هنا..." required
                        class="w-full bg-slate-900/50 border border-yellow-500/20 rounded-xl px-4 py-3 h-32 text-white focus:border-yellow-500 outline-none"></textarea>
                    <button type="submit" :disabled="loading"
                        class="w-full bg-gold-gradient py-3 rounded-xl text-slate-900 font-bold disabled:opacity-50">
                        <span x-show="!loading">إرسال التهنئة ✨</span>
                        <span x-show="loading">جاري الإرسال...</span>
                    </button>
                </form>
                <div x-show="showSuccess"
                    class="absolute inset-0 z-50 flex items-center justify-center bg-slate-950/95 rounded-[2.5rem] text-center p-6 border border-yellow-500/30"
                    x-cloak>
                    <div>
                        <div class="text-5xl mb-4">🤲</div>
                        <h3 class="text-2xl text-gold font-black">اللهم آمين</h3>
                        <p class="text-gray-300">وصلت تهنئتك الرقيقة ودعواتك الطيبة.</p>
                        <button @click="showSuccess = false"
                            class="mt-4 text-yellow-500 border border-yellow-500/20 px-6 py-1 rounded-full font-bold">إغلاق</button>
                    </div>
                </div>
            </section>

            <section data-aos="fade-up">
                <h1 class="font-tajawal text-3xl text-center mb-3 text-gold">موقع القاعة</h1>
                <div class="rounded-[2.5rem] overflow-hidden h-80 border border-slate-800 shadow-2xl">
                    <iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.9213123861274!2d31.3426074753551!3d30.09637667489814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581573300ab977%3A0x33138944136a6a79!2sSolitaire%20Palace%20wedding%20venue!5e0!3m2!1sen!2seg!4v1709123456789!5m2!1sen!2seg">
                    </iframe>
                </div>
            </section>

        </main>



        <footer class="py-20 text-center border-t border-yellow-500/10 ">
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
                countdown: {
                    days: 0,
                    hours: 0,
                    minutes: 0,
                    seconds: 0
                },
                cards: [],
                flippedCards: [],
                moves: 0,
                timer: 0,
                timerInterval: null,
                gameFinished: false,
                formData: {
                    'guest-name': '',
                    'guest-message': ''
                },
                loading: false,
                showSuccess: false,
                pairs: [{
                    a: 'أَحْمَدُ',
                    b: 'أُمْنِيَّةُ'
                }, {
                    a: '👰',
                    b: '🤵'
                }, {
                    a: '🏡',
                    b: '🔑'
                }, {
                    a: '✍️',
                    b: '📖'
                }, {
                    a: '🌞',
                    b: '🌕'
                }, {
                    a: '🌧️',
                    b: '☂️'
                }],
                init() {
                    AOS.init({
                        duration: 1000,
                        once: true
                    });
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
                        origin: {
                            y: 0.7
                        },
                        colors: ['#ff4d6d', '#d4af37', '#ffffff']
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
                        if (!this.gameFinished) this.timer++;
                    }, 1000);
                },
                resetGame() {
                    let flatList = [];
                    this.pairs.forEach(p => {
                        flatList.push({
                            v: p.a,
                            m: p.b
                        }, {
                            v: p.b,
                            m: p.a
                        });
                    });
                    this.cards = flatList.sort(() => Math.random() - 0.5).map((item, id) => ({
                        id,
                        value: item.v,
                        match: item.m,
                        flipped: false,
                        cleared: false
                    }));
                },
                flipCard(index) {
                    if (this.cards[index].flipped || this.cards[index].cleared || this.flippedCards.length === 2) return;
                    document.getElementById('flipSfx').play();
                    this.cards[index].flipped = true;
                    this.flippedCards.push(index);
                    if (this.flippedCards.length === 2) {
                        this.moves++;
                        setTimeout(() => this.checkMatch(), 800);
                    }
                },
                checkMatch() {
                    let [idx1, idx2] = this.flippedCards;
                    if (this.cards[idx1].match === this.cards[idx2].value) {
                        this.cards[idx1].cleared = this.cards[idx2].cleared = true;
                        if (this.cards.every(c => c.cleared)) {
                            this.gameFinished = true;
                            document.getElementById('winSfx').play();
                            confetti({
                                particleCount: 200,
                                spread: 70,
                                colors: ['#d4af37', '#ffffff']
                            });
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
                        this.formData = {
                            'guest-name': '',
                            'guest-message': ''
                        };
                        confetti({
                            particleCount: 100,
                            spread: 70
                        });
                    }, 1500);
                }
            }
        }
    </script>
    <style>
        .backface-hidden {
            backface-visibility: hidden;
        }

        .transform-style-3d {
            transform-style: preserve-3d;
        }
    </style>
</body>

</html>

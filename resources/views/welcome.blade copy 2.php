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
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #0a0f1a;
            overflow-x: hidden;
        }

        .font-rakkas {
            font-family: 'Rakkas', serif;
        }

        .font-aref-ruqaa {
            font-family: "Aref Ruqaa", serif;
        }

        .font-kufi {
            font-family: 'Reem Kufi', sans-serif;
        }

        .font-wedding {
            font-family: 'Great Vibes', cursive;
        }


        .font-parisienne {
            font-family: "Parisienne", cursive;
        }

        .bg-flowers {
            background-image: linear-gradient(rgba(10, 15, 26, 0.8), rgba(10, 15, 26, 0.95)),
                url('https://images.unsplash.com/photo-1729603369767-3d151219fe75?q=80&w=2080&auto=format&fit=crop');
            background-attachment: fixed;
            background-size: cover;
        }

        .bg-button {
            background-image: linear-gradient(rgba(10, 15, 26, 0.8), rgba(10, 15, 26, 0.95)),
                url('https://images.unsplash.com/photo-1555089667-6cacabe58ebd?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D?q=80&w=2080&auto=format&fit=crop');
            background-attachment: fixed;
            background-size: cover;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 215, 0, 0.1);
        }

        .text-gold {
            background: linear-gradient(to right, #bf953f 20%, #fcf6ba 40%, #b38728 60%, #fcf6ba 80%, #bf953f 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shineGold 4s linear infinite;
        }

        @keyframes shineGold {
            to {
                background-position: 200% center;
            }
        }

        .rings-animation {
            animation: ring-float 4s ease-in-out infinite;
        }

        @keyframes ring-float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .backface-hidden {
            backface-visibility: hidden;
        }

        .transform-style-3d {
            transform-style: preserve-3d;
        }

        /* بتلات الورد */
        .petal {
            position: fixed;
            top: -10%;
            pointer-events: none;
            z-index: 5;
            background: #ff4d6d;
            border-radius: 150% 0 150% 0;
            opacity: 0.2;
            animation: petalFall linear infinite;
        }

        @keyframes petalFall {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 0.3;
            }

            100% {
                transform: translateY(110vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* تصميم الختم الشمعي الأصلي */
        .wax-seal {
            width: 120px;
            height: 120px;
            background: radial-gradient(circle at 30% 30%, #fe4a49 0%, #a00000 100%);
            border-radius: 50%;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), inset 0 0 20px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .wax-seal::after {
            content: '';
            position: absolute;
            inset: 5px;
            border: 2px dashed rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .wax-inner {
            width: 90px;
            height: 90px;
            border: 3px solid rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle, #c01c1c 0%, #800000 100%);
            box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body class="bg-flowers text-slate-200 antialiased" x-data="weddingApp()">

    <audio id="bgMusic" loop
        src="https://dl.dropboxusercontent.com/scl/fi/o56fsq5awqeqsvx4sgm4y/voice.m4a?rlkey=fn0xpuib6te3mtniytvw69pd3"></audio>
    <audio id="openSfx" src="https://assets.mixkit.co/active_storage/sfx/2571/2571-preview.mp3"></audio>
    <audio id="flipSfx" src="https://assets.mixkit.co/active_storage/sfx/2048/2048-preview.mp3"></audio>
    <audio id="winSfx" src="https://assets.mixkit.co/active_storage/sfx/1435/1435-preview.mp3"></audio>

    <div x-show="!contentVisible" class="fixed inset-0 z-[100] flex overflow-hidden ">
        <div x-show="!opened" x-transition:leave="transition transform duration-[3000ms] cubic-bezier(0.4, 0, 0.2, 1)"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
            class="w-1/2 h-full bg-[#0a0f1a] border-r border-yellow-500/10 z-[102] shadow-2xl"></div>
        <div x-show="!opened" x-transition:leave="transition transform duration-[3000ms] cubic-bezier(0.4, 0, 0.2, 1)"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
            class="w-1/2 h-full bg-[#0a0f1a] border-l border-yellow-500/10 z-[102] shadow-2xl"></div>

        <div x-show="!opened" x-transition:leave="transition all duration-[1200ms] ease-in"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-125"
            class="absolute inset-0 z-[103] flex flex-col items-center justify-center text-center px-6 bg-button">
            <button @click="openInvitation()" class="...">
                <div
                    class="w-32 h-32 rounded-full flex items-center justify-center relative transition-all duration-700
                            bg-[radial-gradient(circle_at_30%_30%,_#fe4a49_0%,_#c01c1c_60%,_#800000_100%)]
                            shadow-[0_10px_20px_rgba(0,0,0,0.6),inset_0_2px_5px_rgba(255,255,255,0.2)]
                            before:content-[''] before:absolute before:inset-[-5px]
                            before:bg-[radial-gradient(circle_at_center,_#c01c1c,_#800000)]
                            before:rounded-[45%_55%_50%_50%] before:-z-10 before:rotate-12">
                    <div
                        class="flex items-center justify-center border-2 border-[#800000]/40 w-24 h-24 rounded-full
                    shadow-[inset_0_4px_8px_rgba(0,0,0,0.5)]
                    bg-[radial-gradient(circle_at_50%_50%,_#c01c1c_0%,_#a00000_100%)]">
                        <span class="text-[#fcf6ba]/90 font-parisienne font-bold text-3xl select-none">A&O</span>
                    </div>
                </div>
            </button>
            <span
                class="font-rakkas font-medium text-red-100/80 tracking-[0.2em] my-6 text-sm uppercase animate-bounce">
                تفضلوا بالدخول
            </span>
        </div>
    </div>



    <div x-show="opened" class="relative z-10" x-cloak>
        <header class="min-h-screen flex flex-col items-center justify-center text-center px-4 py-20">
            <div class="rings-animation mb-6">
                <svg width="100" height="70" viewBox="0 0 120 80" fill="none">
                    <circle cx="40" cy="40" r="35" stroke="#d4af37" stroke-width="4" />
                    <circle cx="80" cy="40" r="35" stroke="#fcf6ba" stroke-width="4" />
                </svg>
            </div>
            <h1 class="font-rakkas text-6xl md:text-8xl text-gold mb-6">أَحْمَدُ وَ أُمْنِيَّةُ</h1>
            <p class="max-w-2xl text-xl md:text-3xl font-aref-ruqaa text-gray-200 mb-10 px-6">بَارَكَ اللَّهُ لَكُمَا
                وَبَارَكَ عَلَيْكُمَا وَجَمَعَ بَيْنَكُمَا فِي خَيْر</p>
            <p class="font-kufi text-2xl text-yellow-200/80 mb-8" data-aos="fade-up">3 أبريل • 2026</p>

            <div class="flex flex-row-reverse justify-center gap-3 md:gap-6 font-tajawal" data-aos="fade-up">
                <template
                    x-for="(val, label) in { 'يوم': countdown.days, 'ساعة': countdown.hours, 'دقيقة': countdown.minutes, 'ثانية': countdown.seconds }">
                    <div class="glass w-20 md:w-24 py-4 rounded-2xl border-yellow-500/20">
                        <div class="text-3xl md:text-4xl font-black font-kufi text-gold"
                            x-text="String(val).padStart(2, '0')">
                        </div>
                        <div class="text-[10px] md:text-xs text-yellow-100/50 font-bold mt-1" x-text="label"></div>
                    </div>
                </template>
            </div>
        </header>

        <section class="max-w-4xl mx-auto px-6 -mt-16 relative z-20" x-show="contentVisible">
            <div class="glass p-10 rounded-[3rem] text-center border-yellow-500/20" data-aos="fade-up">
                <div
                    class="grid md:grid-cols-2 gap-12 divide-y md:divide-y-0 md:divide-x md:divide-x-reverse divide-yellow-500/20">
                    <div class="pb-8 md:pb-0">
                        <span class="text-3xl mb-4 block">🕒</span>
                        <h3 class="text-yellow-500 text-xl font-bold mb-2">موعدنا</h3>
                        <p class="text-white text-lg">الجمعة، الساعة 3:00 عصرًا</p>
                    </div>
                    <div class="pt-8 md:pt-0">
                        <span class="text-3xl mb-4 block">📍</span>
                        <h3 class="text-yellow-500 text-xl font-bold mb-2">المكان</h3>
                        <p class="text-white text-lg">نادي الجلاء - قاعة سوليتير</p>
                        <p class="text-yellow-100/60 text-sm">مصر الجديدة، القاهرة</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-2xl mx-auto px-6 py-24" x-show="contentVisible">
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
                                    <span class="text-gold opacity-30 text-2xl">💝</span>
                                </div>

                                <div
                                    class="absolute inset-0 bg-white rounded-xl flex items-center justify-center [transform:rotateY(180deg)] backface-hidden shadow-inner text-slate-800">
                                    <span
                                        :class="['أَحْمَدُ', 'أُمْنِيَّةُ'].includes(card.value) ?
                                            'text-yellow-700 font-bold text-[10px]' : 'text-3xl'"
                                        x-text="card.value"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <div class="text-center mt-6" x-show="cards.every(c => c.cleared)">
                    <button @click="resetGame()" class="text-yellow-500 text-sm hover:underline">لعب مرة
                        أخرى؟</button>
                </div>
            </section>
        </section>

        <section class="max-w-2xl mx-auto px-6 py-12" x-show="contentVisible">
            <div class="glass p-8 rounded-[2.5rem] relative" data-aos="fade-up">
                <h2 class="text-2xl text-center mb-8 text-gold font-tajawal">بارك لنا بدعوة من قلبك</h2>
                <form @submit.prevent="submitForm" class="space-y-4">
                    <input type="text" x-model="formData.name" placeholder="اسمك الكريم" required
                        class="w-full bg-slate-900/50 border border-yellow-500/20 rounded-xl px-4 py-3 text-white focus:border-yellow-500 outline-none transition-all">
                    <textarea x-model="formData.message" placeholder="اكتب تهنئتك هنا..." required
                        class="w-full bg-slate-900/50 border border-yellow-500/20 rounded-xl px-4 py-3 h-32 text-white focus:border-yellow-500 outline-none transition-all"></textarea>
                    <button type="submit" :disabled="loading"
                        class="w-full bg-gradient-to-r from-[#bf953f] via-[#fcf6ba] to-[#b38728] py-3 rounded-xl text-slate-900 font-bold hover:opacity-90 transition-opacity disabled:opacity-50">إرسال
                        التهنئة ✨</button>
                </form>

                <div x-show="showSuccess" x-cloak
                    class="absolute inset-0 bg-slate-900/95 rounded-[2.5rem] flex items-center justify-center text-center p-6 border border-yellow-500/30 z-50">
                    <div>
                        <div class="text-5xl mb-4">🤲</div>
                        <h3 class="text-2xl text-gold font-bold mb-2">وصلت محبتكم</h3>
                        <p class="text-gray-300">شكراً لمشاركتكم فرحتنا ودعواتكم الطيبة.</p>
                        <button @click="showSuccess = false"
                            class="mt-6 text-yellow-500 border border-yellow-500/20 px-8 py-2 rounded-full text-sm">إغلاق</button>
                    </div>
                </div>
            </div>
        </section>

        <footer class="max-w-4xl mx-auto px-6 py-24 text-center">
            <h2 class="text-3xl text-gold mb-8 font-rakkas">موقع القاعة</h2>
            <div class="rounded-[2.5rem] overflow-hidden h-80 border border-yellow-500/10 shadow-2xl mb-12">
                <iframe width="100%" height="100%" style="border:0" loading="lazy"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.9213123861274!2d31.3426074753551!3d30.09637667489814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581573300ab977%3A0x33138944136a6a79!2sSolitaire%20Palace%20wedding%20venue!5e0!3m2!1sen!2seg!4v1709123456789!5m2!1sen!2seg"></iframe>
            </div>
            <div class="border-t border-yellow-500/10 pt-12">
                <h2 class="text-5xl text-gold mb-4 font-rakkas">أَحْمَدُ & أُمْنِيَّةُ</h2>
                <p class="text-gray-500 text-sm font-bold uppercase tracking-[0.4em]">بانتظاركم بكل حب وشوق</p>

                <p class="mt-8 text-xs text-gray-700">2026 • ليلة العمر</p>
            </div>
        </footer>

        <button @click="toggleMusic()"
            class="fixed bottom-6 right-6 z-50 glass w-12 h-12 rounded-full flex items-center justify-center text-gold border-yellow-500/30">
            <template x-if="!musicPlaying">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" />
                </svg>
            </template>
            <template x-if="musicPlaying">
                <div class="flex items-end gap-1 h-3">
                    <div class="w-1 bg-gold animate-bounce"></div>
                    <div class="w-1 bg-gold animate-bounce" style="animation-delay: 0.2s"></div>
                    <div class="w-1 bg-gold animate-bounce" style="animation-delay: 0.4s"></div>
                </div>
            </template>
        </button>
    </div>

    <script>
        function weddingApp() {
            return {
                opened: false,
                contentVisible: false,
                musicPlaying: false,
                countdown: {
                    days: 0,
                    hours: 0,
                    minutes: 0,
                    seconds: 0
                },
                cards: [],
                flippedCards: [],
                moves: 0,
                gameTimer: 0,
                timerInterval: null,
                loading: false,
                showSuccess: false,
                formData: {
                    name: '',
                    message: ''
                },
                pairs: [{
                        a: 'أَحْمَدُ',
                        b: 'أُمْنِيَّةُ'
                    },
                    {
                        a: '👰',
                        b: '🤵'
                    },
                    {
                        a: '💍',
                        b: '💍'
                    },
                    {
                        a: '❤️',
                        b: '❤️'
                    },
                    {
                        a: '💐',
                        b: '💐'
                    },
                    {
                        a: '🥳',
                        b: '🥳'
                    }
                ],
                init() {
                    AOS.init({
                        duration: 1000,
                        once: true
                    });
                    this.resetGame();
                    this.startCountdown();
                    this.createPetals();
                },
                startCountdown() {
                    const weddingDate = new Date('April 3, 2026 15:00:00').getTime();
                    setInterval(() => {
                        const now = new Date().getTime();
                        const dist = weddingDate - now;
                        this.countdown.days = Math.floor(dist / (1000 * 60 * 60 * 24));
                        this.countdown.hours = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        this.countdown.minutes = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
                        this.countdown.seconds = Math.floor((dist % (1000 * 60)) / 1000);
                    }, 1000);
                },
                openInvitation() {
                    this.opened = true;
                    document.getElementById('openSfx').play().catch(e => {});
                    confetti({
                        particleCount: 150,
                        spread: 70,
                        origin: {
                            y: 0.6
                        },
                        colors: ['#bf953f', '#ff4d6d', '#ffffff']
                    });

                    setTimeout(() => {
                        this.contentVisible = true;
                        this.toggleMusic(true);
                        AOS.refresh();
                        this.startGameTimer();
                    }, 3000);
                },
                toggleMusic(forcePlay = false) {
                    const audio = document.getElementById('bgMusic');
                    if (forcePlay || audio.paused) {
                        audio.play().catch(e => {});
                        this.musicPlaying = true;
                    } else {
                        audio.pause();
                        this.musicPlaying = false;
                    }
                },
                startGameTimer() {
                    if (this.timerInterval) clearInterval(this.timerInterval);
                    this.timerInterval = setInterval(() => {
                        if (!this.cards.every(c => c.cleared)) {
                            this.gameTimer++;
                        } else {
                            clearInterval(this.timerInterval);
                        }
                    }, 1000);
                },
                resetGame() {
                    this.moves = 0;
                    this.gameTimer = 0;
                    let flat = [];
                    this.pairs.forEach(p => flat.push({
                        v: p.a,
                        m: p.b
                    }, {
                        v: p.b,
                        m: p.a
                    }));
                    this.cards = flat.sort(() => Math.random() - 0.5).map((item, id) => ({
                        id,
                        value: item.v,
                        match: item.m,
                        flipped: false,
                        cleared: false
                    }));
                    if (this.opened) this.startGameTimer();
                },
                flipCard(index) {
                    if (this.cards[index].flipped || this.cards[index].cleared || this.flippedCards.length === 2) return;

                    this.cards[index].flipped = true;
                    this.flippedCards.push(index);
                    document.getElementById('flipSfx').play().catch(e => {});

                    if (this.flippedCards.length === 2) {
                        this.moves++;
                        setTimeout(() => this.checkMatch(), 700);
                    }
                },
                checkMatch() {
                    let [i1, i2] = this.flippedCards;
                    if (this.cards[i1].match === this.cards[i2].value) {
                        this.cards[i1].cleared = this.cards[i2].cleared = true;
                        if (this.cards.every(c => c.cleared)) {
                            document.getElementById('winSfx').play().catch(e => {});
                            confetti({
                                particleCount: 200,
                                spread: 90
                            });
                        }
                    } else {
                        this.cards[i1].flipped = this.cards[i2].flipped = false;
                    }
                    this.flippedCards = [];
                },
                submitForm() {
                    this.loading = true;
                    setTimeout(() => {
                        this.loading = false;
                        this.showSuccess = true;
                        this.formData = {
                            name: '',
                            message: ''
                        };
                    }, 1500);
                },
                createPetals() {
                    for (let i = 0; i < 15; i++) {
                        let p = document.createElement('div');
                        p.className = 'petal';
                        p.style.left = Math.random() * 100 + 'vw';
                        p.style.width = p.style.height = (Math.random() * 10 + 10) + 'px';
                        p.style.animationDuration = (Math.random() * 5 + 5) + 's';
                        document.body.appendChild(p);
                    }
                }
            }
        }
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>دعوة زفاف كمال & نورا</title>

    <meta property="og:title" content="دعوة زفاف كمال & نورا 🤍">
    <meta property="og:description" content="بكل حب وفرحة.. نتشرف بحضوركم ومشاركتكم أجمل لحظات عمرنا ✨">
    {{-- <meta property="og:image"
        content="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1400&auto=format&fit=crop"> --}}

    <meta property="twitter:image" content="https://ahmed-omneya.com/images/wedding-preview-kn.jpg">
    <meta property="twitter:image" content="{{ secure_asset('images/wedding-preview-kn.jpg') }}">
    <meta property="og:image" content="https://ahmed-omneya.com/images/wedding-preview-kn.jpg">
    <meta property="og:image:secure_url" content="https://ahmed-omneya.com/images/wedding-preview-kn.jpg">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700;900&family=El+Messiri:wght@400;700&family=Parisienne&display=swap"
        rel="stylesheet">

    <style>
        [x-cloak] {
            display: none !important;
        }

        :root {
            --sage: #8fa89e;
            --dark-sage: #5f716a;
            --cream: #f6f1eb;
            --gold: #d6c2a1;
            --white: #fffdf9;
            --text: #2f3a36;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background:
                linear-gradient(rgba(246, 241, 235, 0.88),
                    rgba(246, 241, 235, 0.92)),
                url('https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=2080&auto=format&fit=crop');

            background-size: cover;
            background-attachment: fixed;
            overflow-x: hidden;
            color: var(--text);
        }

        .font-kufi {
            font-family: 'El Messiri', sans-serif;
            font-weight: 700;
        }

        .font-aref-ruqaa {
            font-family: 'Tajawal', sans-serif;
        }

        .font-parisienne {
            font-family: 'Parisienne', cursive;
        }

        .glass {
            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(143, 168, 158, 0.18);
            box-shadow:
                0 10px 40px rgba(95, 113, 106, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.6);
        }

        .hero-overlay {
            background:
                linear-gradient(to bottom,
                    rgba(246, 241, 235, 0.3),
                    rgba(246, 241, 235, 0.95));
        }

        .text-gradient {
            background: linear-gradient(to right,
                    #5f716a,
                    #d6c2a1,
                    #8fa89e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-image {
            background:
                linear-gradient(rgba(0, 0, 0, 0.25),
                    rgba(0, 0, 0, 0.4)),
                url('https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=2070&auto=format&fit=crop');

            background-size: cover;
            background-position: center;
        }

        .floating {
            animation: floating 5s ease-in-out infinite;
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .memory-card {
            transform-style: preserve-3d;
        }

        .backface-hidden {
            backface-visibility: hidden;
        }

        .petal {
            position: fixed;
            top: -10%;
            pointer-events: none;
            z-index: 5;
            border-radius: 100% 0 100% 0;
            opacity: 0.2;
            animation: petalFall linear infinite;
            background: #8fa89e;
        }

        @keyframes petalFall {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: .3;
            }

            100% {
                transform: translateY(110vh) rotate(360deg);
                opacity: 0;
            }
        }

        .btn-primary {
            background: linear-gradient(to right,
                    #5f716a,
                    #8fa89e);
            box-shadow: 0 10px 25px rgba(95, 113, 106, .2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
        }
    </style>
</head>

<body x-data="weddingApp()">

    <!-- موسيقى -->
    <audio id="bgMusic" loop src="voice/voice3.mp3"></audio>

    <audio id="openSfx" src="https://assets.mixkit.co/active_storage/sfx/2571/2571-preview.mp3"></audio>

    <!-- شاشة البداية -->
    <div x-show="!contentVisible" class="fixed inset-0 z-[100] flex items-center justify-center hero-image">

        <div class="absolute inset-0 hero-overlay"></div>

        <div class="relative z-20 text-center px-6">

            <div class="floating mb-10">

                <!-- Replace with elegant wedding logo -->
                <div
                    class="w-40 h-40 rounded-full glass flex items-center justify-center mx-auto border border-white/40">

                    <div class="w-28 h-28 rounded-full bg-white/60 flex items-center justify-center">

                        <span class="font-parisienne text-5xl text-[#5f716a]">K&N</span>

                    </div>
                </div>

            </div>

            {{-- <h1 class="text-6xl md:text-8xl font-kufi text-gradient font-bold mb-4 px-6 py-4">كمال & نورا</h1> --}}

            {{-- <p class="text-lg md:text-2xl text-[#5f716a] mb-10">
                دعوة زفاف بكل الحب والفرحة
            </p> --}}

            <button @click="openInvitation()"
                class="btn-primary text-white px-10 py-4 rounded-full text-lg transition-all duration-500">

                فتح الدعوة ✨

            </button>

        </div>
    </div>

    <!-- المحتوى -->
    <div x-show="opened" x-cloak>

        <!-- HERO -->
        <section
            class="min-h-screen flex flex-col items-center justify-center text-center px-6 relative overflow-hidden">

            <div class="absolute inset-0 opacity-10">

                <!-- Replace with romantic couple image -->
                <img src="https://images.unsplash.com/photo-1525258946800-98cfd641d0de?q=80&w=1974&auto=format&fit=crop"
                    class="w-full h-full object-cover">

            </div>

            <div class="relative z-10">

                <div class="floating mb-8">
                    <div
                        class="w-28 h-28 rounded-full bg-white/60 glass flex items-center justify-center mx-auto text-5xl">
                        🤍
                    </div>
                </div>

                <h1 class="text-6xl md:text-8xl font-kufi text-gradient font-bold mb-6 px-6 py-4">كمال & نورا</h1>

                <p class="max-w-2xl mx-auto text-xl md:text-3xl leading-loose text-[#5f716a] mb-10">
                    بحضوركم تكتمل فرحتنا،
                    ويسعدنا دعوتكم لمشاركتنا أجمل أيام العمر ✨
                </p>

                <p class="text-2xl text-[#8fa89e] mb-10">
                    15 مايو 2026
                </p>

                <!-- العد التنازلي -->
                <div class="flex flex-wrap justify-center gap-4">

                    <template
                        x-for="(val, label) in { 'يوم': countdown.days, 'ساعة': countdown.hours, 'دقيقة': countdown.minutes, 'ثانية': countdown.seconds }">

                        <div class="glass w-24 h-28 rounded-3xl flex flex-col items-center justify-center">

                            <div class="text-4xl font-black text-[#5f716a]" x-text="String(val).padStart(2,'0')">
                            </div>

                            <div class="text-sm text-[#8fa89e]" x-text="label"></div>

                        </div>

                    </template>

                </div>

            </div>

        </section>

        <!-- DETAILS -->
        <section class="max-w-5xl mx-auto px-6 py-16">

            <div class="glass rounded-[40px] p-10">

                <div class="grid md:grid-cols-2 gap-10">

                    <div class="text-center">

                        <div class="text-5xl mb-5">🕊️</div>

                        <h3 class="text-3xl  text-[#5f716a] mb-3">
                            موعد الحفل
                        </h3>

                        <p class="text-xl text-[#2f3a36]">
                            الجمعة - 15 مايو
                        </p>

                        <p class="text-[#8fa89e] mt-2">
                            الساعة 7:00 مساءً
                        </p>

                    </div>

                    <div class="text-center">

                        <div class="text-5xl mb-5">📍</div>

                        <h3 class="text-3xl  text-[#5f716a] mb-3">
                            موقع الحفل
                        </h3>

                        <p class="text-xl text-[#2f3a36]">
                            القاهرة، مصر
                        </p>

                        <a href="https://www.google.com/maps?q=30.1488294,31.3667045&z=17&hl=en" target="_blank"
                            class="inline-block mt-5 text-[#5f716a] underline">

                            عرض الموقع

                        </a>

                    </div>

                </div>

            </div>

        </section>

        <!-- رسالة -->
        <section class="max-w-2xl mx-auto px-6 py-10">

            <div class="glass rounded-[40px] p-8">

                <h2 class="text-4xl  text-center text-gradient mb-8">
                    اترك لنا رسالة 🤍
                </h2>

                <form class="space-y-5">

                    <input type="text" placeholder="اسمك الكريم"
                        class="w-full rounded-2xl border border-[#8fa89e]/20 bg-white/60 px-5 py-4 outline-none">

                    <textarea placeholder="رسالتك الجميلة..."
                        class="w-full h-40 rounded-2xl border border-[#8fa89e]/20 bg-white/60 px-5 py-4 outline-none"></textarea>

                    <button type="submit"
                        class="btn-primary w-full py-4 rounded-2xl text-white text-lg transition-all">

                        إرسال الرسالة ✨

                    </button>

                </form>

            </div>

        </section>

        <!-- لعبة الذاكرة -->
        <section class="max-w-3xl mx-auto px-6 py-20">

            <div class="glass rounded-[40px] p-8">

                <div class="text-center mb-10">

                    <h2 class="text-5xl  text-gradient mb-4">
                        النص التاني فين؟
                    </h2>

                    <p class="text-[#5f716a]">
                        كل حاجة وليها اللي يشبها او يكملها.. ورّينا شطارتك💍
                    </p>

                </div>

                <div class="grid grid-cols-4 gap-4">

                    <template x-for="(card,index) in cards">

                        <div @click="flipCard(index)" class="h-24 cursor-pointer perspective">

                            <div class="relative w-full h-full transition-all duration-500 memory-card"
                                :class="card.flipped || card.cleared ? '[transform:rotateY(180deg)]' : ''">

                                <!-- الخلف -->
                                <div
                                    class="absolute inset-0 rounded-2xl glass flex items-center justify-center backface-hidden">

                                    <span class="text-3xl">🤍</span>

                                </div>

                                <!-- الأمام -->
                                <div
                                    class="absolute inset-0 rounded-2xl bg-white flex items-center justify-center [transform:rotateY(180deg)] backface-hidden shadow-xl">

                                    <span class="text-3xl" x-text="card.value"></span>

                                </div>

                            </div>

                        </div>

                    </template>

                </div>

                <!-- الفوز -->
                <div x-show="cards.length && cards.every(c=>c.cleared)" class="mt-10 text-center">

                    <div class="glass rounded-[35px] p-8 border border-[#8fa89e]/20">

                        <div class="text-6xl mb-4">✨</div>

                        <h3 class="text-5xl  text-gradient mb-4">
                            رائع!
                        </h3>

                        <p class="text-[#5f716a] mb-6">
                            انهيت اللعبة بنجاح 🤍
                        </p>

                        <button class="btn-primary px-8 py-4 rounded-full text-white">

                            شارك النتيجة 💌

                        </button>

                    </div>

                </div>

            </div>

        </section>

        <!-- MAP -->
        <section class="max-w-5xl mx-auto px-6 pb-20">

            <div class="rounded-[40px] overflow-hidden shadow-2xl">

                <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen
                    src="https://maps.google.com/maps?q=30.1488294,31.3667045&z=17&output=embed">
                </iframe>

            </div>

        </section>

        <!-- FOOTER -->
        <footer class="text-center px-6 pb-20">

            <h2 class="text-6xl font-parisienne text-gradient mb-4">
                Kamal & Noura
            </h2>

            <p class="text-[#8fa89e] text-lg">
                بانتظاركم بكل الحب 🤍
            </p>

        </footer>

        <!-- زر الموسيقى -->
        <button @click="toggleMusic()"
            class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full glass flex items-center justify-center text-2xl">

            🎵

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

                pairs: [
                    '🤍',
                    '💍',
                    '✨',
                    '🌙',
                    '🌿',
                    '🕊️'
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

                openInvitation() {

                    this.opened = true;
                    this.contentVisible = true;

                    document.getElementById('openSfx')?.play();

                    confetti({
                        particleCount: 200,
                        spread: 100,
                        origin: {
                            y: .6
                        },
                        colors: ['#8fa89e', '#d6c2a1', '#ffffff']
                    });

                    this.toggleMusic(true);

                },

                toggleMusic(force = false) {

                    const audio = document.getElementById('bgMusic');

                    if (force || audio.paused) {
                        audio.play();
                        this.musicPlaying = true;
                    } else {
                        audio.pause();
                        this.musicPlaying = false;
                    }

                },

                startCountdown() {

                    const weddingDate = new Date(
                        '2026-05-15T19:00:00'
                    ).getTime();

                    setInterval(() => {

                        const now = new Date().getTime();
                        const dist = weddingDate - now;

                        this.countdown.days = Math.floor(dist / (1000 *
                            60 * 60 * 24));

                        this.countdown.hours = Math.floor((dist % (
                            1000 * 60 * 60 * 24)) / (1000 * 60 *
                            60));

                        this.countdown.minutes = Math.floor((dist % (
                            1000 * 60 * 60)) / (1000 * 60));

                        this.countdown.seconds = Math.floor((dist % (
                            1000 * 60)) / 1000);

                    }, 1000);

                },

                resetGame() {

                    let duplicated = [...this.pairs, ...this.pairs];

                    this.cards = duplicated
                        .sort(() => Math.random() - 0.5)
                        .map((item, index) => ({
                            id: index,
                            value: item,
                            flipped: false,
                            cleared: false
                        }));

                },

                flipCard(index) {

                    const card = this.cards[index];

                    if (!card || card.flipped || card.cleared || this
                        .flippedCards.length === 2)
                        return;

                    card.flipped = true;

                    this.flippedCards.push(index);

                    if (this.flippedCards.length === 2) {

                        setTimeout(() => {

                            const [a, b] = this.flippedCards;

                            if (this.cards[a].value === this.cards[
                                    b].value) {

                                this.cards[a].cleared = true;
                                this.cards[b].cleared = true;

                                if (this.cards.every(c => c
                                        .cleared)) {

                                    confetti({
                                        particleCount: 300,
                                        spread: 120
                                    });

                                }

                            } else {

                                this.cards[a].flipped = false;
                                this.cards[b].flipped = false;

                            }

                            this.flippedCards = [];

                        }, 700);

                    }

                },

                createPetals() {

                    for (let i = 0; i < 20; i++) {

                        const petal = document.createElement('div');

                        petal.className = 'petal';

                        petal.style.left = Math.random() * 100 + 'vw';

                        petal.style.width =
                            petal.style.height =
                            (Math.random() * 14 + 8) + 'px';

                        petal.style.animationDuration =
                            (Math.random() * 8 + 6) + 's';

                        petal.style.animationDelay =
                            Math.random() * 5 + 's';

                        document.body.appendChild(petal);

                    }

                }

            }
        }
    </script>

</body>

</html>

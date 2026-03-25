<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>منيو أكلات عمو حسن | طعم بيتي أصيل</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#9B2C2C',
                        secondary: '#D4AF37',
                        cream: '#FDF8F0',
                        dark: '#1a1a1a',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Cairo', system-ui, -apple-system, sans-serif;
            background-color: #FDF8F0;
            background-image:
                radial-gradient(circle at 25px 25px, #f5e8d9 2px, transparent 0),
                radial-gradient(circle at 75px 75px, #f5e8d9 2px, transparent 0);
            background-size: 150px 150px;
        }

        .category-title {
            position: relative;
            display: inline-block;
        }

        .category-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 65%;
            height: 5px;
            background: linear-gradient(to left, #D4AF37, transparent);
            border-radius: 5px;
        }

        .item-card {
            transition: all 0.28s ease;
            border: 1px solid #eee;
        }

        .item-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px -8px rgba(155, 44, 44, 0.18);
            border-color: #D4AF37;
        }

        /* .popular::before {
            content: "الأكثر طلباً";
            position: absolute;
            top: -12px;
            right: 16px;
            background: #D4AF37;
            color: #1a1a1a;
            font-size: 0.75rem;
            font-weight: bold;
            padding: 3px 12px;
            border-radius: 999px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        } */

        .price {
            font-weight: 900;
            color: #9B2C2C;
        }
    </style>
</head>

<body class="text-gray-800 min-h-screen pb-28">

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/201102576699?text=مرحباً%20عمو%20حسن%20،%20أريد%20أطلب%20من%20المنيو" target="_blank"
        class="fixed bottom-6 left-6 z-50 bg-green-600 text-white p-5 rounded-full shadow-2xl hover:bg-green-700 transition transform hover:scale-110 active:scale-95">
        <i class="fab fa-whatsapp text-4xl"></i>
    </a>

    <!-- Header -->
    <header
        class="relative bg-primary text-white   pt-12 pb-24 rounded-b-[3rem] shadow-2xl overflow-hidden border-b-4 border-secondary">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/food.png')]">
        </div>
        <div class="container mx-auto px-5 text-center relative z-10">
            <img src="https://drive.google.com/thumbnail?id=1FlGCSaFVOFjULWNZ-N61QZplLg0KLoGa&sz=w800"
                alt="أكلات عمو حسن" class="w-48 md:w-48 mx-auto mb-4 drop-shadow-2xl" />
            <h1 class="text-5xl md:text-6xl font-black mb-3 tracking-wide">أكلات عمو حسن</h1>
            <p class="text-2xl md:text-3xl font-semibold text-secondary mb-8">طعم بيتي يفرّق من أول لقمة</p>

            <div
                class="inline-flex flex-wrap justify-center gap-5 text-base bg-black/30 backdrop-blur-sm py-4 px-8 rounded-full border border-secondary/50">
                <span><i class="fas fa-home text-secondary ml-2"></i>أكل بيتي مضمون</span>
                <span><i class="fas fa-shield-heart text-secondary ml-2"></i>نظافة عالية</span>
                <span><i class="fas fa-heart text-secondary ml-2"></i>حب وإتقان</span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-5 -mt-24 relative z-20">

        <!-- Chicken Products -->
        <section class="my-20">
            <h2 class="category-title text-4xl md:text-5xl font-bold text-primary mb-10 text-center">
                <i class="fas fa-drumstick-bite text-secondary ml-4 text-4xl mt-8"></i>
                منتجات الفراخ
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

                <div class="item-card relative  bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800 popular">فرخة تكا</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو فاهيتا فراخ</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو دبابيس متبلة</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">130 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">فرخة متبلة للشوي</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو شاورما فراخ</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو أوراك مخلية متبلة</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">فرخة مخلية للشوي</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو بانيه متبل</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو ستربس</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">شيش طاووق على السيخ</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو كفتة فراخ</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو مسحب</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو شيش طاووق</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>

                <div class="item-card bg-white rounded-2xl p-6 shadow-lg">
                    <h3 class="font-bold text-xl text-gray-800">كيلو برجر فراخ</h3>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="price text-2xl">210 ج</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-14">

            <!-- Meat Products -->
            <section>
                <h2 class="category-title text-4xl font-bold text-primary mb-8 text-center">
                    <i class="fas fa-hamburger text-secondary ml-4 text-4xl"></i>
                    منتجات اللحوم
                </h2>
                <div class="space-y-5">
                    <div class="item-card bg-white rounded-2xl p-6 shadow-lg flex justify-between items-center">
                        <h3 class="font-bold text-xl text-gray-800">كيلو كفتة حاتي</h3>
                        <span class="price text-2xl">350 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-6 shadow-lg flex justify-between items-center">
                        <h3 class="font-bold text-xl text-gray-800">كيلو برجر لحم</h3>
                        <span class="price text-2xl">350 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-6 shadow-lg flex justify-between items-center">
                        <h3 class="font-bold text-xl text-gray-800">كيلو شاورما لحم</h3>
                        <span class="price text-2xl">400 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-6 shadow-lg flex justify-between items-center">
                        <h3 class="font-bold text-xl text-gray-800">كيلو كفتة أرز (جملي)</h3>
                        <span class="price text-2xl">300 ج</span>
                    </div>
                </div>
            </section>

            <!-- Mahshi & Appetizers -->
            <section>
                <h2 class="category-title text-4xl font-bold text-green-800 mb-8 text-center">
                    <i class="fas fa-leaf text-secondary ml-4 text-4xl"></i>
                    المحاشي والمقبلات
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-5">
                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو ورق عنب</h3>
                        <span class="price text-xl mt-3 block">130 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو كرنب</h3>
                        <span class="price text-xl mt-3 block">100 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو باذنجان</h3>
                        <span class="price text-xl mt-3 block">100 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو كوسة</h3>
                        <span class="price text-xl mt-3 block">100 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو فلفل</h3>
                        <span class="price text-xl mt-3 block">100 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو كوسة باللحمة</h3>
                        <span class="price text-xl mt-3 block">200 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو بطاطس باللحمة</h3>
                        <span class="price text-xl mt-3 block">200 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو سمبوسة جبنة</h3>
                        <span class="price text-xl mt-3 block">150 ج</span>
                    </div>

                    <div class="item-card bg-white rounded-2xl p-5 shadow-lg text-center">
                        <h3 class="font-bold text-lg text-gray-800">كيلو سمبوسة لحمة</h3>
                        <span class="price text-xl mt-3 block">250 ج</span>
                    </div>
                </div>
            </section>
        </div>

    </main>

    <!-- Footer -->
    <footer class="mt-16 bg-dark text-white py-14 border-t-8 border-secondary">
        <div class="container mx-auto px-5 text-center">
            <h3 class="text-4xl font-bold mb-8 text-secondary">يلا نطلب مع بعض!</h3>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-8 mb-10">
                <a href="https://wa.me/201102576699" target="_blank"
                    class="flex items-center bg-green-600 hover:bg-green-700 text-white px-10 py-5 rounded-full text-2xl font-bold shadow-xl transform hover:scale-105 transition">
                    <i class="fab fa-whatsapp text-4xl ml-4"></i>
                    01102576699
                </a>

                <a href="https://facebook.com/3moHassanFoods" target="_blank"
                    class="flex items-center bg-blue-700 hover:bg-blue-800 text-white px-10 py-5 rounded-full text-2xl font-bold shadow-xl transform hover:scale-105 transition">
                    <i class="fab fa-facebook text-4xl ml-4"></i>
                    3moHassanFoods
                </a>
            </div>

            <p class="text-gray-400 text-lg">© أكلات عمو حسن – 2026 – كل طبق معمول بحب واهتمام</p>
        </div>
    </footer>

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Landing</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">


    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>


    {{-- Mouse Trail effect --}}
    <style>
        .cursor-dot {
            position: fixed;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            background: #6366f1;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: background 0.3s ease;
            will-change: transform;
        }
    </style>






</head>

<body class="bg-white text-gray-900 dark:bg-gray-900 dark:text-white">

    {{-- Menu header --}}
    <!-- Header Navigation -->
    <header x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 })"
        :class="{ 'bg-white/90 shadow-lg dark:bg-gray-900/90': scrolled }"
        class="fixed top-0 w-full z-50 transition-all duration-300 bg-opacity-90">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-indigo-700 dark:text-yellow-400">BrandName</a>
            <nav class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="#features" class="hover:text-indigo-600">বৈশিষ্ট্য</a>
                <a href="#services" class="hover:text-indigo-600">সার্ভিস</a>
                <a href="#pricing" class="hover:text-indigo-600">প্রাইসিং</a>
                <a href="#faq" class="hover:text-indigo-600">FAQ</a>
                <a href="#contact" class="hover:text-indigo-600">যোগাযোগ</a>
            </nav>
            <a href="#order-now"
                class="hidden md:block px-4 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 text-sm font-semibold transition">
                অর্ডার করুন
            </a>
        </div>
    </header>



    <!-- Hero Section -->
    <section
        class="min-h-screen bg-gradient-to-br from-blue-700 via-indigo-800 to-purple-700 text-white flex flex-col justify-center items-center text-center px-6 sm:px-12 lg:px-24 relative overflow-hidden"
        data-aos="zoom-in">
        <div class="z-10 max-w-3xl">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight mb-6">Your Powerful
                Tagline <br><span class="text-yellow-300">That Captures Attention</span></h1>
            <p class="text-lg sm:text-xl mb-8">Sub-headline that supports the main message with clarity and impact.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#pricing"
                    class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold px-8 py-3 rounded-full transition shadow-lg">Get
                    Started</a>
                <a href="#features"
                    class="border border-white text-white hover:bg-white hover:text-indigo-700 font-semibold px-8 py-3 rounded-full transition">Learn
                    More</a>
            </div>
        </div>

        <!-- Hero Illustration -->
        <div class="absolute bottom-0 right-0 w-64 sm:w-80 md:w-96 opacity-60" data-aos="fade-left">
            <img src="https://via.placeholder.com/400x400" alt="Hero Image">
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
            <a href="#trusted" class="text-white text-3xl">&#x25BC;</a>
        </div>
    </section>

    <!-- Trusted Logos -->
    <section id="trusted" class="py-16 bg-white dark:bg-gray-900" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-8 uppercase tracking-wider">Trusted By
            </h2>
            <div class="flex flex-wrap justify-center items-center gap-8">
                @foreach (range(1, 6) as $i)
                    <img src="https://via.placeholder.com/120x60?text=Logo+{{ $i }}"
                        class="grayscale hover:grayscale-0 transition duration-300 h-10 sm:h-12"
                        alt="Logo {{ $i }}">
                @endforeach
            </div>
        </div>
    </section>



    <!-- Features Section -->
    <section id="features"
        class="py-24 bg-gradient-to-br from-blue-50 via-white to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-gray-800 dark:text-gray-100"
        data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center text-indigo-700 dark:text-yellow-400 mb-4">আমাদের বিশেষ
                সুবিধাসমূহ</h2>
            <p class="text-center text-lg text-gray-600 dark:text-gray-300 mb-16 max-w-2xl mx-auto">বাংলাদেশি ইউজারদের
                জন্য তৈরি — দ্রুত, নির্ভরযোগ্য, এবং শতভাগ সন্তুষ্টির গ্যারান্টি সহ।</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature Card 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 p-8"
                    data-aos="zoom-in-up">
                    <div
                        class="flex justify-center items-center w-16 h-16 rounded-full bg-indigo-100 dark:bg-indigo-700 mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600 dark:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h2l1 2h13l1-2h2m-2 0a9 9 0 01-18 0" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-2">দ্রুততম ডেলিভারি</h3>
                    <p class="text-sm text-center text-gray-600 dark:text-gray-300">সারা দেশে ২৪ ঘণ্টার মধ্যে নিশ্চিত
                        ডেলিভারি। ট্র্যাকিং সহ আপডেট।</p>
                </div>

                <!-- Feature Card 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 p-8"
                    data-aos="zoom-in-up" data-aos-delay="150">
                    <div
                        class="flex justify-center items-center w-16 h-16 rounded-full bg-indigo-100 dark:bg-indigo-700 mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600 dark:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-2">১০০% অরিজিনাল পণ্য</h3>
                    <p class="text-sm text-center text-gray-600 dark:text-gray-300">ব্র্যান্ড ভেরিফায়েড প্রোডাক্টস –
                        গ্যারান্টি সহ অরিজিনাল পণ্য।</p>
                </div>

                <!-- Feature Card 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 p-8"
                    data-aos="zoom-in-up" data-aos-delay="300">
                    <div
                        class="flex justify-center items-center w-16 h-16 rounded-full bg-indigo-100 dark:bg-indigo-700 mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600 dark:text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-2">২৪/৭ কাস্টমার সাপোর্ট</h3>
                    <p class="text-sm text-center text-gray-600 dark:text-gray-300">দিন রাত যেকোনো সময় সহায়তা – লাইভ
                        চ্যাট ও ফোন সাপোর্ট।</p>
                </div>
            </div>
        </div>
    </section>




    <!-- Testimonials Section -->
    <section id="testimonials"
        class="py-24 bg-gradient-to-b from-blue-100 via-white to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-gray-800 dark:text-white"
        data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center text-indigo-700 dark:text-yellow-400 mb-6">ক্লায়েন্টদের
                রিভিউ</h2>
            <p class="text-center text-lg text-gray-600 dark:text-gray-300 mb-16 max-w-2xl mx-auto">
                আমাদের নিয়ে যা বলছেন সন্তুষ্ট গ্রাহকেরা — আপনার মতো আরও অনেকেই!
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach ([1, 2, 3] as $i)
                    <div class="bg-white/70 dark:bg-gray-800/80 backdrop-blur-xl border border-gray-100 dark:border-gray-700 rounded-3xl p-8 shadow-2xl hover:shadow-xl transition hover:scale-[1.02] hover:shadow-yellow-200 dark:hover:shadow-yellow-400/20 text-center"
                        data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <!-- Image -->
                        <div class="flex justify-center mb-5">
                            <img src="https://via.placeholder.com/80" alt="User {{ $i }}"
                                class="w-20 h-20 rounded-full border-4 border-indigo-500 shadow-md hover:ring-4 hover:ring-indigo-300 transition">
                        </div>
                        <!-- Quote -->
                        <p class="italic text-sm text-gray-700 dark:text-gray-300 mb-5">
                            "{{ ['সত্যিই অসাধারণ সার্ভিস!', 'অরিজিনাল প্রোডাক্ট এবং টপ ক্লাস সাপোর্ট।', 'আমি রেগুলার কাস্টমার। এবারও দারুণ অভিজ্ঞতা!'][$i - 1] }}"
                        </p>
                        <!-- Stars -->
                        <div class="flex justify-center mb-3">
                            @for ($j = 0; $j < 5; $j++)
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <polygon
                                        points="9.9,1.1 7.4,6.6 1.4,7.3 6.2,11.4 4.9,17.4 9.9,14.3 14.9,17.4 13.6,11.4 18.4,7.3 12.4,6.6" />
                                </svg>
                            @endfor
                        </div>
                        <!-- Name -->
                        <h3 class="text-lg font-semibold text-indigo-700 dark:text-yellow-400">গ্রাহক
                            {{ $i }}</h3>
                        <p class="text-xs text-gray-500">বাংলাদেশ</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




    <!-- How It Works Section -->
    <section id="how-it-works" class="py-24 bg-white dark:bg-gray-900 text-gray-800 dark:text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center text-indigo-700 dark:text-yellow-400 mb-6"
                data-aos="fade-down">
                কীভাবে অর্ডার করবেন?
            </h2>
            <p class="text-center text-lg text-gray-600 dark:text-gray-300 mb-16 max-w-2xl mx-auto"
                data-aos="fade-up">
                মাত্র ৩টি সহজ ধাপে আপনার প্রোডাক্ট অথবা সার্ভিস বুক করুন।
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Step 1 -->
                <div class="bg-blue-50 dark:bg-gray-800 rounded-3xl p-8 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1"
                    data-aos="zoom-in-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 flex items-center justify-center mx-auto mb-6 rounded-full bg-indigo-100 dark:bg-indigo-700">
                        <svg class="w-8 h-8 text-indigo-600 dark:text-white" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">ধাপ ১: পণ্য/সার্ভিস নির্বাচন</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">আমাদের প্রোডাক্ট পেজ থেকে আপনার পছন্দের
                        প্রোডাক্ট/প্যাকেজ বেছে নিন।</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-blue-50 dark:bg-gray-800 rounded-3xl p-8 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1"
                    data-aos="zoom-in-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 flex items-center justify-center mx-auto mb-6 rounded-full bg-indigo-100 dark:bg-indigo-700">
                        <svg class="w-8 h-8 text-indigo-600 dark:text-white" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 10h2l1 2h13l1-2h2m-2 0a9 9 0 01-18 0" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">ধাপ ২: অর্ডার কনফার্ম</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">একটি কাস্টমার ফর্ম পূরণ করুন এবং অর্ডার নিশ্চিত
                        করুন।</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-blue-50 dark:bg-gray-800 rounded-3xl p-8 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1"
                    data-aos="zoom-in-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 flex items-center justify-center mx-auto mb-6 rounded-full bg-indigo-100 dark:bg-indigo-700">
                        <svg class="w-8 h-8 text-indigo-600 dark:text-white" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-6 4h6" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">ধাপ ৩: হোম ডেলিভারি</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">পণ্য আপনার ঠিকানায় পৌঁছে যাবে ২৪–৪৮ ঘণ্টার
                        মধ্যে।</p>
                </div>
            </div>
        </div>
    </section>




    <!-- CTA Section -->
    <section id="cta"
        class="py-24 bg-gradient-to-br from-indigo-600 to-blue-600 text-white relative overflow-hidden"
        data-aos="fade-up">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')]">
        </div>

        <div class="relative max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold mb-4 leading-tight">এখনই আপনার অর্ডার কনফার্ম করুন</h2>
            <p class="text-lg text-indigo-100 mb-8 max-w-2xl mx-auto">
                দেরি না করে আজই শুরু করুন – আমাদের টিম প্রস্তুত আপনাকে সেবা দিতে।
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#order-now"
                    class="bg-yellow-400 hover:bg-yellow-500 text-indigo-800 font-bold px-8 py-3 rounded-full transition shadow-lg">
                    এখনই অর্ডার করুন
                </a>
                <a href="#contact"
                    class="border border-white hover:bg-white hover:text-indigo-700 font-semibold px-8 py-3 rounded-full transition">
                    আমাদের সাথে যোগাযোগ
                </a>
            </div>
        </div>
    </section>




    <!-- Services Section -->
    <section id="services" class="py-24 bg-white dark:bg-gray-900 text-gray-800 dark:text-white" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400 mb-6">আমাদের সার্ভিসসমূহ</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-16 max-w-2xl mx-auto">
                আপনার ব্যবসার জন্য আমরা নিয়ে এসেছি উন্নতমানের ডিজিটাল সার্ভিস — একদম আপনার চাহিদামতো।
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- Service 1 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow hover:shadow-lg transition"
                    data-aos="zoom-in-up" data-aos-delay="100">
                    <div class="mb-4">
                        <img src="https://via.placeholder.com/60?text=🌐" alt="Service 1" class="mx-auto">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">ওয়েবসাইট ডিজাইন</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">ব্যবসার জন্য আধুনিক, দ্রুতগতির ও মোবাইল
                        রেসপন্সিভ ডিজাইন।</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow hover:shadow-lg transition"
                    data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="mb-4">
                        <img src="https://via.placeholder.com/60?text=🚀" alt="Service 2" class="mx-auto">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">SEO অপ্টিমাইজেশন</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">আপনার ওয়েবসাইট Google-এ র‍্যাংক করাতে সম্পূর্ণ
                        SEO সমাধান।</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow hover:shadow-lg transition"
                    data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="mb-4">
                        <img src="https://via.placeholder.com/60?text=🛒" alt="Service 3" class="mx-auto">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">ই-কমার্স ডেভেলপমেন্ট</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">সম্পূর্ণ ফিচারসহ অনলাইন শপ তৈরি — অর্ডার,
                        পেমেন্ট, স্টক ম্যানেজমেন্ট।</p>
                </div>

                <!-- Service 4 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow hover:shadow-lg transition"
                    data-aos="zoom-in-up" data-aos-delay="400">
                    <div class="mb-4">
                        <img src="https://via.placeholder.com/60?text=🔒" alt="Service 4" class="mx-auto">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">ওয়েব সিকিউরিটি</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">ম্যালওয়্যার রিমুভাল, ফায়ারওয়াল, ব্যাকআপ সিস্টেম
                        সহ ওয়েব নিরাপত্তা।</p>
                </div>

                <!-- Service 5 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow hover:shadow-lg transition"
                    data-aos="zoom-in-up" data-aos-delay="500">
                    <div class="mb-4">
                        <img src="https://via.placeholder.com/60?text=📱" alt="Service 5" class="mx-auto">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">সোশ্যাল মিডিয়া মার্কেটিং</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Facebook Boost, Branding এবং Messenger
                        Automation সার্ভিস।</p>
                </div>

                <!-- Service 6 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow hover:shadow-lg transition"
                    data-aos="zoom-in-up" data-aos-delay="600">
                    <div class="mb-4">
                        <img src="https://via.placeholder.com/60?text=💡" alt="Service 6" class="mx-auto">
                    </div>
                    <h3 class="text-xl font-semibold mb-2">কাস্টম সফটওয়্যার ডেভেলপমেন্ট</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">স্কুল, কোম্পানি বা দোকানের জন্য ERP/Inventory
                        টাইপ কাস্টম সফটওয়্যার।</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing Section -->
    <section id="pricing" class="py-24 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-white"
        data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400 mb-4">প্ল্যান ও প্রাইসিং</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-16 max-w-2xl mx-auto">আপনার প্রয়োজন অনুযায়ী বেছে নিন
                উপযুক্ত প্যাকেজ।</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Plan 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow hover:shadow-lg transition transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-4">Starter</h3>
                    <p class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400 mb-2">৳999</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">সাধারণ ওয়েবসাইট / ল্যান্ডিং পেজ</p>
                    <ul class="space-y-2 text-sm text-left mb-6">
                        <li>✅ ১টি পেজ ডিজাইন</li>
                        <li>✅ মোবাইল রেসপন্সিভ</li>
                        <li>✅ ৭ দিন সাপোর্ট</li>
                    </ul>
                    <a href="#order-now"
                        class="block bg-indigo-600 text-white py-2 rounded-full font-semibold hover:bg-indigo-700 transition">অর্ডার
                        করুন</a>
                </div>

                <!-- Plan 2 (Popular) -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-2xl border-4 border-indigo-600 dark:border-yellow-400 transform scale-105"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="bg-yellow-400 text-indigo-800 text-xs uppercase font-bold px-3 py-1 rounded-full inline-block mb-4">
                        Most Popular</div>
                    <h3 class="text-xl font-bold mb-4">Standard</h3>
                    <p class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400 mb-2">৳1999</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">ব্যবসার জন্য উপযুক্ত</p>
                    <ul class="space-y-2 text-sm text-left mb-6">
                        <li>✅ ৩টি পেজ ডিজাইন</li>
                        <li>✅ SEO Optimized</li>
                        <li>✅ ১৫ দিন সাপোর্ট</li>
                    </ul>
                    <a href="#order-now"
                        class="block bg-yellow-400 text-indigo-800 py-2 rounded-full font-semibold hover:bg-yellow-500 transition">অর্ডার
                        করুন</a>
                </div>

                <!-- Plan 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow hover:shadow-lg transition transform hover:-translate-y-1"
                    data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-bold mb-4">Premium</h3>
                    <p class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400 mb-2">৳4999</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">পুরো বিজনেস সাইট বা ই-কমার্স</p>
                    <ul class="space-y-2 text-sm text-left mb-6">
                        <li>✅ ৭+ পেজ</li>
                        <li>✅ Advanced SEO</li>
                        <li>✅ ৩০ দিন সাপোর্ট</li>
                    </ul>
                    <a href="#order-now"
                        class="block bg-indigo-600 text-white py-2 rounded-full font-semibold hover:bg-indigo-700 transition">অর্ডার
                        করুন</a>
                </div>
            </div>
        </div>
    </section>


    <!-- About Us Section -->
    <section id="about" class="py-24 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-white">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Image Side -->
            <div data-aos="fade-right">
                <img src="https://via.placeholder.com/500x350?text=Our+Team" alt="About Us"
                    class="rounded-2xl shadow-lg w-full">
            </div>

            <!-- Text Side -->
            <div data-aos="fade-left">
                <h2 class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400 mb-4">আমাদের সম্পর্কে</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    আমরা একটি অভিজ্ঞ ও প্রফেশনাল টিম, যারা বিশ্বাস করি ডিজিটাল সার্ভিসকে সহজ, সাশ্রয়ী ও কার্যকর করা উচিত
                    বাংলাদেশের প্রতিটি ব্যবসার জন্য।
                </p>
                <ul class="space-y-3 text-sm text-left text-gray-700 dark:text-gray-300">
                    <li>✅ ৫+ বছরের অভিজ্ঞতা</li>
                    <li>✅ ২০০+ সফল প্রজেক্ট ডেলিভারি</li>
                    <li>✅ ২৪/৭ কাস্টমার সাপোর্ট</li>
                    <li>✅ কাস্টমাইজড সল্যুশন প্রতিটি ক্লায়েন্টের জন্য</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Newsletter Section -->
    <section id="newsletter"
        class="py-24 bg-gradient-to-br from-indigo-50 via-white to-blue-100 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 text-gray-800 dark:text-white"
        data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold mb-4 text-indigo-700 dark:text-yellow-400">নতুন আপডেট পেতে
                সাবস্ক্রাইব করুন</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-10 max-w-2xl mx-auto">প্রথমে জানুন আমাদের অফার,
                প্রমোশন এবং নতুন ফিচার সম্পর্কে।</p>

            <form action="#subscribe" method="POST"
                class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-xl mx-auto">
                <input type="email" name="email" required
                    class="w-full sm:w-auto flex-1 px-6 py-3 rounded-full text-sm text-gray-800 dark:text-white bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    placeholder="আপনার ইমেইল লিখুন...">
                <button type="submit"
                    class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-full font-semibold transition">
                    সাবস্ক্রাইব করুন
                </button>
            </form>
        </div>
    </section>


    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-white dark:bg-gray-900 text-gray-800 dark:text-white" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center text-indigo-700 dark:text-yellow-400 mb-6">প্রশ্নোত্তর</h2>
            <p class="text-center text-lg text-gray-600 dark:text-gray-300 mb-12">
                আপনার সাধারণ কিছু প্রশ্ন ও তাদের উত্তর নিচে দেওয়া হলো।
            </p>

            <div class="space-y-4" x-data="{ selected: null }">
                <!-- Question 1 -->
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 transition"
                        @click="selected !== 1 ? selected = 1 : selected = null">
                        কত দিনে অর্ডার ডেলিভারি পাবো?
                    </button>
                    <div x-show="selected === 1"
                        class="px-6 py-4 text-sm bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300">
                        অর্ডার কনফার্ম করার পর সাধারণত ২৪–৪৮ ঘণ্টার মধ্যে ডেলিভারি হয়ে যায়।
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 transition"
                        @click="selected !== 2 ? selected = 2 : selected = null">
                        সার্ভিস নেওয়ার পরে কতদিন সাপোর্ট পাবো?
                    </button>
                    <div x-show="selected === 2"
                        class="px-6 py-4 text-sm bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300">
                        প্যাকেজ অনুযায়ী আপনি ৭, ১৫ অথবা ৩০ দিনের ফ্রি সাপোর্ট পাবেন।
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 transition"
                        @click="selected !== 3 ? selected = 3 : selected = null">
                        পেমেন্ট পদ্ধতি কী কী?
                    </button>
                    <div x-show="selected === 3"
                        class="px-6 py-4 text-sm bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300">
                        আমরা বিকাশ, নগদ, রকেট ও ব্যাংক ট্রান্সফার সাপোর্ট করি।
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
                    <button
                        class="w-full text-left px-6 py-4 font-semibold bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 transition"
                        @click="selected !== 4 ? selected = 4 : selected = null">
                        ওয়েবসাইট কি মোবাইল ফ্রেন্ডলি হবে?
                    </button>
                    <div x-show="selected === 4"
                        class="px-6 py-4 text-sm bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300">
                        হ্যাঁ, আমাদের সব ডিজাইনই ১০০% মোবাইল রেসপন্সিভ।
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer Section -->
    <footer
        class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-300 border-t border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Brand Info -->
            <div>
                <h3 class="text-xl font-bold text-indigo-700 dark:text-yellow-400 mb-2">📦 BrandName</h3>
                <p class="text-sm">আমরা ডিজিটাল সল্যুশন দিয়ে থাকি — দ্রুত, নির্ভরযোগ্য এবং আপনার প্রয়োজন অনুযায়ী
                    কাস্টমাইজড।</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-semibold text-gray-800 dark:text-white mb-2">দ্রুত লিংক</h4>
                <ul class="space-y-1 text-sm">
                    <li><a href="#features" class="hover:text-indigo-600 transition">ফিচার</a></li>
                    <li><a href="#pricing" class="hover:text-indigo-600 transition">প্রাইসিং</a></li>
                    <li><a href="#services" class="hover:text-indigo-600 transition">সার্ভিস</a></li>
                    <li><a href="#faq" class="hover:text-indigo-600 transition">FAQ</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-semibold text-gray-800 dark:text-white mb-2">যোগাযোগ</h4>
                <ul class="text-sm space-y-1">
                    <li>📞 <a href="tel:+8801234567890" class="hover:text-indigo-600 transition">+880 1234-567890</a>
                    </li>
                    <li>✉️ <a href="mailto:info@example.com"
                            class="hover:text-indigo-600 transition">info@example.com</a></li>
                    <li>📍 ঢাকা, বাংলাদেশ</li>
                </ul>
            </div>

            <!-- Social Links -->
            <div>
                <h4 class="font-semibold text-gray-800 dark:text-white mb-2">ফলো করুন</h4>
                <div class="flex space-x-4 mt-2">
                    <a href="#" class="hover:text-indigo-600 transition" title="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.522..." />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-indigo-600 transition" title="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 19c8.837 0..." />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-indigo-600 transition" title="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.2c3.1..." />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-200 dark:border-gray-700 text-center py-4 text-sm">
            &copy; {{ date('Y') }} BrandName. সর্বস্বত্ব সংরক্ষিত।
        </div>
    </footer>

    <!-- Cursor Dot -->
    <div class="cursor-dot" id="cursorDot"></div>


    <!-- Add more sections here: Features, About, Video, Services, How It Works, Testimonials, Pricing, FAQ, Newsletter, CTA, Footer -->

    <!-- Scripts -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

    {{-- Alpine JS --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth < 768) {
                new Splide('#testimonial-slider', {
                    type: 'loop',
                    perPage: 1,
                    autoplay: true,
                    interval: 5000,
                    arrows: false,
                    pagination: true,
                }).mount();
            }
        });
    </script>


    {{-- Smooth Scroll --}}
    <script>
        const dot = document.getElementById('cursorDot');
        let mouseX = 0,
            mouseY = 0;
        let dotX = 0,
            dotY = 0;

        window.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        function animateCursor() {
            dotX += (mouseX - dotX) * 0.15;
            dotY += (mouseY - dotY) * 0.15;
            dot.style.transform = `translate3d(${dotX}px, ${dotY}px, 0)`;
            requestAnimationFrame(animateCursor);
        }


        let animationFrame;
        window.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            if (!animationFrame) {
                animationFrame = requestAnimationFrame(() => {
                    dotX += (mouseX - dotX) * 0.15;
                    dotY += (mouseY - dotY) * 0.15;
                    dot.style.transform = `translate3d(${dotX}px, ${dotY}px, 0)`;
                    animationFrame = null;
                });
            }
        });


        animateCursor();
    </script>

    AOS.init({
    duration: 800,
    once: true,
    easing: 'ease-out-cubic',
    mirror: false,
    throttleDelay: 99,
    });


</body>

</html>

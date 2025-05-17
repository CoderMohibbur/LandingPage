<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Landing</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

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
            will-change: transform;
        }

        html {
            scroll-behavior: smooth;
            will-change: scroll-position;
            overflow-x: hidden;
        }
    </style>

    {{-- hero section slide --}}
    <style>
        @keyframes leftToRight {
            0% {
                transform: translateX(-50px);
            }

            100% {
                transform: translateX(50px);
            }
        }

        @keyframes rightToLeft {
            0% {
                transform: translateX(50px);
            }

            100% {
                transform: translateX(-50px);
            }
        }

        .float-left-1 {
            animation: leftToRight 6s ease-in-out infinite alternate;
            top: 5%;
            left: 2%;
            width: 180px;
            position: absolute;
            z-index: 0;
        }

        .float-left-2 {
            animation: leftToRight 8s ease-in-out infinite alternate;
            top: 35%;
            left: 20%;
            width: 180px;
            position: absolute;
            z-index: 0;
        }

        .float-right-3 {
            animation: rightToLeft 7s ease-in-out infinite alternate;
            top: 10%;
            right: 2%;
            width: 180px;
            position: absolute;
            z-index: 0;
        }

        .scrolling-img {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 160px;
            z-index: 0;
            animation: scrollVertical 18s linear infinite;
        }
    </style>



</head>

<body class="bg-white text-gray-900 dark:bg-gray-900 dark:text-white">


    {{-- Menu header --}}
    <header x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
        :class="scrolled
            ?
            'bg-white dark:bg-gray-900 shadow-md text-gray-900 dark:text-white' :
            'bg-transparent text-white'"
        class="fixed top-0 w-full z-50 transition-all duration-300">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Brand -->
            <a href="#"
                :class="scrolled
                    ?
                    'text-indigo-700 dark:text-yellow-400' :
                    'text-white'"
                class="text-2xl font-bold transition duration-300">
                BrandName
            </a>

            <!-- Menu -->
            <nav class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="#features"
                    :class="scrolled
                        ?
                        'hover:text-indigo-600 dark:hover:text-yellow-400 text-gray-900 dark:text-white' :
                        'text-white hover:text-yellow-300'"
                    class="transition duration-300">বৈশিষ্ট্য</a>

                <a href="#services"
                    :class="scrolled
                        ?
                        'hover:text-indigo-600 dark:hover:text-yellow-400 text-gray-900 dark:text-white' :
                        'text-white hover:text-yellow-300'"
                    class="transition duration-300">সার্ভিস</a>

                <a href="#pricing"
                    :class="scrolled
                        ?
                        'hover:text-indigo-600 dark:hover:text-yellow-400 text-gray-900 dark:text-white' :
                        'text-white hover:text-yellow-300'"
                    class="transition duration-300">প্রাইসিং</a>

                <a href="#faq"
                    :class="scrolled
                        ?
                        'hover:text-indigo-600 dark:hover:text-yellow-400 text-gray-900 dark:text-white' :
                        'text-white hover:text-yellow-300'"
                    class="transition duration-300">FAQ</a>

                <a href="#contact"
                    :class="scrolled
                        ?
                        'hover:text-indigo-600 dark:hover:text-yellow-400 text-gray-900 dark:text-white' :
                        'text-white hover:text-yellow-300'"
                    class="transition duration-300">যোগাযোগ</a>
            </nav>

            <!-- Button -->
            <a href="#order-now"
                :class="scrolled
                    ?
                    'bg-indigo-600 text-white hover:bg-indigo-700' :
                    'bg-white/10 text-white hover:bg-white/20'"
                class="hidden md:block px-4 py-2 rounded-full text-sm font-semibold transition duration-300">
                অর্ডার করুন
            </a>
        </div>
    </header>


    <!-- Hero Section -->
    <!-- Ecommerce Hero Section -->
    {{-- <section
        class="relative min-h-screen bg-gradient-to-br from-indigo-900 via-indigo-700 to-blue-600 text-white flex items-center justify-center px-6 sm:px-12 lg:px-24 overflow-hidden">
        <!-- Left Content -->
        <div class="z-10 max-w-4xl text-center lg:text-left space-y-6" data-aos="fade-right">
            <p class="uppercase text-sm tracking-wider text-yellow-300 font-medium">নতুন কালেকশন এসেছে!</p>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
                ট্রেন্ডি প্রোডাক্ট এখন <span class="text-yellow-400">বিশেষ দামে</span>
            </h1>
            <p class="text-lg sm:text-xl text-indigo-100">আমাদের ই-কমার্স স্টোরে রয়েছে নতুন প্রোডাক্ট, দ্রুত ডেলিভারি,
                সেরা দামে।</p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="#products"
                    class="bg-yellow-400 hover:bg-yellow-500 text-indigo-900 font-bold px-8 py-3 rounded-full transition shadow-lg">
                    এখনই কিনুন
                </a>
                <a href="#features"
                    class="border border-white/70 text-white hover:bg-white hover:text-indigo-700 backdrop-blur-md font-semibold px-8 py-3 rounded-full transition">
                    আরও জানুন
                </a>
            </div>
        </div>

        <!-- Right Image -->
        <div class="hidden lg:block absolute right-0 bottom-0 w-[400px] h-auto z-0" data-aos="fade-left">
            <img src="https://via.placeholder.com/400x500?text=Product" alt="Featured Product"
                class="drop-shadow-2xl rounded-xl transform hover:scale-105 transition duration-500">
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 animate-bounce z-10">
            <a href="#products" class="text-white text-3xl hover:opacity-80 transition">&#x25BC;</a>
        </div>
    </section> --}}



    <!-- Hero Section -->
    <!-- Hero Section -->
    <section
        class="relative min-h-screen bg-gradient-to-br from-indigo-900 via-indigo-700 to-blue-600 text-white flex items-center justify-center px-6 sm:px-12 lg:px-24 overflow-hidden">

        <!-- Left Content -->
        <div class="z-10 max-w-4xl text-center lg:text-left space-y-6" data-aos="fade-right">
            <p class="uppercase text-sm tracking-wider text-yellow-300 font-medium">নতুন কালেকশন এসেছে!</p>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
                ট্রেন্ডি প্রোডাক্ট এখন <span class="text-yellow-400">বিশেষ দামে</span>
            </h1>
            <p class="text-lg sm:text-xl text-indigo-100">
                আমাদের ই-কমার্স স্টোরে রয়েছে নতুন প্রোডাক্ট, দ্রুত ডেলিভারি, সেরা দামে।
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="#products"
                    class="bg-yellow-400 hover:bg-yellow-500 text-indigo-900 font-bold px-8 py-3 rounded-full transition shadow-lg">
                    এখনই কিনুন
                </a>
                <a href="#features"
                    class="border border-white/70 text-white hover:bg-white hover:text-indigo-700 backdrop-blur-md font-semibold px-8 py-3 rounded-full transition">
                    আরও জানুন
                </a>
            </div>
        </div>

        <!-- Right Image -->
        <div class="hidden lg:block absolute right-0 bottom-0 w-[400px] h-auto z-0" data-aos="fade-left">
            <img src="#" alt="Featured Product"
                class="drop-shadow-2xl rounded-xl transform hover:scale-105 transition duration-500">
        </div>

        <!-- Floating Images - dynamically spaced and larger -->
        <img src="{{ asset('images/hero-image/1.png') }}" alt="Left1" class="floating-img float-left-1">
        <img src="{{ asset('images/hero-image/2.png') }}" alt="Center" class="floating-img float-left-2">
        <img src="{{ asset('images/hero-image/3.png') }}" alt="Right3" class="floating-img float-right-3">
        <img src="{{ asset('images/hero-image/1.png') }}" alt="Scrolling" id="scrollingImage" class="scrolling-img">


        <!-- Floating Images - Directional Horizontal Animation -->
        <img src="{{ asset('images/hero-image/1.png') }}" alt="Left1" class="float-left-1">
        <img src="{{ asset('images/hero-image/2.png') }}" alt="Center" class="float-left-2">
        <img src="{{ asset('images/hero-image/3.png') }}" alt="Right3" class="float-right-3">
        <img src="{{ asset('images/hero-image/1.png') }}" alt="Scrolling" id="scrollingImage" class="scrolling-img">


        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 animate-bounce z-10">
            <a href="#products" class="text-white text-3xl hover:opacity-80 transition">&#x25BC;</a>
        </div>
    </section>



    <!-- Featured Products Section -->
    <!-- Featured Products Section -->
    <section id="featured-products"
        class="py-24 bg-gradient-to-br from-indigo-50 via-white to-blue-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900"
        data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400">Featured Products</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mt-2">সেরা পণ্যের কালেকশন — এখনই অর্ডার করুন।</p>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-10">
                @foreach (range(1, 8) as $i)
                    <div class="group bg-white dark:bg-gray-800 rounded-3xl overflow-hidden shadow-md hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300"
                        data-aos="zoom-in-up" data-aos-delay="{{ $i * 100 }}">

                        <!-- Product Image (centered and fixed size) -->
                        <div class="flex items-center justify-center bg-gray-100 dark:bg-gray-700 h-56 overflow-hidden">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy4m9ZI9eplLQxTz14bVdAX9yyl7rvvt7O1Q&s+{{ $i }}"
                                alt="Product {{ $i }}"
                                class="w-full h-40 object-contain group-hover:scale-105 transition duration-300">
                        </div>

                        <!-- Product Details -->
                        <div class="p-5 text-center">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Product Name
                                {{ $i }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">বর্ণনা বা প্রধান বৈশিষ্ট্য
                                সংক্ষেপে।</p>
                            <div class="text-indigo-600 dark:text-yellow-400 font-bold text-lg mb-3">
                                ৳{{ $i * 1000 }}</div>

                            <!-- CTA Button -->
                            <a href="#"
                                class="inline-block bg-indigo-600 dark:bg-yellow-400 text-white dark:text-indigo-800 px-5 py-2 pb-10 rounded-full font-semibold hover:bg-indigo-700 dark:hover:bg-yellow-500 transition-all mb-10">
                                🛒 Add to Cart
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="py-24 bg-white dark:bg-gray-900 text-gray-800 dark:text-white"
        data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400">আমাদের কেন বেছে নেবেন?</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mt-2">আমরা দিচ্ছি এমন কিছু সুবিধা যা আপনার জন্য সেরা
                    সিদ্ধান্ত হতে পারে।</p>
            </div>

            <!-- Feature Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                @foreach ([['icon' => '🚀', 'title' => 'দ্রুত ডেলিভারি', 'desc' => 'বাংলাদেশজুড়ে ২৪–৪৮ ঘণ্টার মধ্যে পণ্য পৌঁছে দেওয়া হয়।'], ['icon' => '✅', 'title' => '১০০% অরিজিনাল পণ্য', 'desc' => 'সব পণ্য ব্র্যান্ড অথেন্টিক এবং ওয়ারেন্টি সহ।'], ['icon' => '📞', 'title' => '২৪/৭ সাপোর্ট', 'desc' => 'যেকোনো সময়ে আমাদের টিম আপনার পাশে আছে।'], ['icon' => '💰', 'title' => 'মানি ব্যাক গ্যারান্টি', 'desc' => 'সন্তুষ্ট না হলে ৭ দিনের মধ্যে রিফান্ড নিন।']] as $i => $item)
                    <div class="group bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-3xl p-8 shadow transition-all duration-300 transform hover:-translate-y-2 hover:shadow-yellow-300 dark:hover:shadow-yellow-400/30"
                        data-aos="zoom-in-up" data-aos-delay="{{ $i * 100 }}">

                        <!-- Icon -->
                        <div
                            class="w-16 h-16 flex items-center justify-center mx-auto mb-6 rounded-full text-3xl bg-indigo-100 dark:bg-indigo-700 text-indigo-600 dark:text-white group-hover:scale-110 transition">
                            {{ $item['icon'] }}
                        </div>

                        <!-- Title -->
                        <h3
                            class="text-xl font-bold text-center mb-2 group-hover:text-indigo-700 dark:group-hover:text-yellow-400 transition">
                            {{ $item['title'] }}
                        </h3>

                        <!-- Description -->
                        <p class="text-sm text-center text-gray-600 dark:text-gray-300">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Trusted Logos -->
    <section id="trusted" class="py-16 bg-white dark:bg-gray-900" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-8 uppercase tracking-wider">Trusted By
            </h2>
            <div class="flex flex-wrap justify-center items-center gap-8 sm:gap-10 md:gap-12">
                @foreach (range(1, 6) as $i)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg px-6 py-3 transition-all duration-300 transform hover:-translate-y-1 grayscale hover:grayscale-0">
                        <img src="https://via.placeholder.com/120x60?text=Logo+{{ $i }}"
                            class="h-10 sm:h-12 object-contain mx-auto" alt="Logo {{ $i }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Product Slider Section -->
    <section id="slider-section"
        class="py-16 bg-gradient-to-br from-indigo-50 via-white to-blue-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-center text-indigo-700 dark:text-yellow-400 mb-8">
                ফিচারড প্রোডাক্টস
            </h2>

            <div class="splide" id="product-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach (range(1, 6) as $i)
                            <li class="splide__slide">
                                <div
                                    class="bg-white dark:bg-gray-800 rounded-2xl p-4 shadow hover:shadow-xl transition-all duration-300 group">
                                    <img src="https://via.placeholder.com/300x200?text=Product+{{ $i }}"
                                        alt="Product {{ $i }}"
                                        class="w-full h-48 object-cover rounded-lg mb-4 group-hover:scale-105 transition">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-1">পণ্য নাম
                                        {{ $i }}</h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-300 mb-2">বিস্তারিত বিবরণ</p>
                                    <div class="text-indigo-600 dark:text-yellow-400 font-bold text-lg">৳
                                        {{ $i }}99</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section id="testimonials"
        class="py-24 bg-gradient-to-b from-blue-100 via-white to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-gray-800 dark:text-white"
        data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center text-indigo-700 dark:text-yellow-400 mb-6">
                ক্লায়েন্টদের রিভিউ
            </h2>
            <p class="text-center text-lg text-gray-600 dark:text-gray-300 mb-16 max-w-2xl mx-auto">
                আমাদের নিয়ে যা বলছেন সন্তুষ্ট গ্রাহকেরা — আপনার মতো আরও অনেকেই!
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach ([1, 2, 3] as $i)
                    <div class="group bg-white/70 dark:bg-gray-800/80 backdrop-blur-xl border border-gray-200 dark:border-gray-700 rounded-3xl p-8 shadow-lg hover:shadow-2xl hover:shadow-yellow-200 dark:hover:shadow-yellow-400/20 transition-all duration-300 transform hover:-translate-y-2 text-center"
                        data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">

                        <!-- Image -->
                        <div class="flex justify-center mb-5">
                            <img src="https://via.placeholder.com/80" alt="User {{ $i }}"
                                class="w-20 h-20 rounded-full border-4 border-indigo-500 shadow-md group-hover:scale-105 transition duration-300 hover:ring-4 hover:ring-indigo-300">
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
                        <h3
                            class="text-lg font-semibold text-indigo-700 dark:text-yellow-400 group-hover:text-indigo-900 dark:group-hover:text-yellow-300 transition">
                            গ্রাহক {{ $i }}
                        </h3>
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
                @foreach ([['title' => 'ধাপ ১: পণ্য/সার্ভিস নির্বাচন', 'desc' => 'আমাদের প্রোডাক্ট পেজ থেকে আপনার পছন্দের প্রোডাক্ট/প্যাকেজ বেছে নিন।', 'icon' => 'M12 4v16m8-8H4'], ['title' => 'ধাপ ২: অর্ডার কনফার্ম', 'desc' => 'একটি কাস্টমার ফর্ম পূরণ করুন এবং অর্ডার নিশ্চিত করুন।', 'icon' => 'M3 10h2l1 2h13l1-2h2m-2 0a9 9 0 01-18 0'], ['title' => 'ধাপ ৩: হোম ডেলিভারি', 'desc' => 'পণ্য আপনার ঠিকানায় পৌঁছে যাবে ২৪–৪৮ ঘণ্টার মধ্যে।', 'icon' => 'M9 17v-2a2 2 0 012-2h2a2 2 0 012 2v2m-6 4h6']] as $index => $step)
                    <div class="group bg-blue-50 dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-3xl p-8 text-center shadow transition-all transform duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-yellow-200 dark:hover:shadow-yellow-400/20"
                        data-aos="zoom-in-up" data-aos-delay="{{ ($index + 1) * 100 }}">

                        <div
                            class="w-16 h-16 flex items-center justify-center mx-auto mb-6 rounded-full bg-indigo-100 dark:bg-indigo-700 group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-indigo-600 dark:text-white" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="{{ $step['icon'] }}" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <h3
                            class="text-xl font-semibold mb-2 group-hover:text-indigo-700 dark:group-hover:text-yellow-400 transition">
                            {{ $step['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta"
        class="py-24 bg-gradient-to-br from-indigo-600 to-blue-600 dark:from-gray-800 dark:to-gray-900 text-white relative overflow-hidden"
        data-aos="fade-up">

        <!-- Subtle Texture Background -->
        <div
            class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] dark:opacity-5">
        </div>

        <div class="relative max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold mb-4 leading-tight text-white dark:text-yellow-400">
                এখনই আপনার অর্ডার কনফার্ম করুন
            </h2>
            <p class="text-lg text-indigo-100 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                দেরি না করে আজই শুরু করুন – আমাদের টিম প্রস্তুত আপনাকে সেবা দিতে।
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#order-now"
                    class="bg-yellow-400 hover:bg-yellow-500 text-indigo-800 font-bold px-8 py-3 rounded-full transition shadow-lg">
                    এখনই অর্ডার করুন
                </a>
                <a href="#contact"
                    class="border border-white dark:border-indigo-400 hover:bg-white hover:text-indigo-700 dark:hover:bg-white dark:hover:text-indigo-700 font-semibold px-8 py-3 rounded-full transition">
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
                @foreach ([['🌐', 'ওয়েবসাইট ডিজাইন', 'ব্যবসার জন্য আধুনিক, দ্রুতগতির ও মোবাইল রেসপন্সিভ ডিজাইন।'], ['🚀', 'SEO অপ্টিমাইজেশন', 'আপনার ওয়েবসাইট Google-এ র‍্যাংক করাতে সম্পূর্ণ SEO সমাধান।'], ['🛒', 'ই-কমার্স ডেভেলপমেন্ট', 'সম্পূর্ণ ফিচারসহ অনলাইন শপ তৈরি — অর্ডার, পেমেন্ট, স্টক ম্যানেজমেন্ট।'], ['🔒', 'ওয়েব সিকিউরিটি', 'ম্যালওয়্যার রিমুভাল, ফায়ারওয়াল, ব্যাকআপ সিস্টেম সহ ওয়েব নিরাপত্তা।'], ['📱', 'সোশ্যাল মিডিয়া মার্কেটিং', 'Facebook Boost, Branding এবং Messenger Automation সার্ভিস।'], ['💡', 'কাস্টম সফটওয়্যার ডেভেলপমেন্ট', 'স্কুল, কোম্পানি বা দোকানের জন্য ERP/Inventory টাইপ কাস্টম সফটওয়্যার।']] as $index => [$icon, $title, $desc])
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-md border border-gray-100 dark:border-gray-700 transition-all duration-300 hover:scale-[1.03] hover:shadow-2xl hover:shadow-yellow-200 dark:hover:shadow-yellow-400/20 group"
                        data-aos="zoom-in-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="mb-4">
                            <div
                                class="w-16 h-16 mx-auto bg-indigo-100 dark:bg-indigo-700 rounded-full flex items-center justify-center text-3xl transition-all group-hover:rotate-6">
                                {{ $icon }}
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-indigo-700 dark:text-yellow-400">{{ $title }}
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Pricing Section -->
    <section id="pricing" class="py-24 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-white"
        data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-indigo-700 dark:text-yellow-400 mb-4">প্ল্যান ও প্রাইসিং</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-16 max-w-2xl mx-auto">
                আপনার প্রয়োজন অনুযায়ী বেছে নিন উপযুক্ত প্যাকেজ।
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach ([['Starter', '৳999', 'সাধারণ ওয়েবসাইট / ল্যান্ডিং পেজ', ['১টি পেজ ডিজাইন', 'মোবাইল রেসপন্সিভ', '৭ দিন সাপোর্ট'], 'indigo', 100], ['Standard', '৳1999', 'ব্যবসার জন্য উপযুক্ত', ['৩টি পেজ ডিজাইন', 'SEO Optimized', '১৫ দিন সাপোর্ট'], 'yellow', 200], ['Premium', '৳4999', 'পুরো বিজনেস সাইট বা ই-কমার্স', ['৭+ পেজ', 'Advanced SEO', '৩০ দিন সাপোর্ট'], 'indigo', 300]] as $index => [$title, $price, $desc, $features, $color, $delay])
                    <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-md border border-gray-200 dark:border-gray-700 transition-all duration-300 transform hover:scale-[1.03] hover:shadow-xl hover:shadow-{{ $color }}-200 dark:hover:shadow-{{ $color }}-400/30"
                        data-aos="fade-up" data-aos-delay="{{ $delay }}">
                        @if ($title === 'Standard')
                            <div
                                class="absolute top-0 right-0 -mt-4 -mr-4 bg-yellow-400 text-indigo-800 text-xs uppercase font-bold px-3 py-1 rounded-full shadow-md">
                                Most Popular
                            </div>
                        @endif
                        <h3 class="text-xl font-bold mb-2 text-{{ $color }}-700 dark:text-yellow-400">
                            {{ $title }}</h3>
                        <p class="text-4xl font-extrabold text-{{ $color }}-700 dark:text-yellow-400 mb-2">
                            {{ $price }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">{{ $desc }}</p>
                        <ul class="space-y-2 text-sm text-left mb-6">
                            @foreach ($features as $f)
                                <li>✅ {{ $f }}</li>
                            @endforeach
                        </ul>
                        <a href="#order-now"
                            class="block bg-{{ $color }}-600 text-white py-2 rounded-full font-semibold hover:bg-{{ $color }}-700 transition">
                            অর্ডার করুন
                        </a>
                    </div>
                @endforeach
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


    <div class="cursor-dot" id="cursorDot"></div>

    <!-- Floating Scroll-to-Top Button -->
    <button onclick="scrollToTop()" id="scrollTopBtn"
        class="fixed bottom-6 right-6 z-50 bg-indigo-600 hover:bg-indigo-700 dark:bg-yellow-400 dark:hover:bg-yellow-500 text-white dark:text-indigo-800 p-4 rounded-full shadow-lg transition duration-300 hidden aria-label Scroll to Top">
        <!-- Up Arrow Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </button>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>

    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-cubic',
            mirror: false,
            throttleDelay: 99,
        });
    </script>

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

        animateCursor();
    </script>

    {{-- floting action button --}}
    <script>
        // Show button on scroll
        const scrollBtn = document.getElementById("scrollTopBtn");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                scrollBtn.classList.remove("hidden");
            } else {
                scrollBtn.classList.add("hidden");
            }
        });

        // Smooth scroll to top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>


    {{-- hero section slider --}}
    <script>
        const scrollImg = document.getElementById("scrollingImage");
        const footer = document.querySelector("footer");

        if (footer && scrollImg) {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        scrollImg.style.animation = 'none';
                        void scrollImg.offsetWidth; // reflow trigger
                        scrollImg.style.animation = 'scrollVertical 18s linear infinite';
                    }
                });
            });

            observer.observe(footer);
        }
    </script>

</body>

</html>

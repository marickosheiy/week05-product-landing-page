<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KŌMAKI — Japanese Dining</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        body {
            font-family: 'Inter', sans-serif;
        }

        .serif {
            font-family: 'DM Serif Display', serif;
        }

        html {
            scroll-behavior: smooth;
        }


       


        /* ===============================
   SCROLL REVEAL ANIMATION
=============================== */

.reveal,
.reveal-left,
.reveal-right,
.reveal-scale {
    opacity: 0;
    will-change: transform, opacity;
}


/* NORMAL UPWARD ANIMATION */

.reveal {
    transform: translateY(60px);
}


/* LEFT ANIMATION */

.reveal-left {
    transform: translateX(-70px);
}


/* RIGHT ANIMATION */

.reveal-right {
    transform: translateX(70px);
}


/* SCALE ANIMATION */

.reveal-scale {
    transform: scale(0.92);
}


/* ACTIVE STATE */

.reveal.active {
    animation: revealUp 0.9s ease forwards;
}


.reveal-left.active {
    animation: revealLeft 0.9s ease forwards;
}


.reveal-right.active {
    animation: revealRight 0.9s ease forwards;
}


.reveal-scale.active {
    animation: revealScale 0.9s ease forwards;
}


/* KEYFRAMES */

@keyframes revealUp {

    from {
        opacity: 0;
        transform: translateY(60px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}


@keyframes revealLeft {

    from {
        opacity: 0;
        transform: translateX(-70px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }

}


@keyframes revealRight {

    from {
        opacity: 0;
        transform: translateX(70px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }

}


@keyframes revealScale {

    from {
        opacity: 0;
        transform: scale(0.92);
    }

    to {
        opacity: 1;
        transform: scale(1);
    }

}


        /* ===============================
           HERO ANIMATION
        =============================== */

        .hero-text-animation {
            animation: heroFade 1s ease forwards;
        }

        .hero-image-animation {
            animation: heroImage 1.2s ease forwards;
        }

        @keyframes heroFade {

            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        @keyframes heroImage {

            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }

        }


        /* ===============================
           MOBILE
        =============================== */

        @media (max-width: 768px) {

            .hero-text-animation {
                animation: heroFadeMobile 1s ease forwards;
            }

            .hero-image-animation {
                animation: heroImageMobile 1.2s ease forwards;
            }

        }

    </style>

</head>


<body class="bg-[#1c1c1c] text-white overflow-x-hidden relative">


    



    <!-- ===============================
         NAVBAR
    =============================== -->

    <header
        class="fixed top-0 left-0 w-full z-50 bg-[#1c1c1c]/95 backdrop-blur-md border-b border-white/10"
    >

        <!-- FULL WIDTH NAVBAR -->

        <div class="w-full px-6 md:px-10 lg:px-16 xl:px-24">

            <div class="h-20 flex items-center justify-between">


                <!-- LOGO -->
            <a href="#home" class="flex items-center gap-3 group">

                <img
                    src="{{ asset('images/komaki.png') }}"
                    alt="KŌMAKI Logo"
                    class="w-12 h-12 object-contain"
                >

                <div>
                    <h1 class="serif text-2xl tracking-[0.18em] leading-none">
                        KŌMAKI
                    </h1>

                    <p class="text-[9px] tracking-[0.35em] text-red-400 mt-1">
                        小牧
                    </p>
                </div>

            </a>



                <!-- NAVIGATION -->

                <nav
                    class="hidden md:flex items-center gap-6 lg:gap-10 text-sm text-gray-300"
                >

                    <a
                        href="#home"
                        class="hover:text-red-400 transition duration-300"
                    >
                        Home
                    </a>


                    <a
                        href="#about"
                        class="hover:text-red-400 transition duration-300"
                    >
                        About
                    </a>


                    <a
                        href="#menu"
                        class="hover:text-red-400 transition duration-300"
                    >
                        Menu
                    </a>


                    <a
                        href="#gallery"
                        class="hover:text-red-400 transition duration-300"
                    >
                        Gallery
                    </a>


                    <a
                        href="#journal"
                        class="hover:text-red-400 transition duration-300"
                    >
                        Journal
                    </a>

                </nav>



                <!-- BUTTON -->

                <a
                    href="#menu"
                    class="hidden md:inline-flex bg-red-600 hover:bg-red-700 transition duration-300 px-6 py-3 rounded-full text-sm font-medium shadow-lg shadow-red-900/20"
                >
                    Explore Menu
                </a>


            </div>

        </div>

    </header>



    <!-- ===============================
         HERO SECTION
    =============================== -->

    <section
        id="home"
        class="min-h-screen pt-20 relative z-10 flex items-center"
    >


        <!-- FULL WIDTH HERO -->

        <div class="w-full px-6 md:px-10 lg:px-16 xl:px-24 py-16 lg:py-24">


            <div
                class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center"
            >


                <!-- HERO TEXT -->

                <div class="hero-text-animation">


                    <p
                        class="text-red-400 tracking-[0.3em] text-xs uppercase mb-5"
                    >
                        Japanese-Inspired Dining
                    </p>



                    <h2
                        class="serif text-5xl md:text-6xl lg:text-7xl xl:text-8xl leading-tight mb-6"
                    >

                        Authentic Taste,

                        <br>

                        <span class="text-red-500">
                            Timeless Tradition.
                        </span>

                    </h2>



                    <p
                        class="text-gray-400 max-w-xl leading-7 mb-8 text-sm md:text-base"
                    >

                        Experience the art of Japanese dining through carefully
                        selected ingredients, beautifully crafted sushi, and
                        flavors inspired by tradition.

                    </p>



                    <div class="flex flex-wrap gap-4">


                        <a
                            href="#menu"
                            class="bg-red-600 hover:bg-red-700 transition duration-300 px-7 py-3 rounded-full text-sm font-medium shadow-lg shadow-red-900/30"
                        >
                            Explore Menu
                        </a>



                        <a
                            href="#about"
                            class="border border-gray-600 hover:border-red-400 hover:text-red-400 transition duration-300 px-7 py-3 rounded-full text-sm"
                        >
                            Our Story
                        </a>


                    </div>


                </div>



                <!-- HERO IMAGE -->

                <div class="relative hero-image-animation">


                    <!-- RED GLOW -->

                    <div
                        class="absolute inset-0 bg-red-600/10 blur-3xl rounded-full scale-90"
                    ></div>



                    <!-- IMAGE -->

                    <div
                        class="relative overflow-hidden rounded-2xl h-[420px] md:h-[500px] lg:h-[600px] border border-white/5 shadow-2xl"
                    >

                        <img
                            src="{{ asset('images/sushisnap.png') }}"
                            alt="KOMAKI Sushi"
                            class="w-full h-full object-cover hover:scale-105 transition duration-700"
                        >


                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"
                        ></div>


                    </div>


                </div>


            </div>


        </div>


    </section>



    <!-- ===============================
         ABOUT
    =============================== -->

    <section
        id="about"
        class="py-24 bg-[#202020]/95 relative z-10"
    >


        <div class="max-w-7xl mx-auto px-6 lg:px-10">


            <div
                class="grid lg:grid-cols-2 gap-16 items-center"
            >


                <!-- ABOUT TEXT -->

                <div class="reveal-left">


                    <p
                        class="text-red-400 text-xs tracking-[0.3em] uppercase mb-4"
                    >
                        About KŌMAKI
                    </p>



                    <h2
                        class="serif text-4xl md:text-5xl mb-6"
                    >

                        Crafted with Passion,

                        <br>

                        Served with Tradition.

                    </h2>



                    <p
                        class="text-gray-400 leading-7 mb-5"
                    >

                        At KŌMAKI, every dish is prepared with care and attention
                        to detail. We believe that dining is more than simply
                        enjoying food—it is an experience.

                    </p>



                    <p
                        class="text-gray-400 leading-7 mb-8"
                    >

                        Inspired by Japanese traditions and modern presentation,
                        we bring together fresh ingredients and thoughtful
                        craftsmanship in every bite.

                    </p>



                    <a
                        href="#menu"
                        class="inline-flex bg-red-600 hover:bg-red-700 transition duration-300 px-6 py-3 rounded-full text-sm shadow-lg shadow-red-900/20"
                    >
                        Discover Our Menu
                    </a>


                </div>



                <!-- ABOUT IMAGE -->

                <div
                    class="grid grid-cols-2 gap-4 reveal-right"
                >


                    <div
                        class="overflow-hidden rounded-xl h-[350px]"
                    >

                        <img
                            src="{{ asset('images/californiadory.png') }}"
                            alt="KOMAKI Dining"
                            class="w-full h-full object-cover hover:scale-110 transition duration-700"
                        >

                    </div>



                    <div
                        class="overflow-hidden rounded-xl h-[350px] mt-12"
                    >

                        <img
                            src="{{ asset('images/californiaspicydory.png') }}"
                            alt="KOMAKI Sushi"
                            class="w-full h-full object-cover hover:scale-110 transition duration-700"
                        >

                    </div>


                </div>


            </div>


        </div>


    </section>



    <!-- ===============================
         MENU CATEGORIES
    =============================== -->

    <section
        id="menu"
        class="py-24 relative z-10"
    >


        <div class="max-w-7xl mx-auto px-6 lg:px-10">


            <!-- SECTION TITLE -->

            <div class="text-center mb-14 reveal">


                <p
                    class="text-red-400 text-xs tracking-[0.3em] uppercase mb-4"
                >
                    Our Menu
                </p>


                <h2
                    class="serif text-4xl md:text-5xl"
                >
                    Our Menu Categories
                </h2>


                <p
                    class="text-gray-400 mt-4 max-w-xl mx-auto"
                >
                    Discover our carefully selected collection of Japanese-inspired favorites.
                </p>


            </div>



            <!-- CATEGORIES -->

            <div
                class="grid grid-cols-2 md:grid-cols-4 gap-6"
            >


                <!-- CATEGORY 1 -->

                <div class="group text-center reveal">

                    <div
                        class="overflow-hidden rounded-full aspect-square mb-4 border border-white/10"
                    >

                        <img
                            src="{{ asset('images/californiadory.png') }}"
                            alt="Sushi"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        >

                    </div>

                    <h3 class="text-lg font-medium">
                        Sushi
                    </h3>

                    <p class="text-gray-500 text-sm mt-2">
                        Fresh and beautifully crafted.
                    </p>

                </div>



                <!-- CATEGORY 2 -->

                <div class="group text-center reveal">

                    <div
                        class="overflow-hidden rounded-full aspect-square mb-4 border border-white/10"
                    >

                        <img
                            src="{{ asset('images/makidory.png') }}"
                            alt="Special Rolls"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        >

                    </div>

                    <h3 class="text-lg font-medium">
                        Special Rolls
                    </h3>

                    <p class="text-gray-500 text-sm mt-2">
                        Creative combinations.
                    </p>

                </div>



                <!-- CATEGORY 3 -->

                <div class="group text-center reveal">

                    <div
                        class="overflow-hidden rounded-full aspect-square mb-4 border border-white/10"
                    >

                        <img
                            src="{{ asset('images/kanimaki.png') }}"
                            alt="Japanese Favorites"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        >

                    </div>

                    <h3 class="text-lg font-medium">
                        Favorites
                    </h3>

                    <p class="text-gray-500 text-sm mt-2">
                        Loved by our guests.
                    </p>

                </div>



                <!-- CATEGORY 4 -->

                <div class="group text-center reveal">

                    <div
                        class="overflow-hidden rounded-full aspect-square mb-4 border border-white/10"
                    >

                        <img
                            src="{{ asset('images/californiamaki.jpg') }}"
                            alt="Signature Menu"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        >

                    </div>

                    <h3 class="text-lg font-medium">
                        Signature
                    </h3>

                    <p class="text-gray-500 text-sm mt-2">
                        KŌMAKI specialties.
                    </p>

                </div>


            </div>



            <div class="text-center mt-12 reveal">

                <button
                    class="bg-red-600 hover:bg-red-700 transition duration-300 px-7 py-3 rounded-full text-sm shadow-lg shadow-red-900/20"
                >
                    View Full Menu
                </button>

            </div>


        </div>


    </section>



    <!-- ===============================
         SUSHI COMBO
    =============================== -->

    <section
        class="py-24 bg-[#202020]/95 relative z-10"
    >


        <div class="max-w-7xl mx-auto px-6 lg:px-10">


            <div class="text-center mb-12 reveal">


                <p
                    class="text-red-400 text-xs tracking-[0.3em] uppercase mb-4"
                >
                    Popular Choices
                </p>


                <h2
                    class="serif text-4xl md:text-5xl"
                >
                    Sushi Combo
                </h2>


            </div>



            <div
                class="grid md:grid-cols-3 gap-6"
            >


                <!-- CARD 1 -->

                <div
                    class="bg-[#292929] rounded-xl overflow-hidden border border-white/5 reveal hover:-translate-y-2 transition duration-500"
                >

                    <div class="h-52 overflow-hidden">

                        <img
                            src="{{ asset('images/californiadory.png') }}"
                            alt="California Roll"
                            class="w-full h-full object-cover hover:scale-110 transition duration-500"
                        >

                    </div>


                    <div class="p-6">

                        <h3 class="font-semibold text-lg">
                            California Classic
                        </h3>


                        <p class="text-gray-400 text-sm mt-2">
                            Fresh ingredients carefully rolled for the perfect bite.
                        </p>


                        <div class="flex items-center justify-between mt-5">

                            <span class="text-red-400 font-semibold">
                                ₱125
                            </span>


                            <button
                                class="text-red-400 text-sm hover:text-red-300 transition"
                            >
                                Order Now →
                            </button>

                        </div>


                    </div>


                </div>



                <!-- CARD 2 -->

                <div
                    class="bg-[#292929] rounded-xl overflow-hidden border border-white/5 reveal hover:-translate-y-2 transition duration-500"
                >

                    <div class="h-52 overflow-hidden">

                        <img
                            src="{{ asset('images/californiaspicydory.png') }}"
                            alt="California Spicy Dory"
                            class="w-full h-full object-cover hover:scale-110 transition duration-500"
                        >

                    </div>


                    <div class="p-6">

                        <h3 class="font-semibold text-lg">
                            California Spicy Dory
                        </h3>


                        <p class="text-gray-400 text-sm mt-2">
                            A flavorful combination with a delicious spicy finish.
                        </p>


                        <div class="flex items-center justify-between mt-5">

                            <span class="text-red-400 font-semibold">
                                ₱125
                            </span>


                            <button
                                class="text-red-400 text-sm hover:text-red-300 transition"
                            >
                                Order Now →
                            </button>

                        </div>


                    </div>


                </div>



                <!-- CARD 3 -->

                <div
                    class="bg-[#292929] rounded-xl overflow-hidden border border-white/5 reveal hover:-translate-y-2 transition duration-500"
                >

                    <div class="h-52 overflow-hidden">

                        <img
                            src="{{ asset('images/makidory.png') }}"
                            alt="Maki Dory"
                            class="w-full h-full object-cover hover:scale-110 transition duration-500"
                        >

                    </div>


                    <div class="p-6">

                        <h3 class="font-semibold text-lg">
                            Signature Dory
                        </h3>


                        <p class="text-gray-400 text-sm mt-2">
                            A KŌMAKI favorite made with fresh and satisfying ingredients.
                        </p>


                        <div class="flex items-center justify-between mt-5">

                            <span class="text-red-400 font-semibold">
                                ₱115
                            </span>


                            <button
                                class="text-red-400 text-sm hover:text-red-300 transition"
                            >
                                Order Now →
                            </button>

                        </div>


                    </div>


                </div>


            </div>


        </div>


    </section>



    <!-- ===============================
         PROMOTION
    =============================== -->

    <section class="py-24 relative z-10">


        <div class="max-w-7xl mx-auto px-6 lg:px-10 reveal">


            <div
                class="relative rounded-2xl overflow-hidden h-[400px] border border-white/5"
            >


                <img
                    src="{{ asset('images/sushisnap.png') }}"
                    alt="KOMAKI Promotion"
                    class="absolute inset-0 w-full h-full object-cover"
                >


                <div
                    class="absolute inset-0 bg-black/70"
                ></div>


                <div
                    class="relative h-full flex flex-col justify-center px-8 md:px-16"
                >


                    <p
                        class="text-red-400 text-sm tracking-[0.25em] uppercase mb-4"
                    >
                        Limited Offer
                    </p>


                    <h2
                        class="serif text-5xl md:text-6xl mb-4"
                    >
                        30% OFF
                    </h2>


                    <p
                        class="text-gray-300 max-w-lg mb-7"
                    >
                        Enjoy your favorite KŌMAKI selections with our special
                        limited-time dining offer.
                    </p>


                    <a
                        href="#menu"
                        class="bg-red-600 hover:bg-red-700 transition duration-300 px-6 py-3 rounded-full w-fit text-sm"
                    >
                        Explore Offer
                    </a>


                </div>


            </div>


        </div>


    </section>



    <!-- ===============================
         GALLERY
    =============================== -->

    <section
        id="gallery"
        class="py-24 bg-[#202020]/95 relative z-10"
    >


        <div class="max-w-7xl mx-auto px-6 lg:px-10">


            <div class="text-center mb-12 reveal">


                <p
                    class="text-red-400 text-xs tracking-[0.3em] uppercase mb-4"
                >
                    KŌMAKI Moments
                </p>


                <h2
                    class="serif text-4xl md:text-5xl"
                >
                    Gallery
                </h2>


            </div>



            <div
                class="grid grid-cols-2 md:grid-cols-4 gap-4"
            >


                <div class="h-60 overflow-hidden rounded-xl reveal">

                    <img
                        src="{{ asset('images/californiadory.png') }}"
                        class="w-full h-full object-cover hover:scale-110 transition duration-500"
                        alt="Gallery Sushi"
                    >

                </div>


                <div class="h-60 overflow-hidden rounded-xl reveal">

                    <img
                        src="{{ asset('images/californiamaki.jpg') }}"
                        class="w-full h-full object-cover hover:scale-110 transition duration-500"
                        alt="Gallery Sushi"
                    >

                </div>


                <div class="h-60 overflow-hidden rounded-xl reveal">

                    <img
                        src="{{ asset('images/kanimaki.png') }}"
                        class="w-full h-full object-cover hover:scale-110 transition duration-500"
                        alt="Gallery Sushi"
                    >

                </div>


                <div class="h-60 overflow-hidden rounded-xl reveal">

                    <img
                        src="{{ asset('images/californiaspicydory.png') }}"
                        class="w-full h-full object-cover hover:scale-110 transition duration-500"
                        alt="Gallery Sushi"
                    >

                </div>


            </div>


        </div>


    </section>



    <!-- ===============================
         JOURNAL
    =============================== -->

    <section
        id="journal"
        class="py-24 relative z-10"
    >


        <div class="max-w-7xl mx-auto px-6 lg:px-10">


            <div class="text-center mb-12 reveal">


                <p
                    class="text-red-400 text-xs tracking-[0.3em] uppercase mb-4"
                >
                    Stories
                </p>


                <h2
                    class="serif text-4xl md:text-5xl"
                >
                    KŌMAKI Journal
                </h2>


            </div>



            <div
                class="grid md:grid-cols-3 gap-6"
            >


                <article
                    class="bg-[#292929] rounded-xl p-7 border border-white/5 reveal hover:border-red-500/30 transition duration-500"
                >

                    <p class="text-red-400 text-xs mb-4">
                        CULTURE
                    </p>


                    <h3 class="text-xl font-medium mb-4">
                        The Art of Japanese Dining
                    </h3>


                    <p class="text-gray-400 text-sm leading-6">
                        Discover the traditions and thoughtful details behind Japanese cuisine.
                    </p>


                </article>



                <article
                    class="bg-[#292929] rounded-xl p-7 border border-white/5 reveal hover:border-red-500/30 transition duration-500"
                >

                    <p class="text-red-400 text-xs mb-4">
                        INGREDIENTS
                    </p>


                    <h3 class="text-xl font-medium mb-4">
                        Freshness in Every Bite
                    </h3>


                    <p class="text-gray-400 text-sm leading-6">
                        Learn why carefully selected ingredients make every dish special.
                    </p>


                </article>



                <article
                    class="bg-[#292929] rounded-xl p-7 border border-white/5 reveal hover:border-red-500/30 transition duration-500"
                >

                    <p class="text-red-400 text-xs mb-4">
                        KŌMAKI
                    </p>


                    <h3 class="text-xl font-medium mb-4">
                        Our Signature Creations
                    </h3>


                    <p class="text-gray-400 text-sm leading-6">
                        Explore the flavors and combinations that make KŌMAKI unique.
                    </p>


                </article>


            </div>


        </div>


    </section>



    <!-- ===============================
         SUBSCRIBE
    =============================== -->

    <section
        class="py-20 bg-[#202020]/95 relative z-10"
    >


        <div
            class="max-w-4xl mx-auto px-6 text-center reveal"
        >


            <p
                class="text-red-400 text-xs tracking-[0.3em] uppercase mb-4"
            >
                Stay Connected
            </p>


            <h2
                class="serif text-4xl md:text-5xl mb-5"
            >
                Subscribe to KŌMAKI Secrets
            </h2>


            <p
                class="text-gray-400 mb-8"
            >
                Receive updates, exclusive offers, and the latest from KŌMAKI.
            </p>


            <div
                class="flex flex-col sm:flex-row gap-3 max-w-xl mx-auto"
            >


                <input
                    type="email"
                    placeholder="Enter your email address"
                    class="flex-1 bg-[#292929] border border-white/10 rounded-full px-6 py-3 outline-none focus:border-red-400 transition"
                >


                <button
                    class="bg-red-600 hover:bg-red-700 transition duration-300 px-7 py-3 rounded-full"
                >
                    Subscribe
                </button>


            </div>


        </div>


    </section>



    <!-- ===============================
         FOOTER
    =============================== -->

    <footer
        class="border-t border-white/5 py-10 relative z-10 bg-[#1c1c1c]/95"
    >


        <div class="max-w-7xl mx-auto px-6 lg:px-10">


            <div
                class="flex flex-col md:flex-row justify-between items-center gap-6"
            >


                <div class="text-center md:text-left">


                    <h2
                        class="serif text-2xl tracking-[0.15em]"
                    >
                        KŌMAKI
                    </h2>


                    <p
                        class="text-gray-500 text-xs mt-2"
                    >
                        Japanese-Inspired Dining
                    </p>


                </div>



                <p
                    class="text-gray-500 text-sm"
                >
                    © {{ date('Y') }} KŌMAKI. All rights reserved.
                </p>



                <div
                    class="flex gap-5 text-gray-400 text-sm"
                >


                    <a
                        href="#"
                        class="hover:text-red-400 transition"
                    >
                        Instagram
                    </a>


                    <a
                        href="#"
                        class="hover:text-red-400 transition"
                    >
                        Facebook
                    </a>


                </div>


            </div>


        </div>


    </footer>



    <!-- ===============================
         SCROLL REVEAL SCRIPT
    =============================== -->

    <script>

        const revealElements = document.querySelectorAll(
            '.reveal, .reveal-left, .reveal-right'
        );


        const revealOnScroll = new IntersectionObserver(
            (entries) => {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add('active');

                    }

                });

            },

            {
                threshold: 0.15
            }

        );


        revealElements.forEach((element) => {

            revealOnScroll.observe(element);

        });

    </script>


</body>
</html>
{{-- ================= HEADER ================= --}}
<header class="fixed top-6 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="relative flex items-center justify-between
                    bg-white backdrop-blur-md
                    rounded-full px-6 py-3 shadow-xl">

            {{-- Logo --}}
            <a href="{{ route('home') }}">
                <img src="/assets/images/logo.png" alt="Devobyte" class="h-8">
            </a>

            {{-- ================= DESKTOP MENU ================= --}}
            <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-gray-700 font-inter">

                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>

                {{-- About --}}
                <div class="relative group">
                    <a href="{{ route('about') }}" class="nav-link flex items-center gap-1 {{ request()->routeIs('about') ? 'active' : '' }}">
                        About Us
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </a>

                    <div class="absolute left-0 top-full mt-5 w-52 bg-white rounded-xl
                                border border-gray-100 shadow-xl
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                transition-all duration-200">

                        <a href="{{ route('our-team') }}" class="block px-5 py-3 text-sm hover:bg-blue-50 hover:text-blue-600 rounded-xl">
                            Our Team
                        </a>

                        <a href="#" class="block px-5 py-3 text-sm hover:bg-blue-50 hover:text-blue-600 rounded-xl">
                            Gallery
                        </a>
                    </div>
                </div>

                {{-- Services --}}
                <div class="relative group">
                    <a href="{{ route('our-services') }}" class="nav-link flex items-center gap-1 {{ request()->routeIs('our-services') ? 'active' : '' }}">
                        Services
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </a>

                    {{-- Mega Menu --}}
                    <div class="absolute left-1/2 top-full mt-5 w-[900px] max-w-[95vw]
                                -translate-x-1/2 bg-white rounded-3xl
                                border border-gray-100 shadow-2xl
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                transition-all duration-200">

                        <div class="grid grid-cols-3 gap-12 px-12 py-10">

                            {{-- IT SERVICES --}}
                            <div>
                                <h4 class="text-blue-600 font-bold mb-4 text-base font-montserrat">IT Services</h4>
                                <ul class="space-y-3 text-sm">
                                    <li><a href="{{ route('web-development') }}" class="service-item"><i class="fa-solid fa-globe"></i> Web App Development</a></li>
                                    <li><a href="{{ route('mobile-development') }}" class="service-item"><i class="fa-solid fa-mobile-screen-button"></i> Mobile App Development</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-solid fa-desktop"></i> Conversion-Focused Websites</a></li>
                                    <li><a href="{{ route('custom_solution') }}" class="service-item"><i class="fa-solid fa-gears"></i> Custom Software Solutions</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-solid fa-robot"></i> AI Chatbots & Assistants</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-solid fa-bolt"></i> AI Automation & Workflows</a></li>
                                </ul>
                            </div>

                            {{-- SOCIAL --}}
                            <div>
                                <h4 class="text-blue-600 font-bold mb-4 text-base font-montserrat">Social Media Marketing</h4>
                                <ul class="space-y-3 text-sm">
                                    <li><a href="{{ route('instagram') }}" class="service-item"><i class="fa-brands fa-instagram"></i> Instagram Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-facebook"></i> Facebook Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-youtube"></i> YouTube Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-twitter"></i> Twitter Marketing</a></li>
                                    <li><a href="{{ route('linkedin') }}" class="service-item"><i class="fa-brands fa-linkedin"></i> LinkedIn Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-amazon"></i> Amazon Marketing</a></li>
                                </ul>
                            </div>

                            {{-- MARKETING --}}
                            <div>
                                <h4 class="text-blue-600 font-bold mb-4 text-base font-montserrat">Marketing</h4>
                                <ul class="space-y-3 text-sm">
                                    <li><a href="{{ route('seo') }}" class="service-item"><i class="fa-solid fa-magnifying-glass"></i> SEO</a></li>
                                    <li><a href="{{ route('lead_generation') }}" class="service-item"><i class="fa-solid fa-bullseye"></i> Lead Generation</a></li>
                                    <li><a href="{{ route('influencer') }}" class="service-item"><i class="fa-solid fa-user-group"></i> Influencer Marketing</a></li>
                                    <li><a href="{{ route('email') }}" class="service-item"><i class="fa-solid fa-envelope"></i> Email Marketing</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <a href="{{ route('industry') }}" class="nav-link">Industries</a>
                <a href="#" class="nav-link">Case Studies</a>
                <a href="#" class="nav-link">Blog</a>
                <a href="#" class="nav-link">Careers</a>

            </nav>

            {{-- CTA --}}
            <a href="{{ route('contact') }}"
               class="hidden lg:flex bg-blue-500 hover:bg-blue-700 text-white px-6 py-2 rounded-full text-sm font-semibold items-center gap-2 transition">
                Contact Us →
            </a>

            {{-- MOBILE TOGGLE --}}
            <button id="menuBtn"
                class="lg:hidden w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center">
                ☰
            </button>
        </div>

        {{-- ================= MOBILE MENU ================= --}}
        <div id="mobileMenu" class="lg:hidden hidden mt-4 bg-white rounded-2xl shadow-xl p-5 space-y-4">

            <a href="{{ route('home') }}" class="block font-medium">Home</a>
            <a href="{{ route('about') }}" class="block font-medium">About Us</a>

            {{-- Mobile Services Accordion --}}
            <div>
                <button class="w-full flex justify-between items-center font-medium" onclick="toggleSubMenu()">
                    Services
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>

                <div id="mobileSubMenu" class="hidden mt-3 pl-4 space-y-2 text-sm">
                    <a href="{{ route('web-development') }}" class="block">Web App Development</a>
                    <a href="{{ route('mobile-development') }}" class="block">Mobile App Development</a>
                    <a href="{{ route('custom_solution') }}" class="block">Custom Software</a>
                    <a href="{{ route('seo') }}" class="block">SEO</a>
                    <a href="{{ route('influencer') }}" class="block">Influencer Marketing</a>
                </div>
            </div>

            <a href="#" class="block font-medium">Industries</a>
            <a href="#" class="block font-medium">Case Studies</a>
            <a href="#" class="block font-medium">Blog</a>
            <a href="#" class="block font-medium">Careers</a>

            <a href="{{ route('contact') }}"
               class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-full">
                Contact Us
            </a>
        </div>

    </div>
</header>
<style>
    .nav-link {
        position: relative;
        padding: 4px 2px;
        color: #374151;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #2563EB;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 2px;
        background-color: #2563EB;
        transition: width 0.3s ease;
        border-radius: 10px;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }

    .nav-link.active {
        color: #2563EB;
    }

    .service-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #374151;
        transition: all 0.25s ease;
    }

    .service-item i {
        color: #2563EB;
        width: 18px;
        text-align: center;
        flex-shrink: 0;
    }

    .service-item:hover {
        color: #2563EB;
        padding-left: 6px;
    }
</style>
<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });

    function toggleSubMenu() {
        const sub = document.getElementById('mobileSubMenu');
        sub.classList.toggle('hidden');
    }
</script>

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
            <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-gray-700"
                 style="font-family:'Inter', sans-serif;">

                <a href="{{ route('home') }}" class="nav-link">Home</a>

                {{-- ================= ABOUT US DROPDOWN ================= --}}
                <div class="relative group">

                    <a href="{{ route('about') }}" class="nav-link flex items-center gap-1">
                        About Us
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </a>

                    <div class="absolute left-0 top-full mt-6
                                w-52 bg-white rounded-xl
                                border border-gray-100 shadow-xl
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                transition-all duration-200">

                        <a href="{{ route('our-team') }}"
                           class="block px-5 py-3 text-sm
                                  hover:bg-blue-50 hover:text-blue-600 transition rounded-xl">
                            Our Team
                            <a href="#"
                           class="block px-5 py-3 text-sm
                                  hover:bg-blue-50 hover:text-blue-600 transition rounded-xl">
                            Gallery
                        </a>
                        </a>
                    </div>
                </div>

                {{-- ================= SERVICES MEGA MENU ================= --}}
                <div class="relative group">

                    <a href="{{ route('our-services') }}" class="nav-link flex items-center gap-1">
                        Services
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </a>

                    <!-- Mega Menu -->
                    <div class="absolute left-1/2 top-full mt-6
                                w-[900px] max-w-[95vw]
                                -translate-x-1/2
                                bg-white rounded-3xl
                                border border-gray-100 shadow-2xl
                                opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                transition-all duration-200">

                        <div class="grid grid-cols-3 gap-12 px-12 py-10">

                            {{-- IT SERVICES --}}
                            <div>
                                <h4 class="text-blue-600 font-bold mb-4 text-base"
                                    style="font-family:'Montserrat Alternates', sans-serif;">
                                    IT Services
                                </h4>

                                <ul class="space-y-3 text-sm">
                                    <li>
                                        <a href="{{ route('development') }}" class="service-item">
                                            <i class="fa-solid fa-code"></i> Mobile & Web App Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="service-item">
                                            <i class="fa-solid fa-desktop"></i> Conversion-Focused Websites
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="service-item">
                                            <i class="fa-solid fa-gears"></i> Custom Software Solutions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="service-item">
                                            <i class="fa-solid fa-robot"></i> AI Chatbots & Assistants
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="service-item">
                                            <i class="fa-solid fa-bolt"></i> AI Automation & Workflows
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            {{-- SOCIAL MEDIA MARKETING --}}
                            <div>
                                <h4 class="text-blue-600 font-bold mb-4 text-base"
                                    style="font-family:'Montserrat Alternates', sans-serif;">
                                    Social Media Marketing
                                </h4>

                                <ul class="space-y-3 text-sm">
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-instagram"></i> Instagram Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-facebook"></i> Facebook Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-youtube"></i> YouTube Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-twitter"></i> Twitter Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-linkedin"></i> LinkedIn Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-brands fa-amazon"></i> Amazon Marketing</a></li>
                                </ul>
                            </div>

                            {{-- OTHER MARKETING --}}
                            <div>
                                <h4 class="text-blue-600 font-bold mb-4 text-base"
                                    style="font-family:'Montserrat Alternates', sans-serif;">
                                    Marketing
                                </h4>

                                <ul class="space-y-3 text-sm">
                                    <li><a href="{{ route('seo') }}" class="service-item"><i class="fa-solid fa-magnifying-glass"></i> SEO</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-solid fa-bullseye"></i> Lead Generation</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-solid fa-user-group"></i> Influencer Marketing</a></li>
                                    <li><a href="#" class="service-item"><i class="fa-solid fa-envelope"></i> Email Marketing</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <a href="{{ route('home') }}" class="nav-link">Industries</a>
                <a href="{{ route('home') }}" class="nav-link">Case Studies</a>
                <a href="{{ route('home') }}" class="nav-link">Blog</a>
                <a href="{{ route('home') }}" class="nav-link">Careers</a>

            </nav>

            {{-- CTA --}}
            <a href="{{ route('contact') }}"
               class="hidden lg:flex bg-blue-600 hover:bg-blue-700
                      text-white px-6 py-2 rounded-full
                      text-sm font-semibold items-center gap-2 transition">
                Contact Us →
            </a>

            {{-- MOBILE TOGGLE --}}
            <button id="menuBtn"
                class="lg:hidden w-10 h-10 rounded-full
                       bg-blue-600 text-white flex items-center justify-center">
                ☰
            </button>
        </div>
    </div>
</header>

{{-- ================= STYLES ================= --}}
<style>
    .nav-link {
        position: relative;
        padding-bottom: 6px;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: #2563EB;
        transform: translateX(-50%);
        transition: width 0.3s ease;
        border-radius: 10px;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .service-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #374151;
        transition: all 0.2s ease;
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

@extends('layouts.app')

@section('title', 'Social Media Marketing – Devobyte')

@section('meta')
    <meta name="description"
        content="Grow your brand with Devobyte's social media marketing services. We help businesses scale through data-driven social strategies.">
    <meta name="keywords"
        content="Social Media Marketing, Digital Marketing Agency, Instagram Marketing, Facebook Ads, Devobyte">
@endsection

@section('content')


    <!-- ================= HERO BANNER ================= -->
    <section class="relative min-h-[720px] flex items-center">

        <img src="/assets/images/socialmedia-banner.png" class="absolute inset-0 w-full h-full object-certain"
            alt="Social Media Marketing Banner">
        <div class="absolute inset-0"></div>

        <div class="relative max-w-7xl mx-auto px-6 w-full -mt-16 lg:-mt-24" data-aos="fade-right">
            <h1 class="text-5xl font-extrabold text-white mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                Social Media <span class="text-white"><br>Marketing</span>
            </h1>

            <!-- Sub Text -->
            <p class="text-white/90 mb-5 font-inter leading-relaxed max-w-lg">
                Stop Guessing, Start Growing: Partner with a Social Marketing Agency Focused on Your Bottom Line
            </p>

            <!-- CTA BUTTONS -->
            <div class="flex flex-col sm:flex-row gap-6
            justify-center lg:justify-start mt-10"
                data-aos="fade-up" data-aos-delay="400">

                <!-- PRIMARY BUTTON -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="group relative inline-flex items-center
              bg-white text-blue-600
              pl-6 pr-[5.5rem] py-5
              rounded-full border-2 border-blue-600
              font-semibold text-sm
              transition-all duration-300
              hover:bg-blue-600 hover:text-white
              font-inter shadow-lg">

                    <span class="whitespace-nowrap">
                        LET'S TALK
                    </span>

                    <!-- CIRCLE ICON -->
                    <span
                        class="absolute right-1 top-1/2 -translate-y-1/2
                   w-12 h-12
                   bg-blue-600 text-white
                   rounded-full
                   flex items-center justify-center
                   transition-all duration-300
                   group-hover:bg-white
                   group-hover:text-blue-600
                   group-hover:scale-105">

                        <i class="fa-solid fa-paper-plane text-sm"></i>
                    </span>
                </a>

                <!-- SECONDARY BUTTON (SAME DESIGN) -->
                <a href="{{ route('our-services') }}"
                    class="group relative inline-flex items-center
              bg-white text-blue-600
              pl-6 pr-[5.5rem] py-5
              rounded-full border-2 border-blue-600
              font-semibold text-sm
              transition-all duration-300
              hover:bg-blue-600 hover:text-white
              font-inter shadow-lg">

                    <span class="whitespace-nowrap">
                        OUR SERVICES
                    </span>

                    <!-- CIRCLE ICON -->
                    <span
                        class="absolute right-1 top-1/2 -translate-y-1/2
                   w-12 h-12
                   bg-blue-600 text-white
                   rounded-full
                   flex items-center justify-center
                   transition-all duration-300
                   group-hover:bg-white
                   group-hover:text-blue-600
                   group-hover:scale-105">

                        <i class="fa-solid fa-arrow-right text-sm"></i>
                    </span>
                </a>

            </div>
        </div>

    </section>
    <section class="relative py-20 bg-[#F9FAFB] overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 text-center">

            <!-- HEADING -->
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-14"
                style="font-family:'Montserrat Alternates', sans-serif;" data-aos="fade-up">

                Trusted By The <span class="text-blue-500">Best Companies</span> Around<br class="hidden lg:block">
                The World
            </h2>

            <!-- ICONS GRID -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-10 items-center justify-center">

                <!-- ICON 1 -->
                <div class="flex flex-col items-center gap-3 opacity-80 hover:opacity-100 transition" data-aos="fade-up"
                    data-aos-delay="0">
                    <img src="{{ asset('assets/images/age.png') }}" alt="Agency" class="h-10 object-contain">

                </div>

                <!-- ICON 2 -->
                <div class="flex flex-col items-center gap-3 opacity-80 hover:opacity-100 transition" data-aos="fade-up"
                    data-aos-delay="100">
                    <img src="{{ asset('assets/images/ven.png') }}" alt="Venture" class="h-10 object-contain">

                </div>

                <!-- ICON 3 -->
                <div class="flex flex-col items-center gap-3 opacity-80 hover:opacity-100 transition" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/images/com.png') }}" alt="Company" class="h-10 object-contain">

                </div>

                <!-- ICON 4 -->
                <div class="flex flex-col items-center gap-3 opacity-80 hover:opacity-100 transition" data-aos="fade-up"
                    data-aos-delay="300">
                    <img src="{{ asset('assets/images/app.png') }}" alt="Application" class="h-10 object-contain">

                </div>

                <!-- ICON 5 -->
                <div class="flex flex-col items-center gap-3 opacity-80 hover:opacity-100 transition" data-aos="fade-up"
                    data-aos-delay="400">
                    <img src="{{ asset('assets/images/bus.png') }}" alt="Business" class="h-10 object-contain">

                </div>

            </div>

        </div>

    </section>

    <!-- ================= WHY CHOOSE SECTION ================= -->
    <section class="py-24 bg-[#F7F9FC] overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

                <!-- LEFT IMAGE AREA -->
                <div class="relative" data-aos="fade-right">

                    <!-- Main Image -->
                    <div class="relative rounded-3xl overflow-hidden">
                        <img src="{{ asset('assets/images/media-img.png') }}" alt="Social Media Marketing"
                            class="w-full max-w-2xl h-auto object-cover rounded-3xl shadow-xl">
                    </div>


                    <!-- Vertical Label -->
                    <div
                        class="hidden lg:flex absolute -right-20 top-1/2 -translate-y-1/2
            rotate-90 tracking-[4px] text-sm font-semibold
            text-blue-600 bg-white px-6 py-3 rounded-full shadow-lg">

                        THE BEST SOCIAL MEDIA MARKETING
                    </div>

                </div>


                <!-- RIGHT CONTENT -->
                <div data-aos="fade-left">

                    <h2 class="text-4xl lg:text-5xl font-extrabold leading-tight mb-6 font-montserrat"
                        style="font-family:'Montserrat Alternates', sans-serif;">

                        Why Choose <span class="text-blue-600">Devobyte</span>
                        for Social Media Marketing?

                    </h2>

                    <p class="text-gray-600 font-inter leading-relaxed mb-8 text-lg">

                        Devobyte helps brands turn social media into a real growth channel,
                        not just a posting platform. We combine creativity, strategy,
                        and data to build a strong brand presence, engage the right audience,
                        and drive measurable results.

                        From platform-specific content to performance tracking,
                        everything we do is focused on helping your business grow
                        consistently and authentically.

                    </p>

                    <!-- CTA -->
                    <a href="{{ route('contact') }}"
                        class="inline-block bg-blue-600 text-white px-8 py-4
                  rounded-xl font-inter font-semibold transition
                  hover:scale-110 hover:bg-blue-700">

                        Lets talk
                    </a>

                </div>

            </div>
        </div>

    </section>
    <!-- ================= PROBLEM SECTION ================= -->
    <section class="relative py-14 overflow-hidden"
        style="background:url('{{ asset('assets/images/mediabg.png') }}') center/cover no-repeat;">

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT ================= -->
            <div data-aos="fade-right">

                <h2 class="text-4xl md:text-5xl leading-tight font-bold mb-8"
                    style="font-family:'Montserrat Alternates', sans-serif;">

                    Tired Of <span class="text-white">Social</span><br>
                    Media Efforts That<br>
                    Don’t Deliver?
                </h2>

                <!-- CTA -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="group relative inline-flex items-center
                bg-white text-blue-600
                pl-6 pr-[5.5rem] py-5
                rounded-full border-2 border-blue-600
                font-semibold text-sm
                transition-all duration-300
                hover:bg-blue-600 hover:text-white
                font-inter shadow-xl">

                    LET'S TALK

                    <span
                        class="absolute right-1 top-1/2 -translate-y-1/2
                    w-12 h-12 bg-blue-600 text-white rounded-full
                    flex items-center justify-center
                    transition-all duration-300
                    group-hover:bg-white group-hover:text-blue-600
                    group-hover:scale-110">

                        <i class="fa-solid fa-paper-plane text-sm"></i>
                    </span>
                </a>

                <!-- Illustration -->
                <div class="mt-14">
                    <img src="{{ asset('assets/images/cuate.png') }}" alt="Social Media Illustration"
                        class="w-[420px] max-w-full translate-y-16">
                </div>

            </div>

            <!-- ================= RIGHT : TRUE ZIG ZAG ================= -->
            <div class="relative grid grid-cols-1 sm:grid-cols-2 gap-20">

                <!-- Instagram -->
                <div data-aos="fade-up" data-aos-delay="100" class="smm-card translate-y-12">
                    <div class="smm-icon">
                        <img src="/assets/images/magnate.png" alt="Icon" class="w-7 h-7">
                    </div>
                    <h4 class="smm-title">Lack of Leads or Sales from Social?</h4>
                </div>

                <!-- Facebook -->
                <div data-aos="fade-up" data-aos-delay="200" class="smm-card">
                    <div class="smm-icon">
                        <img src="/assets/images/balance.png" alt="Icon" class="w-7 h-7">
                    </div>
                    <h4 class="smm-title">
                        Struggling to Keep Up with Trends & Platforms?</h4>
                </div>

                <!-- YouTube -->
                <div data-aos="fade-up" data-aos-delay="300" class="smm-card translate-y-12">
                    <div class="smm-icon">
                        <img src="/assets/images/groowth.png" alt="Icon" class="w-7 h-7">
                    </div>
                    <h4 class="smm-title">Unsure How to Measure Social Media ROI?</h4>
                </div>

                <!-- Twitter / X -->
                <div data-aos="fade-up" data-aos-delay="400" class="smm-card">
                    <div class="smm-icon">
                        <img src="/assets/images/idea12.png" alt="Icon" class="w-7 h-7">
                    </div>
                    <h4 class="smm-title">Lacking in creative production capabilities?</h4>
                </div>

            </div>


        </div>
    </section>

    <!-- ================= STYLES ================= -->
    <style>
        /* CARD BASE */
        .smm-card {
            background: #fff;
            border-radius: 18px;
            padding: 24px;
            border: 1px solid #eee;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
            transition: all .35s ease;
        }

        /* ICON */
        .smm-icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #eaf2ff;
            color: #2f80ed;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            font-size: 18px;
            transition: all .35s ease;
        }

        /* TITLES */
        .smm-title {
            font-weight: 700;
            /* 🔥 MORE BOLD */
            font-size: 16px;
            margin-bottom: 8px;
        }

        /* TEXT */
        .smm-text {
            font-size: 14px;
            color: #6b7280;
            transition: color .35s ease;
        }

        /* HOVER = TWITTER STYLE */
        .smm-card:hover {
            background: #2563eb;
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(47, 128, 237, .45);
        }

        .smm-card:hover .smm-title,
        .smm-card:hover .smm-text {
            color: #fff;
        }

        .smm-card:hover .smm-icon {
            background: rgba(255, 255, 255, .25);
            color: #fff;
        }

        /* ACTIVE CARD (DEFAULT BLUE) */
        .smm-card-active {
            background: #6AA9FF;
            border: none;
            box-shadow: 0 25px 60px rgba(47, 128, 237, .45);
        }

        .smm-card-active .smm-title,
        .smm-card-active .smm-text {
            color: #fff;
        }

        .smm-icon-light {
            background: rgba(255, 255, 255, .25);
            color: #fff;
        }

        /* MOBILE FIX */
        @media (max-width:640px) {
            .translate-y-6 {
                transform: none !important;
            }
        }
    </style>

    <!-- ================= AOS ================= -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120,
            easing: 'ease-out-cubic'
        });
    </script>

    <!-- ================= DELIVERS SECTION ================= -->
    <section class="relative py-20 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT IMAGE + FLOATING CARDS ================= -->
            <div class="relative inline-block" data-aos="fade-right">

                <!-- Main Image -->
                <img src="{{ asset('assets/images/Rectangle 4487.png') }}" alt="Strategic Social Media Marketing"
                    class="w-full max-w-lg rounded-3xl shadow-xl relative z-10">

                <!-- Floating Card : Drive Traffic (LEFT HALF OUTSIDE) -->
                <div class="deliver-card absolute top-1/4 -left-40 translate-x-1/8 z-20" data-aos="zoom-in"
                    data-aos-delay="150">

                    <div class="deliver-icon">
                        <img src="{{ asset('assets/images/image 315.png') }}" alt="Drive Website Traffic">
                    </div>
                    <p>Drive Website Traffic</p>
                </div>

                <!-- Floating Card : Ad Campaigns (BOTTOM HALF OUTSIDE) -->
                <div class="deliver-card absolute left-1/2 -bottom-8 -translate-x-1/2 z-20" data-aos="zoom-in"
                    data-aos-delay="300">

                    <div class="deliver-icon">
                        <img src="{{ asset('assets/images/Group 257.png') }}" alt="Powerful Ad Campaigns">
                    </div>
                    <p>Powerful Ad Campaigns</p>
                </div>

            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div data-aos="fade-left">

                <h2 class="text-4xl md:text-4xl font-bold leading-tight mb-6"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Devobyte Delivers Strategic Social Marketing That Converts
                </h2>

                <ul class="space-y-4 font-inter text-gray-600 text-base">
                    <li class="flex items-start gap-3">
                        <span class="check-dot"></span>
                        Data-Driven Strategies Tailored to Your Goals
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="check-dot"></span>
                        Expert Execution Across All Major Platforms
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="check-dot"></span>
                        Transparent Reporting Focused on Key Business Metrics
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <!-- ================= STYLES ================= -->
    <style>
        /* Floating Cards */
        .deliver-card {
            background: #ffffff;
            padding: 18px 22px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .12);
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            color: #0f172a;
            transition: all .35s ease;
            white-space: nowrap;
        }

        .deliver-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 60px rgba(37, 99, 235, .35);
        }

        .deliver-icon {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: #eaf2ff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .deliver-icon img {
            width: 22px;
        }

        /* Check dots */
        .check-dot {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #2563eb;
            margin-top: 3px;
            position: relative;
            flex-shrink: 0;
        }

        .check-dot::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 3px;
            width: 5px;
            height: 9px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        /* Responsive Fix */
        @media (max-width: 1024px) {
            .deliver-card {
                position: static !important;
                transform: none !important;
                margin-top: 16px;
            }
        }
    </style>

    <!-- ================= AOS INIT ================= -->
    <script>
        AOS.init({
            duration: 900,
            once: true,
            offset: 120,
            easing: 'ease-out-cubic'
        });
    </script>

    <!-- ================= COMPREHENSIVE SERVICES SECTION ================= -->
    <section class="relative py-24 bg-cover bg-center bg-no-repeat"
        style="background-image:url('{{ asset('assets/images/comprehensive-bg.png') }}');">

        <div class="max-w-7xl mx-auto px-6">

            <!-- ================= HEADING ================= -->
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold leading-tight"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Our Comprehensive <span class="text-blue-500">Social Media Marketing</span>
                    Services
                </h2>
            </div>

            <!-- ================= GRID ================= -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="service-number">1</div>
                    <h3>Social Media Strategy & Consulting</h3>
                    <p>
                        We focus on the platforms that matter most and build content
                        pillars that keep your feed fresh and engaging.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-number">2</div>
                    <h3>Creative Content Production</h3>
                    <p>
                        Eye-catching designs and captions that connect, spark emotion,
                        and get people talking.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-number">3</div>
                    <h3>Social Media Management</h3>
                    <p>
                        We keep your content regular, recognizable, and true to your
                        brand personality.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-number">4</div>
                    <h3>Community Engagement</h3>
                    <p>
                        We actively reply, listen, and interact—turning followers into
                        a loyal community.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="service-number">5</div>
                    <h3>Paid Social Advertising Campaigns</h3>
                    <p>
                        We run targeted paid ads with engaging creatives, smart testing,
                        and optimization to drive leads.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-number">6</div>
                    <h3>Social Selling & Outbound Engagement</h3>
                    <p>
                        We drive sales and leads through strategic social outreach and
                        leadership presence.
                    </p>
                </div>

                <!-- Card 7 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-number">7</div>
                    <h3>Social Content Production</h3>
                    <p>
                        Scroll-stopping content that’s built to perform—strategic,
                        stunning, and made for YOUR audience.
                    </p>
                </div>

                <!-- Card 8 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-number">8</div>
                    <h3>Social Selling</h3>
                    <p>
                        Empower your sales team with tools and tactics to connect,
                        nurture, and close through social.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= CUSTOM STYLES ================= -->
    <style>
        /* Card Container */
        .service-card {
            background: #ffffff;
            border-radius: 22px;
            padding: 36px 28px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .06);
            transition: all .35s ease;
            height: 100%;
            font-family: 'Inter', sans-serif;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 70px rgba(37, 99, 235, .18);
        }

        /* Number Bubble */
        .service-number {
            width: 54px;
            height: 54px;
            background: #eef6ff;
            color: #1e3a8a;
            border-radius: 50%;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            font-size: 18px;
            font-family: 'Inter', sans-serif;
        }

        /* Card Title */
        .service-card h3 {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            font-family: 'Inter', sans-serif;
        }

        /* Card Content */
        .service-card p {
            font-size: 14px;
            color: #64748b;
            line-height: 1.6;
            font-family: 'Inter', sans-serif;
        }
    </style>

    <!-- ================= AOS INIT ================= -->
    <script>
        AOS.init({
            duration: 900,
            once: true,
            easing: 'ease-out-cubic',
            offset: 120
        });
    </script>

    <!-- ================= PLATFORMS EXPERTISE SECTION ================= -->
    <section class="relative py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- ================= HEADING ================= -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold" style="font-family:'Montserrat Alternates', sans-serif;">
                    Platforms We Are Experts In
                </h2>
            </div>

            <!-- ================= CARDS GRID ================= -->
            <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto">

                <!-- Card 1 -->
                <article class="platform-card" data-aos="fade-up">

                    <img src="{{ asset('assets/images/F&I.png') }}" alt="Facebook & Instagram Marketing">


                    <div class="platform-body">
                        <h3>Facebook & Instagram</h3>
                        <p>
                            Reels and high-impact images combined with marketing
                            methods that reel viewers in and increase sales.
                        </p>
                    </div>
                </article>

                <!-- Card 2 (Highlighted Image Area) -->
                <article class="platform-card" data-aos="fade-up" data-aos-delay="150">

                    <img src="{{ asset('assets/images/linked.png') }}" alt="LinkedIn Marketing">


                    <div class="platform-body">
                        <h3>LinkedIn Marketing</h3>
                        <p>
                            Reels and high-impact images combined with marketing
                            methods that reel audiences in and increase sales.
                        </p>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="platform-card" data-aos="fade-up" data-aos-delay="300">

                    <img src="{{ asset('assets/images/googleads.png') }}" alt="Google Ads Services">


                    <div class="platform-body">
                        <h3>Google Ads</h3>
                        <p>
                            Use influencer partnerships and creative, quick-paced
                            content to engage young adult audiences.
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ================= CUSTOM STYLES ================= -->
    <style>
        /* CARD */
        .platform-card {
            border: 1.5px solid #d1d5db;
            border-radius: 18px;
            overflow: hidden;
            background: #ffffff;
            transition: all .35s ease;
            height: 100%;
        }

        .platform-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 70px rgba(0, 0, 0, .15);
        }

        /* IMAGE AREA (INSIDE CARD) */
        .platform-media {
            height: 230px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 28px;
        }

        .platform-media.bg-white {
            background: #ffffff;
        }

        .platform-media.bg-blue {
            background: #a7c7f9;
        }

        .platform-media img {
            max-height: 160px;
            max-width: 100%;
            object-fit: contain;
        }

        /* CONTENT AREA */
        .platform-body {
            padding: 24px 24px 30px;
            font-family: 'Inter', sans-serif;
        }

        .platform-body h3 {
            font-size: 20px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .platform-body p {
            font-size: 14px;
            color: #475569;
            line-height: 1.65;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .platform-media {
                height: 200px;
            }
        }
    </style>

    <!-- ================= AOS INIT ================= -->
    <script>
        AOS.init({
            duration: 900,
            once: true,
            easing: 'ease-out-cubic',
            offset: 120
        });
    </script>

    <!-- ================= LEVERAGE CTA SECTION ================= -->
<section class="relative py-3 bg-white">
    <div class="max-w-7xl mx-auto">

        <!-- CTA WRAPPER -->
        <div class="relative rounded-[32px] overflow-hidden bg-cover bg-center"
             style="background-image:url('{{ asset('assets/images/laverage.png') }}');"
             data-aos="fade-up">

            <div class="grid lg:grid-cols-2 items-center gap-6 px-8 py-8">

                <!-- ================= LEFT IMAGE ================= -->
                <div class="flex justify-center lg:justify-start" data-aos="fade-right">
    <img src="{{ asset('assets/images/lavrage-left.png') }}"
         alt="Social Media Audience Engagement Illustration"
         class="max-w-xs max-h-40 w-auto">
</div>


                <!-- ================= RIGHT CONTENT ================= -->
                <div class="text-white max-w-xl" data-aos="fade-left">

                    <h2 class="text-2xl md:text-3xl font-bold leading-snug mb-5"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        Ready To Leverage Social Media To Connect
                        With Your Audience?
                    </h2>

                    <!-- CTA BUTTON -->
                    <a href="#contact"
                       class="inline-flex items-center gap-3 bg-white text-blue-600 font-semibold px-5 py-2.5 rounded-full transition-all duration-300 hover:gap-5 hover:shadow-xl"
                       style="font-family:'Inter', sans-serif;">

                        LET’S TALK

                        <span class="w-9 h-9 rounded-full bg-blue-500 text-white flex items-center justify-center">
                            →
                        </span>
                    </a>

                </div>

            </div>
        </div>

    </div>
</section>

<!-- ================= AOS INIT ================= -->
<script>
    AOS.init({
        duration: 900,
        once: true,
        easing: 'ease-out-cubic',
        offset: 120
    });
</script>


<!-- ================= FAQ SECTION ================= -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- LEFT CARD (UNCHANGED) -->
            <div data-aos="fade-right" class="rounded-3xl overflow-hidden shadow-xl">

                <div class="bg-blue-400 text-white p-10 text-center">
                    <h3 class="text-2xl font-bold mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                        Ask the Help Community<br>Write Now!
                    </h3>
                    <div class="text-4xl mb-3">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <p class="text-sm opacity-90" style="font-family:'Inter', sans-serif;">
                        Get Answers<br>
                        <a href="mailto:sarfraz.khan@devobyte.com">sarfraz.khan@devobyte.com</a>
                    </p>
                </div>

                <div class="bg-gray-100 p-10 text-center">
                    <h4 class="text-xl font-bold mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                        Still have Questions?<br>Call Now!
                    </h4>
                    <div class="text-blue-500 text-3xl mb-2">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <p class="text-gray-600 text-sm mb-1">Call Anytime</p>
                    <p class="font-bold text-lg">+91 95821 18311</p>
                </div>

            </div>

            <!-- RIGHT FAQ ACCORDION -->
            <div class="lg:col-span-2 space-y-5" data-aos="fade-left">

                @php
                    $faqs = [
                        [
                            'q' => 'How soon will someone from Devobyte contact me after I submit the form?',
                            'a' =>
                                'Once you submit the contact form, our team usually reaches out within 24 business hours via call or email to understand your requirements and take the discussion forward.',
                        ],
                        [
                            'q' => 'What details should I share to get an accurate quote or proposal?',
                            'a' => 'To give you the best solution and pricing, it helps if you share your business goals, required services, timelines, and budget range. Don’t worry—if you’re unsure, we’ll guide you during the first call.
',
                        ],
                        [
                            'q' => 'Do you work with startups, small businesses, or large enterprises?',
                            'a' =>
                                'Yes, we work with startups, SMEs, and growing enterprises. Our solutions are scalable and customized based on your stage, industry, and growth objectives.',
                        ],
                        [
                            'q' => 'Can I book a consultation call before starting the project?',
                            'a' =>
                                'Absolutely. We offer a free initial consultation call where we understand your needs, suggest the right approach, and answer all your questions—no commitment required.',
                        ],
                        [
                            'q' => 'What services can be discussed during the first call with Devobyte?',
                            'a' =>
                                'In the first call, we can discuss IT services (website/app development, custom solutions, AI automation) as well as marketing services (SEO, social media, lead generation, performance marketing, LinkedIn marketing)—based on what your business needs most.',
                        ],
                    ];
                @endphp

                @foreach ($faqs as $faq)
                    <div class="faq-item bg-white border rounded-xl shadow-sm overflow-hidden">

                        <!-- QUESTION -->
                        <button type="button"
                            class="faq-toggle w-full flex justify-between items-center
                               px-6 py-6 text-left
                               font-semibold text-[18px] md:text-[19px]
                               transition"
                            style="font-family:'Inter', sans-serif;">

                            {{ $faq['q'] }}

                            <span
                                class="faq-icon
                                     w-9 h-9 flex items-center justify-center
                                     bg-gray-100 text-gray-700
                                     rounded-full text-xl transition">
                                +
                            </span>
                        </button>

                        <!-- ANSWER -->
                        <div class="faq-content hidden px-6 pb-6
                                text-gray-600 text-[15px] md:text-[16px]
                                leading-relaxed"
                            style="font-family:'Inter', sans-serif;">
                            {{ $faq['a'] }}
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- ================= FAQ SCRIPT (SINGLE OPEN) ================= -->
<script>
    document.querySelectorAll('.faq-toggle').forEach(button => {
        button.addEventListener('click', () => {

            const currentItem = button.closest('.faq-item');
            const currentContent = currentItem.querySelector('.faq-content');
            const currentIcon = currentItem.querySelector('.faq-icon');

            // Close all others
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== currentItem) {
                    item.querySelector('.faq-content').classList.add('hidden');
                    const icon = item.querySelector('.faq-icon');
                    icon.textContent = '+';
                    icon.classList.remove('bg-blue-500', 'text-white');
                    icon.classList.add('bg-gray-100', 'text-gray-700');
                }
            });

            // Toggle current
            const isOpen = !currentContent.classList.contains('hidden');

            if (isOpen) {
                currentContent.classList.add('hidden');
                currentIcon.textContent = '+';
                currentIcon.classList.remove('bg-blue-500', 'text-white');
                currentIcon.classList.add('bg-gray-100', 'text-gray-700');
            } else {
                currentContent.classList.remove('hidden');
                currentIcon.textContent = '−';
                currentIcon.classList.remove('bg-gray-100', 'text-gray-700');
                currentIcon.classList.add('bg-blue-500', 'text-white');
            }
        });
    });
</script>

@endsection

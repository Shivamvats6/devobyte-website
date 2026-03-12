@extends('layouts.app')

@section('title', 'LinkedIn Lead Generation | Devobyte Innovators')
@section('meta_description',
    'Drive predictable revenue growth with our fully managed LinkedIn lead generation service.
    100% done-for-you by Devobyte Innovators.')

@section('content')

    <!-- ================= LINKEDIN HERO SECTION ================= -->
    <section class="relative overflow-hidden bg-[#F8FAFF] pt-32 pb-28">

        <!-- Decorative background shapes (same Figma style) -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-50 rounded-full"></div>
            <div class="absolute top-20 right-0 w-72 h-72 bg-blue-50 rounded-full"></div>
            <div class="absolute bottom-0 left-1/3 w-80 h-80 bg-blue-50 rounded-full"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-6 text-center" data-aos="fade-up">

            <!-- Main Heading -->
            <h1 class="text-3xl md:text-5xl lg:text-5xl font-bold leading-tight text-[#0A0F2C]"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Drive predictable revenue growth<br>
                with our fully managed
                <span class="text-blue-500">LinkedIn<br class="hidden md:block"> lead generation</span>
                service. 100% done-for-you.
            </h1>

            <!-- Sub Text -->
            <p class="mt-6 max-w-3xl mx-auto text-gray-500 text-sm md:text-base leading-relaxed">
                <span class="text-blue-500 font-medium">Devobyte</span> uses data from thousands of outbound B2B campaigns
                to send proven, personalized messages to your dream clients on LinkedIn — getting positive responses
                straight to your inbox.
            </p>

            <!-- CTA Button -->
            <div class="mt-10">
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold shadow-lg transition-all duration-300 hover:scale-105">
                    Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>

    </section>
    <!-- ================= END LINKEDIN HERO SECTION ================= -->

    <!-- ================= ABOUT LINKEDIN SERVICE SECTION ================= -->
    <section class="relative py-24 bg-white overflow-hidden" data-aos="fade-up">

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-14 items-center">

            <!-- LEFT CONTENT -->
            <div data-aos="fade-right">

                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    About <span class="text-blue-500">LinkedIn</span><br>
                    <span class="text-blue-400">Service</span>
                </h2>

                <p class="text-gray-600 text-base leading-relaxed max-w-xl">
                    Devobyte helps B2B companies generate high-quality leads using LinkedIn outreach strategies.
                    Our fully managed service handles targeting, messaging, follow-ups and appointment booking –
                    so you only focus on closing deals and scaling revenue.
                </p>

                <p class="text-gray-600 text-base leading-relaxed mt-4 max-w-xl">
                    We use data-driven campaigns, personalized messaging and smart automation to connect you
                    directly with decision makers and potential clients on LinkedIn.
                </p>

            </div>

            <!-- RIGHT IMAGE AREA -->
            <div class="relative flex justify-center lg:justify-end" data-aos="fade-left">

                <!-- Main Platform Image (NO BORDER / NO SHADOW) -->
                <div class="relative z-10">
                    <img src="{{ asset('assets/images/platform.png') }}" alt="LinkedIn Lead Generation Platform"
                        loading="lazy" class="w-full max-w-xl object-contain">
                </div>

                <!-- Floating Tag -->
                <div class="absolute right-0 top-1/2 -translate-y-1/2 hidden lg:block">
                    <div class="bg-white shadow-lg rounded-full px-4 py-10 flex items-center justify-center rotate-90">
                        <span class="text-blue-500 font-semibold tracking-widest text-xs">
                            LINKEDIN PLATFORM
                        </span>
                    </div>
                </div>

            </div>


        </div>

    </section>

    <!-- ================= HOW WE GENERATE LEADS SECTION ================= -->
    <!-- ================= HOW WE GENERATE LEADS SECTION ================= -->
    <section class="relative py-28 bg-[#219BE4]/10 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 text-center">

            <!-- HEADING -->
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3"
                style="font-family:'Montserrat Alternates', sans-serif;" data-aos="fade-up">
                How We Generate <span class="text-blue-500">Leads For Clients</span>
            </h2>

            <p class="max-w-3xl mx-auto text-gray-600  text-sm lg:text-base" data-aos="fade-up" data-aos-delay="100">
                We leverage high performing data from executing thousands of successful LinkedIn campaigns in every industry
                to target & engage your most qualified decision makers, driving them directly into your sales funnel.
            </p>

            <!-- DESKTOP ZIGZAG FLOW -->
            <div class="relative hidden lg:block">

                <!-- DOTTED ZIGZAG LINE (CENTER ALIGNED WITH ICONS) -->
                <svg class="absolute top-[140px] left-0 w-full h-48 pointer-events-none" viewBox="0 70 950 100"
                    preserveAspectRatio="none">
                    <path d="M100 80 L350 160 L600 80 L850 160" fill="none" stroke="#3B82F6" stroke-width="1"
                        stroke-dasharray="6,6" />
                </svg>

                <!-- STEPS GRID -->
                <div class="grid grid-cols-4 gap-16 relative z-10">

                    <!-- STEP 1 (ICON TOP, TEXT BOTTOM) -->
                    <div class="flex flex-col items-center justify-end mb-12" data-aos="fade-right">

                        <img src="{{ asset('assets/images/one.png') }}" alt="Find Prospects" class="w-32 h-32 mb-6">

                        <h3 class="font-extrabold text-2xl mb-2 text-gray-900"
                            style="font-family:'Montserrat Alternates', sans-serif;">
                            Find Prospects
                        </h3>

                        <p class="text-sm text-gray-600 text-center max-w-xs">
                            We build targeted and qualified lists of your ideal prospects on LinkedIn.
                        </p>
                    </div>

                    <!-- STEP 2 (TEXT TOP, ICON BOTTOM) -->
                    <div class="flex flex-col items-center mt-40" data-aos="fade-up">

                        <h3 class="font-extrabold text-2xl mb-2 text-gray-900"
                            style="font-family:'Montserrat Alternates', sans-serif;">
                            Write Messages
                        </h3>

                        <p class="text-sm text-gray-600 text-center max-w-xs mb-1">
                            Write clear and personal cold outreach messages that actually get responses.
                        </p>

                        <img src="{{ asset('assets/images/two.png') }}" alt="Write Messages" class="w-32 h-32">
                    </div>

                    <!-- STEP 3 (ICON TOP, TEXT BOTTOM) -->
                    <div class="flex flex-col items-center justify-end mb-12" data-aos="fade-up" data-aos-delay="100">

                        <img src="{{ asset('assets/images/three.png') }}" alt="Execute Outreach" class="w-32 h-32 mb-6">

                        <h3 class="font-extrabold text-2xl mb-2 text-gray-900"
                            style="font-family:'Montserrat Alternates', sans-serif;">
                            Execute Outreach
                        </h3>

                        <p class="text-sm text-gray-600 text-center max-w-xs">
                            Send custom messages to thousands of your ideal prospects every month.
                        </p>
                    </div>

                    <!-- STEP 4 (TEXT TOP, ICON BOTTOM) -->
                    <div class="flex flex-col items-center mt-40" data-aos="fade-left">

                        <h3 class="font-extrabold text-2xl mb-2 text-gray-900"
                            style="font-family:'Montserrat Alternates', sans-serif;">
                            Close Deals
                        </h3>

                        <p class="text-sm text-gray-600 text-center max-w-xs mb-8">
                            You're instantly notified when leads respond, for you to close the deal.
                        </p>

                        <img src="{{ asset('assets/images/four.png') }}" alt="Close Deals" class="w-32 h-32">
                    </div>

                </div>
            </div>

            <!-- MOBILE VERSION (CLEAN STACK) -->
            <div class="lg:hidden space-y-16">

                <div class="flex flex-col items-center" data-aos="fade-up">
                    <img src="{{ asset('assets/images/one.png') }}" class="w-24 h-24 mb-4">
                    <h3 class="font-extrabold text-lg mb-2" style="font-family:'Montserrat Alternates', sans-serif;">Find
                        Prospects</h3>
                    <p class="text-sm text-gray-600 text-center">
                        We build targeted and qualified lists of your ideal prospects on LinkedIn.
                    </p>
                </div>

                <div class="flex flex-col items-center" data-aos="fade-up">
                    <img src="{{ asset('assets/images/two.png') }}" class="w-24 h-24 mb-4">
                    <h3 class="font-extrabold text-lg mb-2" style="font-family:'Montserrat Alternates', sans-serif;">Write
                        Messages</h3>
                    <p class="text-sm text-gray-600 text-center">
                        Write clear and personal cold outreach messages that actually get responses.
                    </p>
                </div>

                <div class="flex flex-col items-center" data-aos="fade-up">
                    <img src="{{ asset('assets/images/three.png') }}" class="w-24 h-24 mb-4">
                    <h3 class="font-extrabold text-lg mb-2" style="font-family:'Montserrat Alternates', sans-serif;">
                        Execute Outreach</h3>
                    <p class="text-sm text-gray-600 text-center">
                        Send custom messages to thousands of your ideal prospects every month.
                    </p>
                </div>

                <div class="flex flex-col items-center" data-aos="fade-up">
                    <img src="{{ asset('assets/images/four.png') }}" class="w-24 h-24 mb-4">
                    <h3 class="font-extrabold text-lg mb-2" style="font-family:'Montserrat Alternates', sans-serif;">Close
                        Deals</h3>
                    <p class="text-sm text-gray-600 text-center">
                        You're instantly notified when leads respond, for you to close the deal.
                    </p>
                </div>

            </div>

            <!-- CTA -->
            <div class="mt-24" data-aos="zoom-in">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2
              bg-blue-500 text-white
              px-8 py-3 rounded-lg
              font-semibold shadow-lg
              transition-all duration-300 ease-out
              transform hover:scale-110 hover:-translate-y-1
              hover:bg-blue-600 hover:shadow-2xl">

                    Free Consultation
                    <i class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>

        </div>

    </section>


    <!-- ================= LINKEDIN FEATURES SECTION ================= -->
    <section class="relative py-24 bg-white overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT FEATURES GRID ================= -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8" data-aos="fade-right">

                <!-- BOX 1 -->
                <div class="feature-box">
                    <img src="{{ asset('assets/images/list.png') }}" alt="Prospect list building" class="feature-icon">

                    <h4 class="feature-title">Prospect list building</h4>
                </div>

                <!-- BOX 2 -->
                <div class="feature-box">
                    <img src="{{ asset('assets/images/copywrite.png') }}" alt="A/B tested copywriting"
                        class="feature-icon">

                    <h4 class="feature-title">A/B tested copywriting</h4>
                </div>

                <!-- BOX 3 -->
                <div class="feature-box">
                    <img src="{{ asset('assets/images/outreach.png') }}" alt="Personalized outreach"
                        class="feature-icon">

                    <h4 class="feature-title">Personalized outreach</h4>
                </div>

                <!-- BOX 4 -->
                <div class="feature-box">
                    <img src="{{ asset('assets/images/content.png') }}" alt="LinkedIn content" class="feature-icon">

                    <h4 class="feature-title">LinkedIn content</h4>
                </div>

            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div class="text-left" data-aos="fade-left">

                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight mb-6"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    10X your <span class="text-blue-500">LinkedIn sales outreach</span>, productivity,<br>
                    and results
                </h2>

                <p class="text-gray-500 text-base lg:text-lg leading-relaxed mb-10 max-w-xl">
                    The power of a dedicated LinkedIn SDR at an affordable cost. Our job is to increase your productivity
                    and return on investment while generating you qualified leads.
                </p>

                <!-- CTA BUTTON -->
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2
                      border border-blue-500 text-blue-500
                      px-8 py-3 rounded-lg font-semibold
                      transition-all duration-300 ease-out
                      transform hover:scale-110 hover:-translate-y-1
                      hover:bg-blue-500 hover:text-white hover:shadow-xl">

                    Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

        <!-- ================= CUSTOM STYLES ================= -->
        <style>
            /* FEATURE BOX STYLE */
            .feature-box {
                background: #ffffff;
                padding: 28px 26px;
                border-radius: 14px;

                /* 🔥 Only RIGHT + BOTTOM border */
                border-right: 2px solid #e5efff;
                border-bottom: 2px solid #e5efff;

                /* 🔥 Only RIGHT + BOTTOM shadow */
                box-shadow: 8px 8px 25px rgba(33, 155, 228, 0.12);

                transition: all 0.35s ease;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            /* Hover Effect */
            .feature-box:hover {
                transform: scale(1.06) translateY(-6px);
                box-shadow: 14px 14px 40px rgba(33, 155, 228, 0.25);
            }

            /* ICON STYLE (NO BG, NO ROUND) */
            .feature-icon {
                width: 54px;
                height: auto;
            }

            /* TITLE STYLE */
            .feature-title {
                font-size: 17px;
                font-weight: 600;
                color: #111827;
                font-family: 'Inter', sans-serif;
            }

            /* MOBILE FIX */
            @media (max-width: 768px) {
                .feature-box {
                    align-items: center;
                    text-align: center;
                }

                .feature-title {
                    font-size: 16px;
                }
            }
        </style>

    </section>

    <!-- ================= EXPERTS IMAGE SECTION ================= -->
    <section class="relative py-32 h-[120vh] flex justify-center items-end mt-20 bg-cover bg-center overflow-visible"
        style="background-image: url('{{ asset('assets/images/hero-image.jpg') }}');">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-black/10"></div>

        <div class="absolute sm:left-10  top-[-50px] max-w-7xl mx-auto px-6 flex items-start h-full">

            <!-- CONTENT CARD -->
            <div class="relative lg:absolute
                    top-0 lg:top-[-30px] left-0
                    bg-white rounded-2xl shadow-2xl p-10 lg:p-12
                    w-full lg:w-[520px]
                    ml-0 lg:ml-10
                    z-20"
                data-aos="fade-right">

                <!-- HEADING -->
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-snug mb-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">

                    Leverage the top
                    <span class="text-blue-500">LinkedIn marketing experts</span>
                    to actually drive closed deals

                </h2>

                <!-- SUB TEXT -->
                <p class="text-gray-600 text-sm lg:text-base mb-8">
                    Crafting the right LinkedIn outreach strategy takes continuous optimization.
                    Let our experts help you discover hidden sales opportunities so you can close more deals.
                </p>

                <!-- FEATURES LIST -->
                <div class="space-y-8">

                    <!-- ITEM 1 -->
                    <div class="flex gap-4 items-start" data-aos="fade-up">

                        <img src="{{ asset('assets/images/Container.png') }}" alt="Attract hot leads"
                            class="w-8 h-8 mt-1">

                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">
                                Attract hundreds of hot leads on LinkedIn
                            </h4>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                Once your campaign has started, you can then expect dozens or even hundreds of hot leads per
                                month, all generated on auto-pilot.
                            </p>
                        </div>
                    </div>

                    <!-- ITEM 2 -->
                    <div class="flex gap-4 items-start" data-aos="fade-up" data-aos-delay="100">

                        <img src="{{ asset('assets/images/expert.png') }}" alt="LinkedIn selling expert"
                            class="w-8 h-8 mt-1">

                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">
                                Learn how to be an expert at LinkedIn selling
                            </h4>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                We’re more than just a LinkedIn lead generation tool. We’ll teach you all our best practices
                                when it comes to closing deals on LinkedIn.
                            </p>
                        </div>
                    </div>

                    <!-- ITEM 3 -->
                    <div class="flex gap-4 items-start" data-aos="fade-up" data-aos-delay="200">

                        <img src="{{ asset('assets/images/tie.png') }}" alt="Dedicated account managers"
                            class="w-8 h-8 mt-1">

                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">
                                U.S. based dedicated Account Managers
                            </h4>
                            <p class="text-sm text-gray-500 leading-relaxed">
                                We are committed to your success and will support you through weekly reporting, monthly
                                strategy calls and ongoing campaign improvements.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- CTA BUTTON (ABSOLUTE BOTTOM CENTER) -->
        <div class="z-30 sm:mb-0 mb-5" data-aos="zoom-in">

            <a href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-600
                      text-white px-10 py-3 rounded-full font-semibold
                      shadow-xl transition-all duration-300 hover:scale-110">

                Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>



    </section>



    <!-- ================= LINKEDIN 4 AREAS SECTION ================= -->
    <section class="relative py-24 bg-white overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <!-- LEFT CONTENT -->
                <div data-aos="fade-right">

                    <h2 class="text-3xl lg:text-4xl xl:text-4xl font-bold leading-tight mb-6"
                        style="font-family:'Montserrat Alternates', sans-serif;">

                        We help turn your <br>
                        <span class="text-sky-400">LinkedIn into a revenue</span><br>
                        driving machine in <br>
                        these 4 areas

                    </h2>

                    <p class="text-gray-600 max-w-md leading-relaxed">
                        Turn your LinkedIn profile into a lead converting sales machine.
                        Our simple to use features combined with our done-for-you
                        services will enable you to generate and close deals faster.
                    </p>

                </div>

                <!-- RIGHT CARDS -->
                <div class="space-y-6">

                    <!-- CARD 1 -->
                    <div class="bg-pink-50 rounded-2xl p-6 flex gap-4 shadow-sm
                            transition-all duration-300 hover:scale-[1.03] hover:shadow-lg"
                        data-aos="fade-up">

                        <img src="{{ asset('assets/images/optimization.png') }}" alt="LinkedIn Profile Optimization"
                            class="w-10 h-10 object-contain">

                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">
                                LinkedIn Profile Optimization
                            </h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                A well-crafted LinkedIn profile can make a world of difference.
                                We’ll position you as an industry leader with a polished presence
                                so you can present yourself to attract qualified ready-to-convert leads.
                            </p>
                        </div>

                    </div>

                    <!-- CARD 2 -->
                    <div class="bg-sky-50 rounded-2xl p-6 flex gap-4 shadow-sm
                            transition-all duration-300 hover:scale-[1.03] hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="100">

                        <img src="{{ asset('assets/images/generation.png') }}" alt="LinkedIn Lead Generation"
                            class="w-10 h-10 object-contain">

                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">
                                LinkedIn Lead Generation
                            </h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                We’ll build your ideal audience with authentic conversations at scale.
                                Every day, your profile will automatically send out targeted and
                                personalized messages to your ideal prospects, we’ll even guide you on how to respond.
                            </p>
                        </div>

                    </div>

                    <!-- CARD 3 -->
                    <div class="bg-orange-50 rounded-2xl p-6 flex gap-4 shadow-sm
                            transition-all duration-300 hover:scale-[1.03] hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="200">

                        <img src="{{ asset('assets/images/ghost.png') }}" alt="LinkedIn Content & Ghostwriting"
                            class="w-10 h-10 object-contain">

                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">
                                LinkedIn Content & Ghostwriting
                            </h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Your voice, your stories, and our expertise all come together to drive
                                tangible business results. We craft every post to position you as an
                                industry influencer to attract qualified sales leads and more business opportunities.
                            </p>
                        </div>

                    </div>

                    <!-- CARD 4 -->
                    <div class="bg-green-50 rounded-2xl p-6 flex gap-4 shadow-sm
                            transition-all duration-300 hover:scale-[1.03] hover:shadow-lg"
                        data-aos="fade-up" data-aos-delay="300">

                        <img src="{{ asset('assets/images/sales.png') }}" alt="LinkedIn Sales Strategy"
                            class="w-10 h-10 object-contain">

                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">
                                LinkedIn Sales Strategy
                            </h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Our team of seasoned account managers will teach you systems to track
                                & respond to all qualified leads, continuing to make improvements based
                                on real-time data.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= LINKEDIN MARKETING PRICING SECTION ================= -->
    <section class="relative py-24 bg-[#050B14] overflow-hidden">
        <div class="max-w-5xl mx-auto px-1">

            <!-- ================= SECTION HEADER ================= -->
            <div class="text-center mb-14" data-aos="fade-up">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Simple Pricing, <span class="text-[#4F9CFF]">Powerful Outreach</span>
                </h2>

                <p class="text-gray-400 max-w-2xl mx-auto text-base" style="font-family: 'Inter', sans-serif;">
                    Simple pricing meets powerful cold email tools like AI personalization,
                    unlimited sending, and email warmup.
                </p>
            </div>

            <!-- ================= OUTER BORDER WRAPPER ================= -->
            <div class="relative border-[8px] border-[#1F3B6E] rounded-3xl p-4 bg-[#070D1A]">

                <!-- ================= PRICING CARDS ================= -->
                <div class="grid lg:grid-cols-3 gap-1 justify-items-center">

                    <!-- ================= CARD 1 (NO BORDER) ================= -->
                    <div
                        class="group relative bg-[#0B1220] rounded-3xl px-6 py-6
                            w-[300px] min-h-[480px]
                            transition-all duration-500
                            hover:-translate-y-12 hover:shadow-2xl
                            hover:bg-gradient-to-br hover:from-[#72B3FF] hover:to-[#6158ED]">

                        <h4 class="text-white text-base font-semibold mb-1 group-hover:text-white">Beginner</h4>
                        <h3 class="text-4xl font-bold text-white mb-1 group-hover:text-white">$297/month</h3>
                        <p class="text-gray-400 text-sm mb-6 group-hover:text-white">(300 Prospect Per Month)</p>

                        <ul class="space-y-4 mb-8 text-sm">
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Handling of 1 LinkedIn Account
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                3 Active Campaigns
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Creating Prospect List
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Creating Outreach Messages
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Sending Follow up Messages
                            </li>
                        </ul>

                        <a href="javascript:void(0)" onclick="openContactPopup()"
                            class="block w-full mt-auto text-center py-2.5 rounded-xl text-large
                              font-bold border border-[#4F9CFF] text-[#4F9CFF]
                              transition-all duration-300
                              group-hover:bg-white group-hover:text-[#1B2A4A]">
                            Get Started Now
                        </a>
                    </div>

                    <!-- ================= CARD 2 (ONLY BORDERED – CENTER) ================= -->
                    <div
                        class="group relative bg-[#0B1220] rounded-3xl px-6 py-6
                            w-[300px] min-h-[480px]
                            border-[8px] border-[#1F3B6E]
                            transition-all duration-500
                            hover:-translate-y-12 hover:shadow-2xl
                            hover:bg-gradient-to-br hover:from-[#72B3FF] hover:to-[#6158ED]">

                        <!-- Badge -->
                        <div
                            class="absolute -top-4 right-4 bg-white text-[#1B2A4A]
                                text-xs font-bold px-3 py-1 rounded-full shadow">
                            Most Popular
                        </div>

                        <h4 class="text-white text-base font-semibold mb-1 group-hover:text-white">Advance</h4>
                        <h3 class="text-4xl font-bold text-white mb-1 group-hover:text-white">$497/month</h3>
                        <p class="text-gray-400 text-sm mb-6 group-hover:text-white">(600 Prospect Per Month)</p>

                        <ul class="space-y-4 mb-8 text-sm">
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Handling of 2 LinkedIn Account
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                5 Active Campaigns
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Creating Prospect List
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Creating Outreach Messages
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Sending Follow up Messages
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Dedicated Account Manager
                            </li>
                        </ul>

                        <a href="javascript:void(0)" onclick="openContactPopup()"
                            class="block w-full mt-auto text-center py-2.5 rounded-xl text-large
                              font-bold border border-[#4F9CFF] text-[#4F9CFF]
                              transition-all duration-300
                              group-hover:bg-white group-hover:text-[#1B2A4A]">
                            Get Started Now
                        </a>
                    </div>

                    <!-- ================= CARD 3 (NO BORDER) ================= -->
                    <div
                        class="group relative bg-[#0B1220] rounded-3xl px-6 py-6
                            w-[300px] min-h-[480px]
                            transition-all duration-500
                            hover:-translate-y-12 hover:shadow-2xl
                            hover:bg-gradient-to-br hover:from-[#72B3FF] hover:to-[#6158ED]">

                        <h4 class="text-white text-base font-semibold mb-1 group-hover:text-white">Pro</h4>
                        <h3 class="text-4xl font-bold text-white mb-1 group-hover:text-white">$797/month</h3>
                        <p class="text-gray-400 text-sm mb-6 group-hover:text-white">(1200 Prospect Per Month)</p>

                        <ul class="space-y-4 mb-8 text-sm">
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Handling of 4 LinkedIn Account
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                10 Active Campaigns
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Creating Prospect List
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Sending Follow up Messages
                            </li>
                            <li class="flex items-start text-gray-300 group-hover:text-white">
                                <span
                                    class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                    <i class="fa-solid fa-check text-white text-xs"></i>
                                </span>
                                Content Calendar Research
                            </li>


                        </ul>

                        <a href="javascript:void(0)" onclick="openContactPopup()"
                            class="block w-full mt-auto text-center py-2.5 rounded-xl text-large
                              font-bold border border-[#4F9CFF] text-[#4F9CFF]
                              transition-all duration-300
                              group-hover:bg-white group-hover:text-[#1B2A4A]">
                            Get Started Now
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- ================= TESTIMONIAL SECTION ================= -->

    <section class="relative py-28 overflow-hidden bg-white" data-aos="fade-up">

        <!-- BACKGROUND TEXTURE -->
        <img src="/assets/images/Bg Textures.png" alt="Background Texture"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- CONTENT -->
        <div class="relative max-w-7xl mx-auto px-6">

            <!-- HEADING -->
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-extrabold" style="font-family:'Montserrat Alternates', sans-serif;">
                    What People Think <span class="text-blue-500">About Us?</span>
                </h2>
            </div>

            <!-- CARDS (AOS ONLY HERE) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center" data-aos="fade-up" data-aos-delay="150">

                <!-- CARD -->
                <div class="testimonial-card">

                    <div class="quote-outer">
                        <div class="quote-wrap">
                            <img src="/assets/images/Icon (4).png" alt="quote">
                        </div>
                    </div>

                    <div class="stars">★★★★★</div>

                    <p class="text">
                        There are many variations of passages of Lorem Ipsum is available,
                        but the majority have suffered alteration in form by injected humour
                    </p>

                    <div class="user-box">
                        <img src="/assets/images/Img (2).png" alt="James">
                        <div>
                            <h4>James</h4>
                            <span>CEO & FOUNDER AT ECO</span>
                        </div>
                    </div>
                </div>

                <!-- CARD -->
                <div class="testimonial-card">

                    <div class="quote-outer">
                        <div class="quote-wrap">
                            <img src="/assets/images/Icon (4).png" alt="quote">
                        </div>
                    </div>

                    <div class="stars">★★★★★</div>

                    <p class="text">
                        There are many variations of passages of Lorem Ipsum is available,
                        but the majority have suffered alteration in form by injected humour
                    </p>

                    <div class="user-box">
                        <img src="/assets/images/Img (3).png" alt="Kathryn Murphy">
                        <div>
                            <h4>Kathryn Murphy</h4>
                            <span>CEO & FOUNDER AT ECO</span>
                        </div>
                    </div>
                </div>

                <!-- CARD -->
                <div class="testimonial-card">

                    <div class="quote-outer">
                        <div class="quote-wrap">
                            <img src="/assets/images/Icon (4).png" alt="quote">
                        </div>
                    </div>

                    <div class="stars">★★★★★</div>

                    <p class="text">
                        There are many variations of passages of Lorem Ipsum is available,
                        but the majority have suffered alteration in form by injected humour
                    </p>

                    <div class="user-box">
                        <img src="/assets/images/Img (4).png" alt="Theresa Webb">
                        <div>
                            <h4>Theresa Webb</h4>
                            <span>CEO & FOUNDER AT ECO</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= CUSTOM CSS ================= -->
    <style>
        .testimonial-card {
            position: relative;
            background: #ffffff;
            border-radius: 22px;
            padding: 68px 38px 44px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            transition:
                transform 0.45s ease,
                box-shadow 0.45s ease,
                background 0.45s ease;
            cursor: pointer;
            will-change: transform;
        }

        /* QUOTE OUTER */
        .quote-outer {
            position: absolute;
            top: -26px;
            left: 46%;
            width: 55px;
            height: 55px;
            background: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* QUOTE ICON */
        .quote-wrap {
            width: 48px;
            height: 48px;
            background: #2F80ED;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quote-wrap img {
            width: 22px;
            filter: brightness(0) invert(1);
        }

        /* STARS */
        .stars {
            color: #2F80ED;
            letter-spacing: 3px;
            margin-bottom: 24px;
            font-size: 20px;
            font-weight: 700;
        }

        /* TEXT */
        .testimonial-card .text {
            font-size: 15px;
            font-weight: 600;
            color: #555;
            line-height: 1.75;
            margin-bottom: 34px;
        }

        /* USER BOX */
        .user-box {
            display: flex;
            align-items: center;
            gap: 14px;
            justify-content: center;
            padding: 12px 18px;
            border: 1px solid #e5e7eb;
            border-radius: 999px;
            background: #e5e7eb;
            transition: all 0.3s ease;
        }

        .user-box img {
            width: 46px;
            height: 46px;
            border-radius: 50%;
        }

        .user-box h4 {
            font-size: 16px;
            font-weight: 700;
            margin: 0;
            color: #111;
        }

        .user-box span {
            font-size: 11px;
            color: #555;
        }

        /* 🔥 REAL HOVER ZOOM + LIFT */
        .testimonial-card:hover {
            background: #2F80ED;
            transform: translateY(-18px) scale(1.06);
            box-shadow: 0 50px 100px rgba(47, 128, 237, 0.45);
        }

        .testimonial-card:hover .stars {
            color: #ffffff;
        }

        .testimonial-card:hover .text {
            color: #eaf1ff;
        }

        .testimonial-card:hover .user-box {
            background: #ffffff;
            border-color: #ffffff;
        }

        .testimonial-card:hover h4 {
            color: #111;
        }

        .testimonial-card:hover span {
            color: #4b5563;
        }

        /* MOBILE FIX */
        @media (max-width: 768px) {
            .quote-outer {
                left: 50%;
                transform: translateX(-50%);
            }

            .testimonial-card {
                padding: 64px 26px 38px;
            }
        }
    </style>
    <!-- ================= READY FOR NEXT PROJECT CTA ================= -->
    <section class="relative py-20 overflow-hidden" style="background: linear-gradient(120deg, #123E73, #2F80ED);">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

                <!-- LEFT CONTENT -->
                <div class="text-white max-w-xl" data-aos="fade-right">

                    <h2 class="text-3xl lg:text-4xl font-bold leading-tight mb-4"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        Ready for Your <br>
                        <span class="text-sky-300">Next Project?</span>
                    </h2>

                    <p class="text-white/80 text-sm lg:text-base mb-6">
                        Our clients trusted us – now it’s your turn to experience the same quality.
                    </p>

                    <!-- PEOPLE IMAGE -->
                    <div class="flex items-center gap-3">

                        <img src="{{ asset('assets/images/peoples.png') }}" alt="Happy Clients"
                            class="h-10 object-contain">

                        <span class="text-white/80 text-sm">
                            and others
                        </span>

                    </div>
                </div>

                <!-- RIGHT BUTTON -->
                <div data-aos="fade-left">

                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center
                          border border-white/60 text-white
                          px-8 py-3 rounded-lg font-semibold
                          transition-all duration-300
                          hover:bg-white hover:text-blue-600
                          hover:scale-110 hover:-translate-y-1
                          shadow-lg">

                        Contact Us Now

                    </a>

                </div>

            </div>

        </div>

    </section>
    <!-- ================= CASE STUDIES SECTION ================= -->
    <section class="relative py-24 bg-cover bg-center"
        style="background-image: url('{{ asset('assets/images/casebg.png') }}');">

        <div class="max-w-7xl mx-auto px-6">

            <!-- HEADER -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-14 gap-6">

                <h2 class="text-3xl lg:text-4xl font-bold text-blue-500"
                    style="font-family:'Montserrat Alternates', sans-serif;" data-aos="fade-right">
                    Case Studies
                </h2>

                <a href="#"
                    class="group flex items-center gap-3 bg-white px-6 py-3 rounded-full
                      shadow-md hover:shadow-xl transition-all duration-300
                      hover:scale-105"
                    data-aos="fade-left">

                    <span class="text-sm font-semibold text-blue-600">
                        VIEW ALL CASE
                    </span>

                    <span
                        class="w-9 h-9 bg-blue-500 text-white rounded-full
                             flex items-center justify-center
                             transition group-hover:rotate-45">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>

                    </span>
                </a>

            </div>

            <!-- CARDS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- CARD 1 -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2 overflow-hidden"
                    data-aos="fade-up">

                    <img src="{{ asset('assets/images/post1.png') }}" alt="Smartbox Media Inc"
                        class="w-full h-56 object-cover">

                    <div class="p-6">

                        <span
                            class="inline-block text-xs px-4 py-1 rounded-full
                                 bg-blue-50 text-blue-500 mb-4">
                            Information Technology
                        </span>

                        <h3 class="text-lg font-bold text-gray-900 mb-6">
                            Smartbox Media Inc
                        </h3>

                        <div class="flex justify-between items-center border-t pt-4">

                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/images/lora.png') }}" alt="Lora Admin"
                                    class="w-10 h-10 rounded-full object-cover">

                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Admin</p>
                                    <p class="text-xs text-gray-500">Lora</p>
                                </div>
                            </div>

                            <a href="#"
                                class="w-10 h-10 bg-blue-50 hover:bg-blue-500
                                  text-blue-500 hover:text-white
                                  rounded-lg flex items-center justify-center
                                  transition-all duration-300">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2 overflow-hidden"
                    data-aos="fade-up" data-aos-delay="100">

                    <img src="{{ asset('assets/images/post2.png') }}" alt="GHC" class="w-full h-56 object-cover">

                    <div class="p-6">

                        <span
                            class="inline-block text-xs px-4 py-1 rounded-full
                                 bg-blue-50 text-blue-500 mb-4">
                            Beauty And Healthcare
                        </span>

                        <h3 class="text-lg font-bold text-gray-900 mb-6">
                            GHC
                        </h3>

                        <div class="flex justify-between items-center border-t pt-4">

                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/images/lora.png') }}" alt="Lora Admin"
                                    class="w-10 h-10 rounded-full object-cover">

                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Admin</p>
                                    <p class="text-xs text-gray-500">Lora</p>
                                </div>
                            </div>

                            <a href="#"
                                class="w-10 h-10 bg-blue-50 hover:bg-blue-500
                                  text-blue-500 hover:text-white
                                  rounded-lg flex items-center justify-center
                                  transition-all duration-300">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2 overflow-hidden"
                    data-aos="fade-up" data-aos-delay="200">

                    <img src="{{ asset('assets/images/post3.png') }}" alt="Media Inc" class="w-full h-56 object-cover">

                    <div class="p-6">

                        <span
                            class="inline-block text-xs px-4 py-1 rounded-full
                                 bg-blue-50 text-blue-500 mb-4">
                            Information Technology
                        </span>

                        <h3 class="text-lg font-bold text-gray-900 mb-6">
                            Media Inc
                        </h3>

                        <div class="flex justify-between items-center border-t pt-4">

                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/images/lora.png') }}" alt="Lora Admin"
                                    class="w-10 h-10 rounded-full object-cover">

                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Admin</p>
                                    <p class="text-xs text-gray-500">Lora</p>
                                </div>
                            </div>

                            <a href="#"
                                class="w-10 h-10 bg-blue-50 hover:bg-blue-500
                                  text-blue-500 hover:text-white
                                  rounded-lg flex items-center justify-center
                                  transition-all duration-300">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

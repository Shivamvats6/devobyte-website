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
            style="font-family:'Montserrat Alternates', sans-serif;"
            data-aos="fade-up">
            How We Generate <span class="text-blue-500">Leads For Clients</span>
        </h2>

        <p class="max-w-3xl mx-auto text-gray-600  text-sm lg:text-base"
           data-aos="fade-up" data-aos-delay="100">
            We leverage high performing data from executing thousands of successful LinkedIn campaigns in every industry to target & engage your most qualified decision makers, driving them directly into your sales funnel.
        </p>

        <!-- DESKTOP ZIGZAG FLOW -->
        <div class="relative hidden lg:block">

            <!-- DOTTED ZIGZAG LINE (CENTER ALIGNED WITH ICONS) -->
            <svg class="absolute top-[140px] left-0 w-full h-48 pointer-events-none"
                 viewBox="0 70 950 100" preserveAspectRatio="none">
                <path d="M100 80 L350 160 L600 80 L850 160"
                      fill="none"
                      stroke="#3B82F6"
                      stroke-width="2"
                      stroke-dasharray="6,6" />
            </svg>

            <!-- STEPS GRID -->
            <div class="grid grid-cols-4 gap-16 relative z-10">

                <!-- STEP 1 (ICON TOP, TEXT BOTTOM) -->
                <div class="flex flex-col items-center justify-end mb-12" data-aos="fade-right">

                    <img src="{{ asset('assets/images/one.png') }}"
                         alt="Find Prospects"
                         class="w-24 h-24 mb-6">

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

                    <img src="{{ asset('assets/images/two.png') }}"
                         alt="Write Messages"
                         class="w-24 h-24">
                </div>

                <!-- STEP 3 (ICON TOP, TEXT BOTTOM) -->
                <div class="flex flex-col items-center justify-end mb-12" data-aos="fade-up" data-aos-delay="100">

                    <img src="{{ asset('assets/images/three.png') }}"
                         alt="Execute Outreach"
                         class="w-24 h-24 mb-6">

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

                    <img src="{{ asset('assets/images/four.png') }}"
                         alt="Close Deals"
                         class="w-24 h-24">
                </div>

            </div>
        </div>

        <!-- MOBILE VERSION (CLEAN STACK) -->
        <div class="lg:hidden space-y-16">

            <div class="flex flex-col items-center" data-aos="fade-up">
                <img src="{{ asset('assets/images/one.png') }}" class="w-24 h-24 mb-4">
                <h3 class="font-extrabold text-lg mb-2" style="font-family:'Montserrat Alternates', sans-serif;">Find Prospects</h3>
                <p class="text-sm text-gray-600 text-center">
                    We build targeted and qualified lists of your ideal prospects on LinkedIn.
                </p>
            </div>

            <div class="flex flex-col items-center" data-aos="fade-up">
                <img src="{{ asset('assets/images/two.png') }}" class="w-24 h-24 mb-4">
                <h3 class="font-extrabold text-lg mb-2" style="font-family:'Montserrat Alternates', sans-serif;">Write Messages</h3>
                <p class="text-sm text-gray-600 text-center">
                    Write clear and personal cold outreach messages that actually get responses.
                </p>
            </div>

            <div class="flex flex-col items-center" data-aos="fade-up">
                <img src="{{ asset('assets/images/three.png') }}" class="w-24 h-24 mb-4">
                <h3 class="font-extrabold text-lg mb-2" style="font-family:'Montserrat Alternates', sans-serif;">Execute Outreach</h3>
                <p class="text-sm text-gray-600 text-center">
                    Send custom messages to thousands of your ideal prospects every month.
                </p>
            </div>

            <div class="flex flex-col items-center" data-aos="fade-up">
                <img src="{{ asset('assets/images/four.png') }}" class="w-24 h-24 mb-4">
                <h3 class="font-extrabold text-lg mb-2" style="font-family:'Montserrat Alternates', sans-serif;">Close Deals</h3>
                <p class="text-sm text-gray-600 text-center">
                    You're instantly notified when leads respond, for you to close the deal.
                </p>
            </div>

        </div>

        <!-- CTA -->
        <div class="mt-24" data-aos="zoom-in">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold shadow-lg transition-all duration-300">
                Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>

</section>





@endsection

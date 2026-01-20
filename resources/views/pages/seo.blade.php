@extends('layouts.app')

@section('content')

@section('title', 'SEO Services – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[620px] flex items-center overflow-hidden">

    <!-- Background Image -->
    <img src="/assets/images/seo.png" class="absolute inset-0 w-full h-full object-cover" alt="SEO Banner">

    <!-- Overlay if needed -->
    <div class="absolute inset-0"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full pt-20" data-aos="fade-right">

        <!-- HEADING -->
        <h1 class="text-5xl lg:text-6xl font-extrabold text-white mb-12 leading-tight"
            style="font-family:'Montserrat Alternates', sans-serif;">
            Search Engine <span class="text-blue-400"><br>Optimization</span>
        </h1>

        <!-- CTA BUTTONS -->
        <div class="flex flex-col sm:flex-row gap-6
            justify-center lg:justify-start mt-6" data-aos="fade-up"
            data-aos-delay="400">

            <!-- PRIMARY BUTTON -->
            <a href="javascript:void(0)" onclick="openContactPopup()"
                class="group relative inline-flex items-center
              bg-white text-blue-600
              pl-6 pr-[5.5rem] py-5
              rounded-full
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
            <a href="javascript:void(0)" onclick="openContactPopup()"
                class="group relative inline-flex items-center
              bg-white text-blue-600
              pl-6 pr-[5.5rem] py-5
              rounded-full
              font-semibold text-sm
              transition-all duration-300
              hover:bg-blue-600 hover:text-white
              font-inter shadow-lg">

                <span class="whitespace-nowrap">
                    GET QUOTE
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

<!-- ================= SEO GROWTH SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT: GRAPH IMAGE ================= -->
            <div class="relative" data-aos="fade-right">

                <img src="/assets/images/graph.png" alt="SEO Growth Graph"
                    class="w-full max-w-md mx-auto lg:mx-0
                            drop-shadow-xl">

            </div>

            <!-- ================= RIGHT: CONTENT ================= -->
            <div class="relative z-10" data-aos="fade-left">

                <!-- Heading -->
                <h2 class="text-3xl sm:text-4xl xl:text-5xl
                           font-extrabold leading-tight mb-6"
                    style="font-family:'Montserrat Alternates', sans-serif;">

                    Helping Your Brand<br>
                    Grow in the <span class="text-blue-500">Digital World</span>
                </h2>

                <!-- Description -->
                <p class="text-gray-600 leading-relaxed max-w-xl mb-8 font-inter">
                    From the first click to the final conversion, we create meaningful digital
                    experiences that connect your business with the right customers and drive
                    measurable growth.
                </p>

                <!-- CTA -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="inline-flex items-center
                          bg-blue-500 text-white
                          px-8 py-4
                          rounded-full
                          font-semibold text-sm
                          transition-all duration-300
                          hover:bg-blue-600
                          shadow-lg
                          font-inter">

                    Let’s talk
                </a>

                <!-- ================= ROCKET IMAGE ================= -->
                <img src="/assets/images/rocket.png" alt="Rocket Illustration"
                    class="absolute -bottom-16 right-0
                            w-32 sm:w-40 lg:w-44
                            animate-float
                            pointer-events-none"
                    data-aos="zoom-in" data-aos-delay="300">

            </div>

        </div>

    </div>

</section>

<!-- ================= SEO EXPLAINER SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden"
    style="background-color:#2F80ED; background-image:url('/assets/images/seo_bg.png');
         background-size:cover; background-position:center;">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ================= TOP ROW ================= -->
        <div class="flex flex-col lg:flex-row items-center justify-between mb-12 gap-6">

            <!-- Heading -->
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white leading-tight font-montserrat"
                data-aos="fade-right">
                Grow Your Website Traffic<br>
                Make Business Faster
            </h2>

            <!-- Button -->
            <a href="javascript:void(0)" onclick="openContactPopup()"
                class="inline-flex items-center justify-center
                      bg-white text-blue-600
                      px-8 py-3
                      rounded-full
                      font-semibold text-sm
                      transition-all duration-300
                      hover:bg-blue-600 hover:text-white
                      shadow-lg
                      font-inter"
                data-aos="fade-left">
                Talk Now
            </a>
        </div>

        <!-- ================= WHITE CARD ================= -->
        <div class="relative bg-white rounded-[32px] shadow-2xl p-6 sm:p-10 lg:p-14" data-aos="zoom-in">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- ================= LEFT IMAGE ================= -->
                <div class="relative" data-aos="fade-right" data-aos-delay="150">

                    <img src="/assets/images/seo_image.png" alt="SEO Illustration"
                        class="w-full max-w-md mx-auto lg:mx-0
                                rounded-2xl
                                shadow-lg">

                </div>

                <!-- ================= RIGHT CONTENT ================= -->
                <div class="relative z-10" data-aos="fade-left" data-aos-delay="200">

                    <h3 class="text-2xl sm:text-3xl xl:text-4xl
                               font-extrabold mb-4
                               text-gray-900
                               leading-tight"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        How Search Engine Optimization Helps You?
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-6 font-inter">
                        Search Engine Optimization (SEO) is a strategic process that helps your website rank
                        higher on search engines like Google, allowing potential customers to find your business
                        easily and organically. At Devobyte, we build SEO systems that drive consistent traffic,
                        qualified leads, and long-term brand authority.
                    </p>

                    <!-- POINTS -->
                    <ul class="space-y-3 mb-8 font-inter">

                        <li class="flex items-start gap-3">
                            <span
                                class="w-5 h-5 mt-1 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs">
                                ✓
                            </span>
                            <span class="text-gray-700">Improves online visibility and search presence</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span
                                class="w-5 h-5 mt-1 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs">
                                ✓
                            </span>
                            <span class="text-gray-700">Generates high-quality, intent-driven leads</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span
                                class="w-5 h-5 mt-1 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs">
                                ✓
                            </span>
                            <span class="text-gray-700">Builds long-term brand trust & credibility</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span
                                class="w-5 h-5 mt-1 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs">
                                ✓
                            </span>
                            <span class="text-gray-700">Enhances user experience & engagement</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span
                                class="w-5 h-5 mt-1 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs">
                                ✓
                            </span>
                            <span class="text-gray-700">Delivers measurable, long-term business growth</span>
                        </li>

                    </ul>

                    <!-- CTA BUTTON -->
                    <a href="javascript:void(0)" onclick="openContactPopup()"
                        class="inline-flex items-center
                              bg-blue-500 text-white
                              px-8 py-4
                              rounded-full
                              font-semibold text-sm
                              transition-all duration-300
                              hover:bg-blue-600
                              shadow-lg
                              font-inter">
                        Let’s Talk
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= SEO SERVICES INCLUDE SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden"
    style="background:url('/assets/images/seo1.png') center/cover no-repeat;">

    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-16" data-aos="fade-up">

            <p class="uppercase tracking-widest text-white/70 text-sm mb-2 font-inter">
                Service
            </p>

            <h2 class="text-3xl sm:text-4xl xl:text-5xl
                       font-extrabold text-white leading-tight"
                style="font-family:'Montserrat Alternates', sans-serif;">
                What is Included in Search<br>
                Engine Optimization Service
            </h2>

        </div>

        <!-- ================= CARDS ================= -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- ================= CARD 1 ================= -->
            <div class="group bg-white rounded-3xl p-8
                        transition-all duration-300
                        hover:bg-blue-500 hover:shadow-2xl
                        relative overflow-hidden"
                data-aos="fade-up" data-aos-delay="100">

                <!-- ICON -->
                <div
                    class="w-14 h-14 mb-6
                            rounded-full bg-blue-50
                            flex items-center justify-center
                            transition-all duration-300
                            group-hover:bg-white/20">

                    <img src="/assets/images/search_icon.png" alt="Organic Search" class="w-7 h-7">
                </div>

                <h3
                    class="text-xl font-bold mb-3
                           text-gray-900
                           transition-all duration-300
                           group-hover:text-white font-montserrat">
                    Organic Search
                </h3>

                <p
                    class="text-gray-600 leading-relaxed
                          transition-all duration-300
                          group-hover:text-white/90 font-inter">
                    Organic search is the traffic your website gets naturally from search engines without paid ads.
                    It helps attract relevant users, build trust, and deliver long-term, cost-effective visibility.
                </p>

            </div>

            <!-- ================= CARD 2 (ACTIVE BLUE) ================= -->
            <div class="group bg-white rounded-3xl p-8
                        transition-all duration-300
                        hover:bg-blue-500 hover:shadow-2xl
                        relative overflow-hidden"
                data-aos="fade-up" data-aos-delay="200">

                <!-- ICON -->
                <div
                    class="w-14 h-14 mb-6
                            rounded-full bg-blue-50
                            flex items-center justify-center
                            transition-all duration-300
                            group-hover:bg-white/20">

                    <img src="/assets/images/content-writing 1.png" alt="On Page SEO" class="w-7 h-7">
                </div>

                <h3
                    class="text-xl font-bold mb-3
                           text-gray-900
                           transition-all duration-300
                           group-hover:text-white font-montserrat">
                    On-Page SEO
                </h3>

                <p
                    class="text-gray-600 leading-relaxed
                          transition-all duration-300
                          group-hover:text-white/90 font-inter">
                    On-page SEO focuses on optimizing individual web pages to rank higher in search results. It includes
                    improving content quality, keywords, meta tags, headings, internal links, and page speed.
                </p>

            </div>

            <!-- ================= CARD 3 ================= -->
            <div class="group bg-white rounded-3xl p-8
                        transition-all duration-300
                        hover:bg-blue-500 hover:shadow-2xl
                        relative overflow-hidden"
                data-aos="fade-up" data-aos-delay="300">

                <!-- ICON -->
                <div
                    class="w-14 h-14 mb-6
                            rounded-full bg-blue-50
                            flex items-center justify-center
                            transition-all duration-300
                            group-hover:bg-white/20">

                    <img src="/assets/images/seo_icon.png" alt="Link Building" class="w-7 h-7">
                </div>

                <h3
                    class="text-xl font-bold mb-3
                           text-gray-900
                           transition-all duration-300
                           group-hover:text-white font-montserrat">
                    Link Building
                </h3>

                <p
                    class="text-gray-600 leading-relaxed
                          transition-all duration-300
                          group-hover:text-white/90 font-inter">
                    Link building is the process of earning high-quality backlinks from trusted websites. These links
                    help improve your site’s authority, boost rankings, and increase organic traffic.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= SEO WORK PROCESS SECTION ================= -->
<section class="relative py-10 lg:py-14 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-12" data-aos="fade-up">

            <p class="uppercase tracking-widest text-blue-500 text-sm mb-2 font-inter">
                Work Process
            </p>

            <h2 class="text-2xl sm:text-3xl xl:text-4xl
                       font-extrabold text-gray-900 leading-tight"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Let’s Learn Approach to<br>
                Search Engine Optimization
            </h2>

        </div>

        <!-- ================= PROCESS WRAPPER ================= -->
        <div class="relative">

            <!-- ================= DESKTOP LAYOUT (ONE LINE) ================= -->
            <div class="hidden lg:grid grid-cols-[1fr_auto_1fr_auto_1fr] gap-8 items-start">

                <!-- ================= CARD 1 ================= -->
                <div class="group relative bg-white rounded-[28px] shadow-xl overflow-hidden
                            transition-all duration-300 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="100">

                    <!-- TOP BLUE BAR -->
                    <div class="relative bg-blue-500 text-white px-6 py-5 rounded-t-[28px] overflow-hidden">

                        <!-- BACKGROUND IMAGE -->
                        <img src="/assets/images/onboarding.png" alt="Client Onboarding"
                            class="absolute right-3 top-3 w-24 h-24 object-contain opacity-100 pointer-events-none">

                        <div class="flex items-center gap-4 relative z-10">

                            <div
                                class="w-10 h-10 rounded-full bg-white text-blue-600
                                        flex items-center justify-center font-bold">
                                01
                            </div>

                            <h3 class="text-lg font-semibold font-inter leading-tight">
                                Client <br> Onboarding
                            </h3>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6 text-gray-600 font-inter">
                        Included meetings and questionnaires to gather key information
                        about your business, goals, target audience, and competitors.
                    </div>

                </div>

                <!-- ================= ARROW 1 ================= -->
                <div class="flex items-center justify-center mt-20" data-aos="fade-up" data-aos-delay="150">
                    <svg width="70" height="24" viewBox="0 0 70 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12 H52" stroke="#2F80ED" stroke-width="3" />
                        <path d="M52 2 L70 12 L52 22" fill="#2F80ED" />
                    </svg>
                </div>

                <!-- ================= CARD 2 ================= -->
                <div class="group relative bg-white rounded-[28px] shadow-xl overflow-hidden
                            transition-all duration-300 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="200">

                    <!-- TOP BLUE BAR -->
                    <div class="relative bg-blue-500 text-white px-6 py-5 rounded-t-[28px] overflow-hidden">

                        <!-- BACKGROUND IMAGE -->
                        <img src="/assets/images/setup.png" alt="Campaign Setup"
                            class="absolute right-3 top-3 w-24 h-24 object-contain opacity-20 pointer-events-none">

                        <div class="flex items-center gap-4 relative z-10">

                            <div
                                class="w-10 h-10 rounded-full bg-white text-blue-600
                                        flex items-center justify-center font-bold">
                                02
                            </div>

                            <h3 class="text-lg font-semibold font-inter leading-tight">
                                Campaign <br> Setup
                            </h3>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6 text-gray-600 font-inter">
                        Setup of SEO campaigns including keyword research, technical audits,
                        content planning, and implementation strategies for optimal performance.
                    </div>

                </div>

                <!-- ================= ARROW 2 ================= -->
                <div class="flex items-center justify-center mt-20" data-aos="fade-up" data-aos-delay="250">
                    <svg width="70" height="24" viewBox="0 0 70 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12 H52" stroke="#2F80ED" stroke-width="3" />
                        <path d="M52 2 L70 12 L52 22" fill="#2F80ED" />
                    </svg>
                </div>

                <!-- ================= CARD 3 ================= -->
                <div class="group relative bg-white rounded-[28px] shadow-xl overflow-hidden
                            transition-all duration-300 hover:shadow-2xl"
                    data-aos="fade-up" data-aos-delay="300">

                    <!-- TOP BLUE BAR -->
                    <div class="relative bg-blue-500 text-white px-6 py-5 rounded-t-[28px] overflow-hidden">

                        <!-- BACKGROUND IMAGE -->
                        <img src="/assets/images/reporting.png" alt="Reporting & Insights"
                            class="absolute right-3 top-3 w-24 h-24 object-contain opacity-100 pointer-events-none">

                        <div class="flex items-center gap-4 relative z-10">

                            <div
                                class="w-10 h-10 rounded-full bg-white text-blue-600
                                        flex items-center justify-center font-bold">
                                03
                            </div>

                            <h3 class="text-lg font-semibold font-inter leading-tight">
                                Reporting & <br> Insights
                            </h3>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6 text-gray-600 font-inter">
                        A comprehensive performance report is delivered outlining traffic growth,
                        keyword improvements, conversions, ROI, and actionable insights.
                    </div>

                </div>

            </div>

            <!-- ================= MOBILE LAYOUT (STACKED) ================= -->
            <div class="grid grid-cols-1 gap-8 lg:hidden">

                <!-- CARD 1 -->
                <div class="group relative bg-white rounded-[28px] shadow-xl overflow-hidden" data-aos="fade-up">

                    <div class="relative bg-blue-500 text-white px-6 py-5 rounded-t-[28px] overflow-hidden">
                        <img src="/assets/images/onboarding.png"
                            class="absolute right-3 top-3 w-20 h-20 object-contain opacity-100 pointer-events-none">

                        <div class="flex items-center gap-4 relative z-10">
                            <div
                                class="w-10 h-10 rounded-full bg-white text-blue-600 flex items-center justify-center font-bold">
                                01</div>
                            <h3 class="text-lg font-semibold font-inter">Client Onboarding</h3>
                        </div>
                    </div>

                    <div class="p-6 text-gray-600 font-inter">
                        Included meetings and questionnaires to gather key information about your business, goals,
                        target audience, and competitors.
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="group relative bg-white rounded-[28px] shadow-xl overflow-hidden" data-aos="fade-up"
                    data-aos-delay="100">

                    <div class="relative bg-blue-500 text-white px-6 py-5 rounded-t-[28px] overflow-hidden">
                        <img src="/assets/images/setup.png"
                            class="absolute right-3 top-3 w-20 h-20 object-contain opacity-100 pointer-events-none">

                        <div class="flex items-center gap-4 relative z-10">
                            <div
                                class="w-10 h-10 rounded-full bg-white text-blue-600 flex items-center justify-center font-bold">
                                02</div>
                            <h3 class="text-lg font-semibold font-inter">Campaign Setup</h3>
                        </div>
                    </div>

                    <div class="p-6 text-gray-600 font-inter">
                        Setup of SEO campaigns including keyword research, technical audits, content planning, and
                        implementation strategies for optimal performance.
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="group relative bg-white rounded-[28px] shadow-xl overflow-hidden" data-aos="fade-up"
                    data-aos-delay="200">

                    <div class="relative bg-blue-500 text-white px-6 py-5 rounded-t-[28px] overflow-hidden">
                        <img src="/assets/images/reporting.png"
                            class="absolute right-3 top-3 w-20 h-20 object-contain opacity-100 pointer-events-none">

                        <div class="flex items-center gap-4 relative z-10">
                            <div
                                class="w-10 h-10 rounded-full bg-white text-blue-600 flex items-center justify-center font-bold">
                                03</div>
                            <h3 class="text-lg font-semibold font-inter">Reporting & Insights</h3>
                        </div>
                    </div>

                    <div class="p-6 text-gray-600 font-inter">
                        A comprehensive performance report is delivered outlining traffic growth, keyword improvements,
                        conversions, ROI, and actionable insights.
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= CASE STUDY RESULT SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ================= TOP BAR ================= -->
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 mb-14"
            data-aos="fade-up">

            <div>
                <h2 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold text-gray-900 leading-tight mb-2"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Result in Previous Case Study.
                </h2>

                <p class="text-gray-600 font-inter">
                    <span class="font-bold text-gray-900">80%</span> <br>Our Clients Double Revenue Generate in the
                    First 05 Month
                </p>
            </div>

            <!-- Button -->
            <a href="javascript:void(0)" onclick="openContactPopup()"
                class="inline-flex items-center justify-center
                      bg-white text-blue-600 border border-blue-500
                      px-8 py-3
                      rounded-full
                      font-semibold text-sm
                      transition-all duration-300
                      hover:bg-blue-500 hover:text-white
                      shadow-sm
                      font-inter">
                Talk Now
            </a>
        </div>

        <!-- ================= CONTENT GRID ================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-stretch">

            <!-- ================= LEFT BIG IMAGE ================= -->
            <div class="relative rounded-3xl overflow-hidden group h-[520px]" data-aos="fade-right">

                <!-- IMAGE -->
                <img src="/assets/images/Rectangle 4581.png" alt="Case Study" class="w-full h-full object-cover">

                <!-- GRADIENT OVERLAY -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#489CFF] via-[#489CFF]/60 to-transparent"></div>

                <!-- TEXT OVERLAY -->
                <div class="absolute bottom-0 left-0 p-8 text-white z-10">

                    <h3 class="text-2xl font-bold mb-2 font-montserrat">
                        Revamping Brand Identity
                    </h3>

                    <p class="text-white/90 mb-4 font-inter">
                        Success Story.
                    </p>

                    <a href="#"
                        class="inline-flex items-center gap-3 text-white font-semibold text-sm transition-all duration-300 group-hover:gap-4">

                        <!-- UNDERLINE ONLY TEXT -->
                        <span class="underline underline-offset-4">
                            READ CASE STUDY
                        </span>

                        <!-- BOLD CIRCLE + BOLD ARROW (NO UNDERLINE) -->
                        <span
                            class="w-11 h-11 rounded-full border-2 border-white
                                     flex items-center justify-center
                                     transition-all duration-300
                                     group-hover:bg-white group-hover:text-blue-600
                                     font-extrabold text-lg no-underline">
                            →
                        </span>
                    </a>

                </div>

            </div>

            <!-- ================= RIGHT STACKED SQUARE IMAGES ================= -->
            <div class="grid grid-rows-2 gap-8 h-[520px]">

                <!-- IMAGE 1 -->
                <div class="relative rounded-3xl overflow-hidden" data-aos="fade-left" data-aos-delay="100">

                    <img src="/assets/images/Rectangle 4582.png" alt="Team Work" class="w-full h-full object-cover">

                    <!-- subtle network overlay -->
                    <div class="absolute inset-0 bg-black/30"></div>
                </div>

                <!-- IMAGE 2 -->
                <div class="relative rounded-3xl overflow-hidden" data-aos="fade-left" data-aos-delay="200">

                    <img src="/assets/images/Rectangle 4582.png" alt="Team Work" class="w-full h-full object-cover">

                    <!-- subtle network overlay -->
                    <div class="absolute inset-0 bg-black/30"></div>
                </div>

            </div>

        </div>

    </div>

</section>

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

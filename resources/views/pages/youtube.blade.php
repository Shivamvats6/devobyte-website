@extends('layouts.app')

@section('title', 'YouTube Marketing – Devobyte')

@section('content')

    <!-- ================= HERO BANNER ================= -->
    <section class="relative h-screen min-h-[100vh] w-full overflow-hidden">

        <!-- Background Image -->
        <img src="/assets/images/youtube.png" class="absolute w-full h-full object-cover object-center top-0 left-0 z-0"
            alt="Custom Software Banner">



        <!-- Content -->
        <div class="relative z-10 h-full flex items-center">

            <div class="max-w-7xl mx-auto px-6 w-full">

                <div class="max-w-2xl" data-aos="fade-right">

                    <!-- HEADING -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-5xl
                           font-extrabold text-black leading-tight mb-8"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        Grow Your <span class="text-blue-400">YouTube Channel</span> faster
                    </h1>

                    <!-- SUB TEXT (optional but recommended) -->
                    <p class="text-black text-lg mb-10 font-inter font-semibold leading-relaxed">
                        Turn views into subscribers and subscribers into revenue with data-driven YouTube marketing.
                    </p>

                    <!-- CTA BUTTONS -->
                    <div class="flex flex-col sm:flex-row gap-5">

                        <!-- PRIMARY BUTTON -->
                        <a href="javascript:void(0)" onclick="openContactPopup()"
                            class="group relative inline-flex items-center
                              bg-white text-blue-600
                              pl-6 pr-[5.5rem] py-4
                              rounded-full
                              font-semibold text-sm
                              transition-all duration-300
                              hover:bg-blue-600 hover:text-white
                              font-inter shadow-xl">

                            <span class="font-bold text-lg whitespace-nowrap">
                                LET'S TALK
                            </span>

                            <!-- CIRCLE ICON -->
                            <span
                                class="absolute right-1 top-1/2 -translate-y-1/2
                                   w-11 h-11
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

                        <!-- SECONDARY BUTTON -->
                        <a href="{{ route('our-services') }}"
                            class="group relative inline-flex items-center
                              bg-white text-blue-600
                              pl-6 pr-[5.5rem] py-4
                              rounded-full
                              font-semibold text-sm
                              transition-all duration-300
                              hover:bg-blue-600 hover:text-white
                              font-inter shadow-xl">

                            <span class="text-lg font-bold whitespace-nowrap">
                                Boost My Channel Now
                            </span>

                            <!-- CIRCLE ICON -->
                            <span
                                class="absolute right-1 top-1/2 -translate-y-1/2
                                   w-11 h-11
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

            </div>

        </div>

    </section>
    <!-- ================= YOUTUBE PROBLEMS SECTION ================= -->
    <section class="relative py-24 bg-cover bg-center bg-no-repeat overflow-hidden"
        style="background-image: url('{{ asset('assets/images/problems.png') }}');">

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <!-- HEADING -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-3"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Facing These <span class="text-blue-500">YouTube</span> Problems?
                </h2>
                <p class="text-gray-600 text-lg font-medium">
                    Devobyte helps creators & brands fix this.
                </p>
            </div>

            <!-- PROBLEMS GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">

                <!-- Problem 1 -->
                <div class="problem-card" data-aos="fade-up">
                    <div class="problem-icon">
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>
                    <h4>Low Views</h4>
                    <p>Low views even after quality content</p>
                </div>

                <!-- Problem 2 -->
                <div class="problem-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="problem-icon">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <h4>No Growth</h4>
                    <p>Subscribers not increasing</p>
                </div>

                <!-- Problem 3 -->
                <div class="problem-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="problem-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4>Not Ranking</h4>
                    <p>Videos not ranking or getting suggested</p>
                </div>

                <!-- Problem 4 -->
                <div class="problem-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="problem-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h4>Low Watch Time</h4>
                    <p>Low watch time & CTR</p>
                </div>

            </div>

            <!-- CTA BUTTON -->
            <div class="flex justify-center" data-aos="zoom-in">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center bg-blue-500 text-white
                      px-8 py-4 rounded-lg font-semibold shadow-lg
                      transition-transform duration-300 ease-in-out
                      hover:scale-110 hover:shadow-2xl">
                    Let's Talk
                </a>
            </div>

        </div>

        <!-- STYLES -->
        <style>
            .problem-card {
                background: rgba(255, 255, 255, 0.95);
                border-radius: 16px;
                padding: 36px 20px;
                text-align: center;
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
                transition: all .35s ease;
                min-height: 170px;
                border: 1px solid rgba(59, 130, 246, 0.12);
            }

            .problem-card:hover {
                transform: translateY(-10px) scale(1.05);
                box-shadow: 0 22px 45px rgba(59, 130, 246, 0.25);
            }

            .problem-icon {
                width: 48px;
                height: 48px;
                background: linear-gradient(135deg, #3B82F6, #60A5FA);
                color: white;
                font-size: 22px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 16px;
                box-shadow: 0 10px 20px rgba(59, 130, 246, 0.35);
            }

            .problem-card h4 {
                font-size: 17px;
                font-weight: 700;
                color: #1F2937;
                margin-bottom: 8px;
            }

            .problem-card p {
                font-size: 14.5px;
                color: #4B5563;
                font-weight: 500;
                line-height: 1.5;
                margin: 0;
            }

            /* Mobile Adjustments */
            @media (max-width: 768px) {
                .problem-card {
                    padding: 28px 18px;
                    min-height: auto;
                }

                .problem-icon {
                    width: 52px;
                    height: 52px;
                    font-size: 20px;
                }

                .problem-card h4 {
                    font-size: 16px;
                }

                .problem-card p {
                    font-size: 14px;
                }
            }
        </style>

    </section>

    <!-- ================= YOUTUBE SERVICES SECTION ================= -->
    <section class="relative py-24 bg-cover bg-center bg-no-repeat overflow-hidden"
        style="background-image: url('{{ asset('assets/images/red.png') }}');">

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT IMAGE -->
                <div class="flex justify-center" data-aos="fade-right">
                    <img src="{{ asset('assets/images/youtubeleft.png') }}" alt="YouTube Marketing Services Devobyte"
                        class="w-full max-w-lg lg:max-w-xl xl:max-w-2xl drop-shadow-2xl">
                </div>

                <!-- RIGHT CONTENT -->
                <div>

                    <!-- HEADING -->
                    <div class="mb-12" data-aos="fade-up">
                        <h2 class="text-3xl lg:text-5xl font-bold text-white mb-3"
                            style="font-family:'Montserrat Alternates', sans-serif;">
                            Our YouTube Marketing Services
                        </h2>
                        <p class="text-white/80 text-lg font-medium max-w-xl">
                            AI-powered strategies to grow your YouTube channel faster & smarter.
                        </p>
                    </div>

                    <!-- SERVICES GRID -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                        <!-- Service 1 -->
                        <div class="yt-service-card" data-aos="zoom-in">
                            <div class="yt-service-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h4>YouTube Channel Audit & Strategy</h4>
                            <p>Complete analysis & growth roadmap for your channel.</p>
                        </div>

                        <!-- Service 2 -->
                        <div class="yt-service-card" data-aos="zoom-in" data-aos-delay="100">
                            <div class="yt-service-icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <h4>SEO-Optimized Titles & Descriptions</h4>
                            <p>Rank higher with keyword-optimized metadata.</p>
                        </div>

                        <!-- Service 3 -->
                        <div class="yt-service-card" data-aos="zoom-in" data-aos-delay="200">
                            <div class="yt-service-icon">
                                <i class="fa-solid fa-image"></i>
                            </div>
                            <h4>High-CTR Thumbnail Strategy</h4>
                            <p>Eye-catching thumbnails that increase clicks.</p>
                        </div>

                        <!-- Service 4 -->
                        <div class="yt-service-card" data-aos="zoom-in" data-aos-delay="300">
                            <div class="yt-service-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <h4>Watch Time & Retention Optimization</h4>
                            <p>Improve audience retention & session duration.</p>
                        </div>

                        <!-- Service 5 -->
                        <div class="yt-service-card" data-aos="zoom-in" data-aos-delay="400">
                            <div class="yt-service-icon">
                                <i class="fa-solid fa-bullhorn"></i>
                            </div>
                            <h4>Organic & Paid Video Promotion</h4>
                            <p>Boost reach with smart paid & organic promotion.</p>
                        </div>

                        <!-- Service 6 -->
                        <div class="yt-service-card" data-aos="zoom-in" data-aos-delay="500">
                            <div class="yt-service-icon">
                                <i class="fa-solid fa-coins"></i>
                            </div>
                            <h4>Monetization & Brand Growth</h4>
                            <p>Turn views into revenue and brand authority.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- STYLES -->
        <style>
            .yt-service-card {
                background: #ffffff;
                border-radius: 18px;
                padding: 34px 22px;
                text-align: left;
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
                transition: all .35s ease;
                border: 1px solid rgba(255, 255, 255, 0.25);
                cursor: pointer;
                min-height: 170px;
            }

            .yt-service-card:hover {
                background: #60A5FA;
                transform: translateY(-10px) scale(1.05);
                box-shadow: 0 22px 45px rgba(37, 99, 235, 0.45);
            }

            .yt-service-icon {
                width: 52px;
                height: 52px;
                background: linear-gradient(135deg, #3B82F6, #60A5FA);
                color: #ffffff;
                font-size: 22px;
                border-radius: 14px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 16px;
                box-shadow: 0 10px 25px rgba(59, 130, 246, 0.45);
                transition: all .35s ease;
            }

            .yt-service-card:hover .yt-service-icon {
                background: rgba(255, 255, 255, 0.15);
                color: #ffffff;
                transform: rotate(-6deg) scale(1.1);
            }


            .yt-service-card h4 {
                font-size: 17px;
                font-weight: 700;
                color: #0A0F2C;
                margin-bottom: 6px;
                transition: color .35s ease;
            }

            .yt-service-card p {
                font-size: 14.5px;
                color: #4B5563;
                font-weight: 500;
                line-height: 1.5;
                transition: color .35s ease;
                margin: 0;
            }

            .yt-service-card:hover h4,
            .yt-service-card:hover p {
                color: #ffffff;
            }

            /* Mobile Adjustments */
            @media (max-width: 768px) {
                .yt-service-card {
                    padding: 28px 18px;
                    min-height: auto;
                }

                .yt-service-icon {
                    width: 48px;
                    height: 48px;
                    font-size: 20px;
                }

                .yt-service-card h4 {
                    font-size: 16px;
                }

                .yt-service-card p {
                    font-size: 14px;
                }
            }
        </style>

    </section>
    <!-- ================= WHY CHOOSE DEVOBYTE SECTION ================= -->
    <section class="relative py-24 bg-white overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <!-- HEADING -->
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-3"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Why Choose <span class="text-blue-500">Devobyte</span>
                </h2>
                <p class="text-gray-600 text-lg font-medium max-w-2xl mx-auto">
                    We combine expertise, innovation, and measurable impact.
                </p>
            </div>

            <!-- CONTENT GRID -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">

                <!-- LEFT FEATURES -->
                <div class="space-y-10">

                    <!-- Feature 01 -->
                    <div class="why-card left-card" data-aos="fade-right">
                        <div class="why-number" data-aos="zoom-in">01</div>
                        <h4>Proven YouTube Growth Strategies</h4>
                        <p>Battle-tested strategies that consistently deliver scalable channel growth.</p>
                    </div>

                    <!-- Feature 02 -->
                    <div class="why-card left-card" data-aos="fade-right" data-aos-delay="150">
                        <div class="why-number" data-aos="zoom-in" data-aos-delay="150">02</div>
                        <h4>Real, Organic Results</h4>
                        <p>We focus on genuine growth with real engagement & long-term results.</p>
                    </div>

                </div>

                <!-- CENTER IMAGE -->
                <div class="flex justify-center" data-aos="zoom-in">
                    <img src="{{ asset('assets/images/Illustration.png') }}" alt="Why Choose Devobyte"
                        class="w-full max-w-sm lg:max-w-md xl:max-w-lg drop-shadow-xl">
                </div>

                <!-- RIGHT FEATURES -->
                <div class="space-y-10">

                    <!-- Feature 03 -->
                    <div class="why-card right-card" data-aos="fade-left">
                        <div class="why-number" data-aos="zoom-in">03</div>
                        <h4>Creator & Brand-Focused Approach</h4>
                        <p>Customized strategies tailored to your niche and business goals.</p>
                    </div>

                    <!-- Feature 04 -->
                    <div class="why-card right-card" data-aos="fade-left" data-aos-delay="150">
                        <div class="why-number" data-aos="zoom-in" data-aos-delay="150">04</div>
                        <h4>Transparent Reporting</h4>
                        <p>Clear insights, detailed analytics, and honest performance tracking.</p>
                    </div>

                </div>

            </div>
        </div>

        <!-- STYLES -->
        <style>
            .why-card {
                position: relative;
                background: #ffffff;
                border-radius: 18px;
                padding: 28px 26px 28px 70px;
                box-shadow: 0 14px 35px rgba(0, 0, 0, 0.08);
                transition: all .35s ease;
                min-height: 120px;
                border: 1px solid rgba(59, 130, 246, 0.12);
            }

            .left-card {
                box-shadow: -12px 18px 35px rgba(59, 130, 246, 0.12);
            }

            .right-card {
                box-shadow: 12px 18px 35px rgba(59, 130, 246, 0.12);
            }

            .why-card:hover {
                transform: translateY(-8px) scale(1.04);
                box-shadow: 0 25px 50px rgba(59, 130, 246, 0.25);
            }

            .why-number {
                position: absolute;
                top: 50%;
                left: -18px;
                transform: translateY(-50%);
                width: 42px;
                height: 42px;
                background: #60A5FA;
                color: white;
                font-weight: 700;
                font-size: 15px;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 10px 25px rgba(96, 165, 250, 0.45);
                transition: all .35s ease;
            }

            .why-card:hover .why-number {
                transform: translateY(-50%) scale(1.15) rotate(-5deg);
                background: #3B82F6;
            }

            .why-card h4 {
                font-size: 17px;
                font-weight: 700;
                color: #0A0F2C;
                margin-bottom: 6px;
            }

            .why-card p {
                font-size: 14.5px;
                color: #4B5563;
                font-weight: 500;
                line-height: 1.5;
                margin: 0;
            }

            /* Mobile */
            @media (max-width: 768px) {
                .why-card {
                    padding: 26px 20px 26px 60px;
                }

                .why-number {
                    left: -12px;
                    width: 38px;
                    height: 38px;
                    font-size: 14px;
                }
            }
        </style>

    </section>
    <!-- ================= HOW WE WORK SECTION ================= -->
    <section class="relative py-28 bg-white overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <!-- HEADING -->
            <div class="text-center mb-24" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-3"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    How We Work
                </h2>
                <p class="text-gray-600 text-lg font-medium max-w-2xl mx-auto">
                    Our proven step-by-step growth system for YouTube success.
                </p>
            </div>

            <!-- STEPS FLOW -->
            <div class="work-flow">

                <!-- STEP 1 -->
                <div class="work-step step-red" data-aos="fade-up" data-aos-delay="0">
                    <span class="step-badge red">Step 1</span>
                    <h4>Channel Analysis</h4>

                    <svg class="step-arrow red-arrow" viewBox="0 0 60 20">
                        <line x1="0" y1="10" x2="50" y2="10"></line>
                        <polyline points="45,5 50,10 45,15"></polyline>
                    </svg>
                </div>

                <!-- STEP 2 -->
                <div class="work-step step-black" data-aos="fade-up" data-aos-delay="600">
                    <span class="step-badge black">Step 2</span>
                    <h4>Custom Growth Plan</h4>

                    <svg class="step-arrow black-arrow" viewBox="0 0 60 20">
                        <line x1="0" y1="10" x2="50" y2="10"></line>
                        <polyline points="45,5 50,10 45,15"></polyline>
                    </svg>
                </div>

                <!-- STEP 3 -->
                <div class="work-step step-blue" data-aos="fade-up" data-aos-delay="1200">
                    <span class="step-badge blue">Step 3</span>
                    <h4>Optimization & Promotion</h4>

                    <svg class="step-arrow blue-arrow" viewBox="0 0 60 20">
                        <line x1="0" y1="10" x2="50" y2="10"></line>
                        <polyline points="45,5 50,10 45,15"></polyline>
                    </svg>
                </div>

                <!-- STEP 4 -->
                <div class="work-step step-red" data-aos="fade-up" data-aos-delay="1800">
                    <span class="step-badge red">Step 4</span>
                    <h4>Continuous Growth & Scaling</h4>
                </div>

            </div>

            <!-- CTA BUTTON -->
            <div class="flex justify-center mt-20" data-aos="zoom-in" data-aos-delay="2400">
                <a href="{{ route('contact') }}" class="work-btn">
                    Lets Talk
                </a>
            </div>

        </div>

        <!-- STYLES -->
        <style>
            .work-flow {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 48px;
                align-items: center;
            }

            .work-step {
                position: relative;
                background: #ffffff;
                border-radius: 20px;
                padding: 60px 26px 36px;
                text-align: center;
                min-height: 180px;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                transition: all .35s ease;
                border: 2px solid;
                overflow: visible;
                /* IMPORTANT */
                z-index: 2;
                /* Card layer */
            }


            .work-step:hover {
                transform: translateY(-10px) scale(1.05);
                box-shadow: 0 28px 60px rgba(0, 0, 0, 0.18);
            }

            .work-step h4 {
                font-size: 17.5px;
                font-weight: 700;
                color: #0A0F2C;
            }

            /* Step Badge */
            .step-badge {
                position: absolute;
                top: -18px;
                left: 50%;
                transform: translateX(-50%);
                padding: 9px 18px;
                border-radius: 999px;
                color: #ffffff;
                font-weight: 700;
                font-size: 13.5px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
                white-space: nowrap;
            }

            /* Colors */
            .red {
                background: #EF4444;
            }

            .black {
                background: #111827;
            }

            .blue {
                background: #2563EB;
            }

            .step-red {
                border-color: #EF4444;
            }

            .step-black {
                border-color: #111827;
            }

            .step-blue {
                border-color: #2563EB;
            }

            /* Arrows */
            .step-arrow {
                position: absolute;
                right: -80px;
                top: 50%;
                transform: translateY(-50%);
                width: 80px;
                height: 24px;
                z-index: 5;
                /* Arrow above card */
            }


            .step-arrow line,
            .step-arrow polyline {
                fill: none;
                stroke-width: 3;
                stroke-linecap: round;
                stroke-linejoin: round;
            }

            .red-arrow line,
            .red-arrow polyline {
                stroke: #EF4444;
            }

            .black-arrow line,
            .black-arrow polyline {
                stroke: #111827;
            }

            .blue-arrow line,
            .blue-arrow polyline {
                stroke: #2563EB;
            }

            .work-step:last-child .step-arrow {
                display: none;
            }

            /* Button */
            .work-btn {
                background: #3B82F6;
                color: white;
                padding: 16px 38px;
                border-radius: 12px;
                font-weight: 600;
                box-shadow: 0 10px 25px rgba(59, 130, 246, 0.35);
                transition: all .35s ease;
            }

            .work-btn:hover {
                transform: scale(1.15);
                box-shadow: 0 18px 40px rgba(59, 130, 246, 0.5);
            }

            /* Mobile */
            @media (max-width: 1024px) {
                .work-flow {
                    grid-template-columns: 1fr;
                    gap: 32px;
                }

                .step-arrow {
                    display: none;
                }
            }
        </style>
        <script>
            AOS.init({
                once: true,
                duration: 2000,
                offset: 200
            });
        </script>

    </section>

    <!-- ================= READY TO GROW CTA SECTION ================= -->
    <section class="relative py-20 h-[70vh] bg-cover bg-center bg-no-repeat overflow-hidden"
        style="background-image: url('{{ asset('assets/images/growbg.png') }}');">

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">

                <!-- LEFT EMPTY (IMAGE IS PART OF BG) -->
                <div></div>

                <!-- RIGHT CONTENT -->
                <div class="text-white" data-aos="fade-left">

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-4"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        Ready to Grow <br>
                        <span class="text-blue-400">with Devobyte</span>
                    </h2>

                    <p class="text-white/80 text-lg mb-8 max-w-md">
                        Let's scale your YouTube channel the smart way.
                    </p>

                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center
                          border border-white text-white
                          px-7 py-3.5 rounded-lg font-semibold
                          transition-all duration-300 ease-in-out
                          hover:scale-110 hover:bg-white hover:text-blue-600 shadow-lg">
                        Book a Free Consultation
                    </a>

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

                    <div class="bg-blue-400 text-white p-10 text-center relative overflow-hidden">

                        <!-- CENTER IMAGE -->
                        <img src="{{ asset('assets/images/mail 1.png') }}" alt="Mail Icon Devobyte"
                            class="absolute  m-auto w-40 h-40 object-contain opacity-1 pointer-events-none">

                        <!-- CONTENT -->
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                                Ask the Help Community<br>Write Now!
                            </h3>

                            <div class="text-4xl mb-3">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>

                            <p class="text-sm opacity-90" style="font-family:'Inter', sans-serif;">
                                Get Answers<br>
                                <a href="mailto:sarfraz.khan@devobyte.com" class="underline">
                                    sarfraz.khan@devobyte.com
                                </a>
                            </p>
                        </div>

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

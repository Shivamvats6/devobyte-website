@extends('layouts.app')

@section('title', 'AI Chatbots & Assistants – Devobyte')

@section('content')

    <!-- ================= HERO BANNER ================= -->
    <section class="relative h-screen min-h-[100vh] w-full overflow-hidden">

        <!-- Background Image -->
        <img src="/assets/images/AI-banner.png" class="absolute inset-0 w-full h-full object-fit object-center"
            alt="Custom Software Banner">



        <!-- Content -->
        <div class="relative z-10 h-full flex items-center">

            <div class="max-w-7xl mx-auto px-6 w-full">

                <div class="max-w-2xl" data-aos="fade-right">

                    <!-- HEADING -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-5xl
                           font-extrabold text-white leading-tight mb-8"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        AI Chatbots
                        <span class="text-blue-400 block">And Assistants</span>
                    </h1>


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

                            <span class="whitespace-nowrap">
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

                            <span class="whitespace-nowrap">
                                OUR SERVICES
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


    <section class="relative py-20 lg:py-28 bg-white overflow-hidden">

        <div class="max-w-8xl mx-auto px-6 grid lg:grid-cols-2 gap-14 items-center">

            <!-- LEFT IMAGE (BIGGER NOW) -->
            <div class="relative flex justify-center lg:justify-start" data-aos="fade-right">
                <img src="{{ asset('assets/images/ai-dashboard.png') }}" alt="AI Chatbot Dashboard Interface"
                    class="w-full max-w-2xl lg:max-w-3xl
                        rounded-2xl shadow-2xl
                        transition-all duration-500
                        hover:scale-105">
            </div>

            <!-- RIGHT CONTENT -->
            <div data-aos="fade-left">

                <!-- HEADING -->
                <h1 class="text-3xl lg:text-5xl font-extrabold leading-tight mb-5 text-gray-900"
                    style="font-family:'Montserrat Alternates', sans-serif;">

                    Build <span class="text-blue-500">AI-Powered Chatbots</span> That<br>
                    Work 24/7
                </h1>

                <!-- DESCRIPTION -->
                <p class="text-gray-600 text-sm lg:text-base max-w-xl mb-8 leading-relaxed">
                    We design intelligent chatbots that automate customer support, qualify leads,
                    and engage users in real time — so your business never misses a conversation.
                </p>

                <!-- CTA BUTTON (ZOOM ON HOVER FIXED) -->
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold shadow-lg transition-all duration-300 hover:scale-105">
                    Let's Talk
                    <i class="fa-solid fa-arrow-right"></i>
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
    <!-- ================= WHAT WE DO SECTION ================= -->
    <section class="relative py-32 min-h-[110vh] bg-cover bg-center bg-no-repeat flex items-center"
        style="background-image: url('{{ asset('assets/images/aichatbg.png') }}');">

        <div class="max-w-7xl mx-auto px-6 w-full">

            <!-- HEADING (CENTERED) -->
            <div class="text-center mb-20 max-w-2xl mx-auto" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-bold text-white mb-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    What We Do
                </h2>
                <p class="text-gray-100 font-semibold text-lg lg:text-xl">
                    At Devobyte, we build smart, human-like chatbots that seamlessly integrate.
                </p>
            </div>

            <!-- GRID WRAPPER (LEFT ALIGNED) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-10 max-w-2xl">

                <!-- CARD 1 -->
                <div class="feature-card" data-aos="fade-right">
                    <img src="{{ asset('assets/images/support.png') }}" class="feature-icon" alt="Support Automation">
                    <h4>24/7 customer support automation</h4>
                </div>

                <!-- CARD 2 -->
                <div class="feature-card" data-aos="fade-left">
                    <img src="{{ asset('assets/images/qualify.png') }}" class="feature-icon" alt="Lead Qualification">
                    <h4>AI-based lead qualification</h4>
                </div>

                <!-- CARD 3 -->
                <div class="feature-card" data-aos="fade-right">
                    <img src="{{ asset('assets/images/sales1.png') }}" class="feature-icon" alt="Sales Chatbots">
                    <h4>Sales & engagement chatbots</h4>
                </div>

                <!-- CARD 4 -->
                <div class="feature-card" data-aos="fade-left">
                    <img src="{{ asset('assets/images/integration.png') }}" class="feature-icon" alt="Integration">
                    <h4>Website & app chatbot integration</h4>
                </div>

                <!-- CARD 5 -->
                <div class="feature-card" data-aos="fade-right">
                    <img src="{{ asset('assets/images/bot.png') }}" class="feature-icon" alt="Workflows">
                    <h4>Custom chatbot workflows</h4>
                </div>

                <!-- CARD 6 -->
                <div class="feature-card" data-aos="fade-left">
                    <img src="{{ asset('assets/images/Aibot.png') }}" class="feature-icon" alt="AI Integrations">
                    <h4>Integrations with top AI technology</h4>
                </div>

            </div>

        </div>

        <!-- STYLES -->
        <style>
            .feature-card {
                background: rgba(255, 255, 255, 0.97);
                border-radius: 22px;
                padding: 42px 34px;
                display: flex;
                align-items: center;
                gap: 20px;
                font-weight: 600;
                color: #0A0F2C;
                transition: all .4s ease;
                cursor: pointer;
                min-height: 150px;
                box-shadow: none;
            }

            .feature-card h4 {
                font-size: 18px;
                line-height: 1.4;
            }

            .feature-icon {
                width: 52px;
                height: 52px;
                object-fit: contain;
                transition: all .35s ease;
            }

            /* Hover effects */
            .feature-card:hover {
                background: linear-gradient(135deg, #2F80FF, #4FC3F7);
                color: white;
                transform: scale(1.07);
                box-shadow: none;
            }

            .feature-card:hover .feature-icon {
                filter: brightness(0) invert(1);
                transform: scale(1.15);
            }

            /* Mobile fix */
            @media(max-width:768px) {
                section {
                    min-height: auto;
                    padding-top: 100px;
                    padding-bottom: 100px;
                }

                .feature-card {
                    padding: 30px 22px;
                    min-height: auto;
                }

                .feature-card h4 {
                    font-size: 16px;
                }

                .feature-icon {
                    width: 42px;
                    height: 42px;
                }
            }
        </style>

    </section>

    <!-- ================= WHY CHOOSE DEVOBYTE ================= -->
<section class="py-24 bg-white overflow-visible">

    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADING -->
        <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
            <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-4"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Why Choose <span class="text-blue-500">Devobyte</span> For AI Chatbot Solutions?
            </h2>
            <p class="text-gray-600 text-base lg:text-lg leading-relaxed font-medium">
                At Devobyte, we don’t just build chatbots — we create intelligent, business-ready AI solutions designed
                to scale with your growth. Our AI-powered chatbots help you engage smarter, convert faster, and maintain
                complete customer trust.
            </p>
        </div>

        <!-- CARDS GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center overflow-visible">

            <!-- CARD -->
            <div class="why-card" data-aos="fade-up">
                <div class="why-header">
                    <span class="why-icon">
                        <img src="{{ asset('assets/images/ai-design.png') }}" alt="">
                    </span>
                    <h4>Business-First AI Design</h4>
                </div>
                <div class="why-body">
                    <p>We design chatbots around your real business goals — support efficiency, lead qualification,
                        and meaningful user engagement.</p>
                </div>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="why-header">
                    <span class="why-icon">
                        <img src="{{ asset('assets/images/lock.png') }}" alt="">
                    </span>
                    <h4>Security & Trust by Design</h4>
                </div>
                <div class="why-body">
                    <p>Data privacy and security are built into every chatbot we create, ensuring safe and compliant interactions.</p>
                </div>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="why-header">
                    <span class="why-icon">
                        <img src="{{ asset('assets/images/zig.png') }}" alt="">
                    </span>
                    <h4>Scalable & Future-Ready</h4>
                </div>
                <div class="why-body">
                    <p>Our AI chatbots grow with your business, handling increasing conversations without compromising performance.</p>
                </div>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="why-header">
                    <span class="why-icon">
                        <img src="{{ asset('assets/images/goal.png') }}" alt="">
                    </span>
                    <h4>Custom, Not Generic</h4>
                </div>
                <div class="why-body">
                    <p>No templates. Every chatbot is tailored to your brand voice, workflows, and customer journey.</p>
                </div>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="400">
                <div class="why-header">
                    <span class="why-icon">
                        <img src="{{ asset('assets/images/graphs.png') }}" alt="">
                    </span>
                    <h4>Actionable Insights</h4>
                </div>
                <div class="why-body">
                    <p>Track conversations, user intent, and performance metrics to continuously optimize engagement and conversions.</p>
                </div>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="500">
                <div class="why-header">
                    <span class="why-icon">
                        <img src="{{ asset('assets/images/language.png') }}" alt="">
                    </span>
                    <h4>Multilingual Support</h4>
                </div>
                <div class="why-body">
                    <p>Serve customers in their preferred language with smooth, accurate translations and natural responses.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- STYLES -->
    <style>
        .why-card {
            width: 100%;
            max-width: 320px;
            min-height: 280px;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid #E5E7EB;
            background: white;
            cursor: pointer;
            position: relative;
            z-index: 1;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            will-change: transform;
        }

        /* 🔥 GUARANTEED HOVER EFFECT */
        .why-card:hover {
            transform: translateY(-10px) scale(1.12);
            z-index: 30;
            box-shadow: 0 20px 45px rgba(0,0,0,0.15);
        }

        .why-header {
            background: #60A5FA;
            padding: 20px 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            color: white;
            border-top-left-radius: 22px;
            border-top-right-radius: 22px;
            border-bottom-left-radius: 22px;
            border-bottom-right-radius: 0;
        }

        .why-header h4 {
            font-size: 16px;
            font-weight: 700;
            margin: 0;
            line-height: 1.3;
        }

        .why-icon {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .why-icon img {
            width: 26px;
            height: 26px;
            object-fit: contain;
        }

        .why-body {
            padding: 26px 22px 30px;
            background: white;
        }

        .why-body p {
            font-size: 16px;
            font-weight: 500;
            color: #4B5563;
            line-height: 1.7;
            margin: 0;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .why-card {
                max-width: 100%;
                min-height: auto;
            }

            .why-header h4 {
                font-size: 15px;
            }

            .why-body {
                padding: 22px 18px 26px;
            }

            .why-icon {
                width: 44px;
                height: 44px;
            }

            .why-icon img {
                width: 22px;
                height: 22px;
            }
        }
    </style>

</section>
<!-- ================= AI PLATFORM CTA SECTION ================= -->
<section class="relative py-24 lg:py-32  h-full w-full g-cover bg-center bg-no-repeat overflow-hidden"
         style="background-image: url('{{ asset('assets/images/platform1.png') }}');">

    <!-- Dark Overlay -->


    <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 items-center gap-16">

        <!-- LEFT (EMPTY SPACE / IMAGE PART COMES FROM BG) -->
        <div></div>

        <!-- RIGHT CONTENT -->
        <div class="text-white" data-aos="fade-left">

            <h2 class="text-3xl lg:text-4xl font-bold leading-tight mb-6"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Unlock superior customer
                engagement with our AI
                chatbot platform
            </h2>

            <div class="relative overflow-visible" data-aos="zoom-in">
    <a href="{{ route('contact') }}"
       class="inline-block mt-4 bg-white text-gray-900 px-8 py-4 rounded-lg font-semibold
              shadow-lg transition-transform duration-300 ease-in-out
              hover:scale-110 hover:shadow-2xl">
        Get started
    </a>
</div>


        </div>

    </div>
</section>

@endsection

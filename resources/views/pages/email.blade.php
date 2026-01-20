@extends('layouts.app')

@section('title', 'SMS & Email Marketing Services – Devobyte')

@section('content')

<!-- ================= SMS HERO SECTION ================= -->
<section class="relative overflow-hidden pt-28 pb-32">

    <!-- ===== Gradient Background (White → Blue) ===== -->
<div class="absolute inset-0 bg-gradient-to-t from-[#4F8BFF55] via-[#CFE2FF] to-white"></div>

<!-- ===== Dot Pattern ===== -->
<div class="absolute inset-0 opacity-30 pointer-events-none"
     style="background-image: radial-gradient(#c7dcff 1px, transparent 1px); background-size: 22px 22px;">
</div>


    <div class="relative max-w-7xl mx-auto px-6 text-center">

        <!-- ================= HEADING ================= -->
        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl
                   font-extrabold text-gray-900 leading-tight mb-4"
            style="font-family:'Montserrat Alternates', sans-serif;"
            data-aos="fade-up">

            SMS Marketing and
            <span class="text-blue-500 block">Email Marketing</span>
            Made Easy.
        </h1>

        <!-- ================= SUB TEXT ================= -->
        <p class="text-gray-600 max-w-2xl mx-auto mb-10 font-inter leading-relaxed"
           data-aos="fade-up" data-aos-delay="150">
            You can get started with your marketing automation in a few minutes.
        </p>

        <!-- ================= BUTTONS ================= -->
        <div class="flex flex-col sm:flex-row justify-center gap-6 mb-16"
             data-aos="fade-up" data-aos-delay="300">

            <!-- LET'S TALK -->
            <a href="javascript:void(0)" onclick="openContactPopup()"
               class="group relative inline-flex items-center
                      bg-white text-blue-600
                      pl-7 pr-[4.25rem] py-4
                      rounded-full
                      min-w-[160px]
                      font-semibold text-sm
                      transition-all duration-300
                      hover:bg-blue-600 hover:text-white
                      font-inter shadow-lg">

                <span class="whitespace-nowrap">
                    LET’S TALK
                </span>

                <span
                    class="absolute right-1 top-1/2 -translate-y-1/2
                           w-11 h-11
                           bg-blue-600 text-white
                           rounded-full
                           flex items-center justify-center
                           text-lg
                           transition-all duration-300
                           group-hover:bg-white
                           group-hover:text-blue-600
                           group-hover:scale-105">
                    <i class="fa-solid fa-paper-plane text-sm"></i>
                </span>
            </a>

            <!-- OUR SERVICES -->
            <a href="{{ route('our-services') }}"
               class="group relative inline-flex items-center
                      bg-white text-blue-600
                      pl-7 pr-[4.25rem] py-4
                      rounded-full
                      min-w-[180px]
                      font-semibold text-sm
                      transition-all duration-300
                      hover:bg-blue-600 hover:text-white
                      font-inter shadow-lg">

                <span class="whitespace-nowrap">
                    OUR SERVICES
                </span>

                <span
                    class="absolute right-1 top-1/2 -translate-y-1/2
                           w-11 h-11
                           bg-blue-600 text-white
                           rounded-full
                           flex items-center justify-center
                           text-lg
                           transition-all duration-300
                           group-hover:bg-white
                           group-hover:text-blue-600
                           group-hover:scale-105">
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </span>
            </a>

        </div>

        <!-- ================= DASHBOARD IMAGE ================= -->
        <div class="relative max-w-5xl mx-auto"
             data-aos="zoom-in" data-aos-delay="500">

            <div class="rounded-3xl overflow-hidden shadow-2xl border border-blue-100 bg-white">
                <img src="/assets/images/sms_dashboard.png"
                     alt="SMS Dashboard"
                     class="w-full h-auto object-cover">
            </div>

        </div>

    </div>

</section>

<!-- ================= EMPOWERING TEAMS LOGOS SECTION ================= -->
<section class="relative py-16 lg:py-20 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <!-- ================= HEADING ================= -->
        <h2 class="text-2xl sm:text-3xl lg:text-4xl
                   font-semibold text-gray-700 leading-tight mb-10"
            data-aos="fade-up"
            style="font-family:'Montserrat Alternates', sans-serif;">

            Empowering Teams at the World’s Most <br>
            <span class="text-blue-500 font-bold">
                Innovative Companies
            </span>
        </h2>

        <!-- ================= LOGOS ================= -->
        <div class="flex justify-center items-center"
             data-aos="fade-up" data-aos-delay="150">

            <img src="/assets/images/Logos.png"
                 alt="Trusted by innovative companies"
                 class="max-w-full h-auto object-contain opacity-90 hover:opacity-100 transition duration-300">

        </div>

    </div>

</section>
<!-- ================= EMAIL DESIGN SECTION ================= -->
<section class="relative py-20 lg:py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TOP HEADING -->
        <div class="text-center max-w-4xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold text-gray-900 leading-tight"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Send Emails That Feel Personal,
                <span class="text-blue-500">Not Promotional</span>
            </h2>

            <p class="mt-4 text-gray-600 font-inter leading-relaxed">
                Say goodbye to complicated tools and guesswork. With features designed to make your life easier,
                you can build eye-catching emails, use AI to fine-tune your message, and test what works.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div data-aos="fade-right">

                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 font-montserrat">
                    Design Stunning Emails<br>in Minutes
                </h3>

                <p class="text-gray-600 mb-6 font-inter leading-relaxed">
                    Create beautiful, professional emails in just minutes using simple, intuitive tools.
                    No design skills required. Choose a ready-made template, customize it to fit your brand,
                    and you’re good to go.
                </p>

                <ul class="space-y-4 font-inter">
                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="w-5 h-5 mt-1 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">✓</span>
                        Easily customize layouts, colors, and fonts to match your brand.
                    </li>

                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="w-5 h-5 mt-1 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">✓</span>
                        Pick from a wide variety of optimized templates that work for every industry and campaign type.
                    </li>

                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="w-5 h-5 mt-1 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">✓</span>
                        See exactly how your email will appear on desktop and mobile, ensuring a seamless experience.
                    </li>
                </ul>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative flex justify-center" data-aos="fade-left">

                <img src="/assets/images/dragdrop.png"
                     alt="Drag & Drop Email Builder"
                     class="w-full max-w-xl object-contain">
            </div>

        </div>

    </div>

</section>
<!-- ================= GENERATIVE AI SECTION ================= -->
<section class="relative py-20 lg:py-28 bg-[#F8FAFF] overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT IMAGE -->
            <div class="relative flex justify-center" data-aos="fade-right">

                <img src="/assets/images/image 313.png"
                     alt="AI Email Helper"
                     class="w-full max-w-xl object-contain">
            </div>

            <!-- RIGHT CONTENT -->
            <div data-aos="fade-left">

                <h3 class="text-2xl sm:text-3xl xl:text-4xl font-extrabold text-gray-900 mb-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Create Faster with<br>Generative AI
                </h3>

                <p class="text-gray-600 mb-6 font-inter leading-relaxed">
                    AI identifies spam risks and fine-tunes your subject lines, helping your emails
                    stand out and land safely in the inbox.
                </p>

                <ul class="space-y-4 font-inter">
                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="w-5 h-5 mt-1 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">✓</span>
                        Craft personalized subject lines that capture attention instantly and drive higher open rates.
                    </li>

                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="w-5 h-5 mt-1 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">✓</span>
                        Identify and fix spam triggers to ensure compliance and maximize inbox placement.
                    </li>
                </ul>

            </div>

        </div>

    </div>

</section>
<!-- ================= A/B TESTING SECTION ================= -->
<section class="relative py-20 lg:py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT CONTENT ================= -->
            <div data-aos="fade-right">

                <h3 class="text-2xl sm:text-3xl xl:text-4xl font-extrabold text-gray-900 leading-tight mb-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Discover what performs<br>best with A/B testing.
                </h3>

                <p class="text-gray-600 mb-6 font-inter leading-relaxed max-w-xl">
                    Experiment with subject lines, content, and CTAs to uncover what drives the best results.
                    A/B testing turns insights into higher engagement and more conversions.
                </p>

                <ul class="space-y-4 font-inter">

                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="w-5 h-5 mt-1 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">
                            ✓
                        </span>
                        Test two or more variations of subject lines, display names, schedule time, or content to see what works best.
                    </li>

                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="w-5 h-5 mt-1 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">
                            ✓
                        </span>
                        Automate winner selection with rules that deliver the highest-performing email every time.
                    </li>

                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="w-5 h-5 mt-1 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">
                            ✓
                        </span>
                        Track opens, clicks, and conversions to see which elements drive results.
                    </li>

                </ul>

            </div>

            <!-- ================= RIGHT IMAGE ================= -->
            <div class="relative flex justify-center lg:justify-end" data-aos="fade-left">

                <img src="/assets/images/image 314.png"
                     alt="A/B Testing Dashboard"
                     class="w-full max-w-xl object-contain">
            </div>

        </div>

    </div>

</section>
<!-- ================= COLD EMAIL SOLUTIONS SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="/assets/images/Group 164727.png"
             alt="Background Pattern"
             class="w-full h-full object-cover">
    </div>


    <div class="relative max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-16" data-aos="fade-up">

            <h2 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold leading-tight text-gray-900"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Effortless Solutions for <span class="text-blue-500">Cold Emails</span>
            </h2>

            <p class="mt-4 text-gray-600 max-w-2xl mx-auto font-inter leading-relaxed">
                Our all-in-one platform simplifies and scales your cold email campaigns
                for more effective outreach.
            </p>

        </div>

        <!-- ================= CARDS ================= -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300"
                 data-aos="fade-up">

                <!-- ICON -->
                <div class="w-12 h-12 rounded-full bg-blue-50
                            flex items-center justify-center mb-6">
                    <img src="/assets/images/Value Icons.png"
                         alt="Unlimited Emails"
                         class="w-6 h-6 object-contain">
                </div>

                <h4 class="text-lg font-bold mb-3 text-gray-900 font-montserrat">
                    Unlimited Emails, Results
                </h4>

                <p class="text-gray-600 text-sm leading-relaxed font-inter">
                    Send unlimited emails with Devobyte to expand your outreach and achieve
                    10x results in your email marketing.
                </p>

            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300"
                 data-aos="fade-up" data-aos-delay="100">

                <!-- ICON -->
                <div class="w-12 h-12 rounded-full bg-blue-50
                            flex items-center justify-center mb-6">
                    <img src="/assets/images/Value Icons (1).png"
                         alt="Deliverability"
                         class="w-6 h-6 object-contain">
                </div>

                <h4 class="text-lg font-bold mb-3 text-gray-900 font-montserrat">
                    Boost Email Deliverability
                </h4>

                <p class="text-gray-600 text-sm leading-relaxed font-inter">
                    Email warmup boosts deliverability, helping your messages land in inboxes
                    and stay out of spam.
                </p>

            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300"
                 data-aos="fade-up" data-aos-delay="200">

                <!-- ICON -->
                <div class="w-12 h-12 rounded-full bg-blue-50
                            flex items-center justify-center mb-6">
                    <img src="/assets/images/Value Icons (2).png"
                         alt="AI Personalization"
                         class="w-6 h-6 object-contain">
                </div>

                <h4 class="text-lg font-bold mb-3 text-gray-900 font-montserrat">
                    AI Email Personalization
                </h4>

                <p class="text-gray-600 text-sm leading-relaxed font-inter">
                    Devobyte AI crafts personalized emails to engage your audience
                    and deliver results effortlessly.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= EMAIL MARKETING PRICING SECTION ================= -->
<section class="relative py-24 bg-[#050B14] overflow-hidden">
    <div class="max-w-5xl mx-auto px-1">

        <!-- ================= SECTION HEADER ================= -->
        <div class="text-center mb-14" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3"
                style="font-family: 'Montserrat Alternates', sans-serif;">
                Simple Pricing, <span class="text-[#4F9CFF]">Powerful Outreach</span>
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto text-base"
               style="font-family: 'Inter', sans-serif;">
                Simple pricing meets powerful cold email tools like AI personalization,
                unlimited sending, and email warmup.
            </p>
        </div>

        <!-- ================= OUTER BORDER WRAPPER ================= -->
        <div class="relative border-[8px] border-[#1F3B6E] rounded-3xl p-4 bg-[#070D1A]">

            <!-- ================= PRICING CARDS ================= -->
            <div class="grid lg:grid-cols-3 gap-1 justify-items-center">

                <!-- ================= CARD 1 (NO BORDER) ================= -->
                <div class="group relative bg-[#0B1220] rounded-3xl px-6 py-6
                            w-[300px] min-h-[480px]
                            transition-all duration-500
                            hover:-translate-y-12 hover:shadow-2xl
                            hover:bg-gradient-to-br hover:from-[#72B3FF] hover:to-[#6158ED]">

                    <h4 class="text-white text-base font-semibold mb-1 group-hover:text-white">Beginner</h4>
                    <h3 class="text-4xl font-bold text-white mb-1 group-hover:text-white">$297/month</h3>
                    <p class="text-gray-400 text-sm mb-6 group-hover:text-white">(300 Prospect Per Month)</p>

                    <ul class="space-y-4 mb-8 text-sm">
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Handling of 1 LinkedIn Account
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            3 Active Campaigns
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Creating Prospect List
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Creating Outreach Messages
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Sending Follow up Messages
                        </li>
                    </ul>

                    <a href="javascript:void(0)"
                       onclick="openContactPopup()"
                       class="block w-full mt-auto text-center py-2.5 rounded-xl text-large
                              font-bold border border-[#4F9CFF] text-[#4F9CFF]
                              transition-all duration-300
                              group-hover:bg-white group-hover:text-[#1B2A4A]">
                        Get Started Now
                    </a>
                </div>

                <!-- ================= CARD 2 (ONLY BORDERED – CENTER) ================= -->
                <div class="group relative bg-[#0B1220] rounded-3xl px-6 py-6
                            w-[300px] min-h-[480px]
                            border-[8px] border-[#1F3B6E]
                            transition-all duration-500
                            hover:-translate-y-12 hover:shadow-2xl
                            hover:bg-gradient-to-br hover:from-[#72B3FF] hover:to-[#6158ED]">

                    <!-- Badge -->
                    <div class="absolute -top-4 right-4 bg-white text-[#1B2A4A]
                                text-xs font-bold px-3 py-1 rounded-full shadow">
                        Most Popular
                    </div>

                    <h4 class="text-white text-base font-semibold mb-1 group-hover:text-white">Advance</h4>
                    <h3 class="text-4xl font-bold text-white mb-1 group-hover:text-white">$497/month</h3>
                    <p class="text-gray-400 text-sm mb-6 group-hover:text-white">(600 Prospect Per Month)</p>

                    <ul class="space-y-4 mb-8 text-sm">
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Handling of 2 LinkedIn Account
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            5 Active Campaigns
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Creating Prospect List
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Creating Outreach Messages
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Sending Follow up Messages
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Dedicated Account Manager
                        </li>
                    </ul>

                    <a href="javascript:void(0)"
                       onclick="openContactPopup()"
                       class="block w-full mt-auto text-center py-2.5 rounded-xl text-large
                              font-bold border border-[#4F9CFF] text-[#4F9CFF]
                              transition-all duration-300
                              group-hover:bg-white group-hover:text-[#1B2A4A]">
                        Get Started Now
                    </a>
                </div>

                <!-- ================= CARD 3 (NO BORDER) ================= -->
                <div class="group relative bg-[#0B1220] rounded-3xl px-6 py-6
                            w-[300px] min-h-[480px]
                            transition-all duration-500
                            hover:-translate-y-12 hover:shadow-2xl
                            hover:bg-gradient-to-br hover:from-[#72B3FF] hover:to-[#6158ED]">

                    <h4 class="text-white text-base font-semibold mb-1 group-hover:text-white">Pro</h4>
                    <h3 class="text-4xl font-bold text-white mb-1 group-hover:text-white">$797/month</h3>
                    <p class="text-gray-400 text-sm mb-6 group-hover:text-white">(1200 Prospect Per Month)</p>

                    <ul class="space-y-4 mb-8 text-sm">
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Handling of 4 LinkedIn Account
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            10 Active Campaigns
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Creating Prospect List
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Sending Follow up Messages
                        </li>
                        <li class="flex items-start text-gray-300 group-hover:text-white">
                            <span class="w-5 h-5 mt-0.5 rounded-full bg-[#4F9CFF] flex items-center justify-center mr-3 shrink-0">
                                <i class="fa-solid fa-check text-white text-xs"></i>
                            </span>
                            Content Calendar Research
                        </li>


                    </ul>

                    <a href="javascript:void(0)"
                       onclick="openContactPopup()"
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


<!-- ================= INTEGRATION WITH LEADING TOOLS ================= -->
<section class="relative py-24 bg-white overflow-hidden">

    <!-- ================= HEADING ================= -->
    <div class="max-w-7xl mx-auto px-6 text-center mb-14" data-aos="fade-up">

        <h2 class="text-3xl lg:text-4xl font-bold text-[#0A0F2C] mb-3"
            style="font-family: 'Montserrat Alternates', sans-serif;">
            Integration with <span class="text-[#4F9CFF]">Leading Tools</span>
        </h2>

        <p class="text-gray-500 text-base max-w-2xl mx-auto"
           style="font-family: 'Inter', sans-serif;">
            Connect Devobyte with your favorite tools to streamline workflows and boost productivity.
        </p>

    </div>

    <!-- ================= IMAGE AREA ================= -->
    <div class="relative w-full" data-aos="zoom-in" data-aos-duration="900">

        <img src="/assets/images/appset.png"
             alt="Devobyte Integrations"
             class="w-full max-w-6xl mx-auto object-contain">

    </div>

</section>

<!-- ================= NUMBERS THAT DRIVE SUCCESS ================= -->
<section class="relative py-24 overflow-hidden"
         style="background: linear-gradient(180deg,
    #030312 0%,
    #0B0F2A 35%,
    #1E3A8A 65%,
    #66A6FF 100%
);">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3"
                style="font-family: 'Montserrat Alternates', sans-serif;">
                Numbers That Drive Success
            </h2>

            <p class="text-gray-200 max-w-2xl mx-auto text-base"
               style="font-family: 'Inter', sans-serif;">
                See the numbers! Our platform boosts deliverability and conversions,
                delivering results you can trust.
            </p>
        </div>

        <!-- ================= STATS CARDS ================= -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-xl p-8" data-aos="zoom-in">
                <h3 class="text-4xl lg:text-5xl font-bold text-[#4F9CFF] mb-2">
                    <span class="counter" data-target="98" data-suffix="%">0</span>
                </h3>
                <p class="text-gray-600 text-xl font-medium">Deliverability</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-xl p-8" data-aos="zoom-in" data-aos-delay="100">
                <h3 class="text-4xl lg:text-5xl font-bold text-[#4F9CFF] mb-2">
                    <span class="counter" data-target="10" data-suffix="x">0</span>
                </h3>
                <p class="text-gray-600 text-xl font-medium">Efficiency</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-xl p-8" data-aos="zoom-in" data-aos-delay="200">
                <h3 class="text-4xl lg:text-5xl font-bold text-[#4F9CFF] mb-2">
                    <span class="counter" data-target="170" data-suffix="M+">0</span>
                </h3>
                <p class="text-gray-600 text-xl font-medium">Leads</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow-xl p-8" data-aos="zoom-in" data-aos-delay="300">
                <h3 class="text-4xl lg:text-5xl font-bold text-[#4F9CFF] mb-2">
                    <span class="counter" data-target="320" data-suffix="%">0</span>
                </h3>
                <p class="text-gray-600 text-xl font-medium">Conversions</p>
            </div>

        </div>

    </div>
</section>

<!-- ================= COUNTER SCRIPT ================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll('.counter');
    const speed = 150; // lower = faster

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const suffix = counter.getAttribute('data-suffix') || '';
        let count = 0;

        const update = () => {
            const increment = target / speed;
            count += increment;

            if (count < target) {
                counter.innerText = Math.ceil(count) + suffix;
                requestAnimationFrame(update);
            } else {
                counter.innerText = target + suffix;
            }
        };

        update();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        observer.observe(counter);
    });

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

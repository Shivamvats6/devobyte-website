@extends('layouts.app')

@section('content')

@section('title', 'Instagram Marketing – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[720px] flex items-center">

    <img src="/assets/images/instagram-banner.png" class="absolute inset-0 w-full h-full object-certain" alt="Instagram Banner">
    <div class="absolute inset-0"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full -mt-16 lg:-mt-24" data-aos="fade-right">
        <h1 class="text-5xl font-extrabold text-black mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
              Instagram <span class="text-blue-400"><br>Marketing</span>
        </h1>

        <!-- CTA BUTTONS -->
        <div class="flex flex-col sm:flex-row gap-6
            justify-center lg:justify-start mt-10" data-aos="fade-up"
            data-aos-delay="400">

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

<!-- ================= WHAT WE DO SECTION ================= -->
<section class="relative py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT IMAGE ================= -->
            <div class="relative flex justify-center lg:justify-start"
                 data-aos="fade-right">

                <img src="/assets/images/features_content.png"
                     alt="Instagram Marketing Features"
                     class="w-full max-w-md lg:max-w-xl object-contain">

                <!-- Floating Badge 1 -->
                <div class="absolute top-14 -left-6 bg-white shadow-xl rounded-xl px-4 py-2
                            text-sm font-semibold text-green-600
                            animate-float-slow">
                    +2.8k Followers
                </div>

                <!-- Floating Badge 2 -->
                <div class="absolute bottom-20 -left-10 bg-white shadow-xl rounded-xl px-4 py-2
                            text-sm font-semibold text-blue-600
                            animate-float">
                    +1.3k Engage
                </div>

            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div data-aos="fade-left">

                <!-- Heading -->
                <h2 class="text-3xl lg:text-4xl font-bold text-[#0A0F2C] mb-10"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    What <span class="text-blue-500">We Do</span>
                </h2>

                <!-- Features Grid -->
                <div class="grid sm:grid-cols-2 gap-6 mb-10">

                    <!-- Feature Item -->
                    <div class="flex items-start gap-4 p-5 rounded-2xl
                                border border-[#E6ECF8] hover:shadow-lg
                                transition-all duration-300"
                         data-aos="zoom-in">

                        <div class="w-11 h-11 rounded-full bg-blue-100
                                    flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-gear text-blue-600"></i>
                        </div>

                        <div>
                            <h4 class="font-semibold text-sm text-[#0A0F2C] mb-1">
                                Instagram Account Management
                            </h4>
                            <p class="text-xs text-gray-500 leading-relaxed">
                                End-to-end management including content planning,
                                posting, captions, and performance monitoring.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Item -->
                    <div class="flex items-start gap-4 p-5 rounded-2xl
                                border border-[#E6ECF8] hover:shadow-lg
                                transition-all duration-300"
                         data-aos="zoom-in" data-aos-delay="50">

                        <div class="w-11 h-11 rounded-full bg-pink-100
                                    flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-clapperboard text-pink-500"></i>
                        </div>

                        <div>
                            <h4 class="font-semibold text-sm text-[#0A0F2C] mb-1">
                                Creative Content & Reels
                            </h4>
                            <p class="text-xs text-gray-500 leading-relaxed">
                                High-quality posts, reels, and stories designed
                                to capture attention and boost engagement.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Item -->
                    <div class="flex items-start gap-4 p-5 rounded-2xl
                                border border-[#E6ECF8] hover:shadow-lg
                                transition-all duration-300"
                         data-aos="zoom-in" data-aos-delay="100">

                        <div class="w-11 h-11 rounded-full bg-indigo-100
                                    flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-bullhorn text-indigo-600"></i>
                        </div>

                        <div>
                            <h4 class="font-semibold text-sm text-[#0A0F2C] mb-1">
                                Instagram Ads & Campaigns
                            </h4>
                            <p class="text-xs text-gray-500 leading-relaxed">
                                Result-oriented ad campaigns focused on reach,
                                traffic, and conversions.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Item -->
                    <div class="flex items-start gap-4 p-5 rounded-2xl
                                border border-[#E6ECF8] hover:shadow-lg
                                transition-all duration-300"
                         data-aos="zoom-in" data-aos-delay="150">

                        <div class="w-11 h-11 rounded-full bg-green-100
                                    flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-users text-green-600"></i>
                        </div>

                        <div>
                            <h4 class="font-semibold text-sm text-[#0A0F2C] mb-1">
                                Community Management
                            </h4>
                            <p class="text-xs text-gray-500 leading-relaxed">
                                Timely responses, audience interaction,
                                and brand reputation management.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Item -->
                    <div class="flex items-start gap-4 p-5 rounded-2xl
                                border border-[#E6ECF8] hover:shadow-lg
                                transition-all duration-300"
                         data-aos="zoom-in" data-aos-delay="200">

                        <div class="w-11 h-11 rounded-full bg-yellow-100
                                    flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-chart-line text-yellow-600"></i>
                        </div>

                        <div>
                            <h4 class="font-semibold text-sm text-[#0A0F2C] mb-1">
                                Insights & Reporting
                            </h4>
                            <p class="text-xs text-gray-500 leading-relaxed">
                                Detailed analytics and reports with actionable
                                insights for continuous improvement.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- CTA -->
                <a href="javascript:void(0)"
                   onclick="openContactPopup()"
                   class="inline-flex items-center justify-center
                          bg-blue-500 text-white
                          px-7 py-3 rounded-xl font-semibold text-sm
                          shadow-lg hover:shadow-xl
                          transition-all duration-300 hover:bg-blue-600">
                    Let’s talk
                </a>

            </div>

        </div>

    </div>
</section>

<!-- ================= FLOAT ANIMATIONS ================= -->
<style>
@keyframes float {
    0% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
}

@keyframes floatSlow {
    0% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
    100% { transform: translateY(0); }
}

.animate-float {
    animation: float 4s ease-in-out infinite;
}

.animate-float-slow {
    animation: floatSlow 6s ease-in-out infinite;
}
</style>
<!-- ================= WHY YOU NEED TO DESIGN YOUR INSTAGRAM ================= -->
<section class="relative py-28 overflow-hidden"
         style="background-color:#365683;">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ===== Heading ===== -->
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-3xl lg:text-5xl font-bold text-white leading-tight"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Why You Need To <br>
                Design <span class="text-[#2F80FF]">Your Instagram</span>
            </h2>

            <p class="text-gray-200 max-w-3xl mx-auto mt-6 text-sm lg:text-base leading-relaxed"
               style="font-family:'Inter', sans-serif;">
                A well-designed Instagram profile builds trust, improves engagement,
                and turns visitors into loyal followers and customers.
            </p>
        </div>

        <!-- ===== Content Grid ===== -->
        <div class="grid lg:grid-cols-2 gap-14 items-start">

            <!-- ===== LEFT COLUMN ===== -->
            <div class="space-y-10" data-aos="fade-right">

                <!-- Item -->
                <div class="flex items-start gap-5">
                    <div class="w-14 h-14 rounded-xl border border-white/40
                                flex items-center justify-center text-orange-400">
                        <i class="fa-solid fa-clipboard-list text-xl"></i>
                    </div>

                    <div>
                        <h4 class="text-white font-semibold text-lg mb-1">
                            Assisted Daily Content Posting
                        </h4>
                        <p class="text-gray-200 text-sm leading-relaxed">
                            Consistent posting strategies that keep your audience
                            engaged and your profile active.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex items-start gap-5">
                    <div class="w-14 h-14 rounded-xl border border-white/40
                                flex items-center justify-center text-blue-400">
                        <i class="fa-solid fa-cart-shopping text-xl"></i>
                    </div>

                    <div>
                        <h4 class="text-white font-semibold text-lg mb-1">
                            Boost Commercial Sales
                        </h4>
                        <p class="text-gray-200 text-sm leading-relaxed">
                            Strategic designs that guide followers toward
                            conversions and product sales.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex items-start gap-5">
                    <div class="w-14 h-14 rounded-xl border border-white/40
                                flex items-center justify-center text-green-400">
                        <i class="fa-solid fa-lightbulb text-xl"></i>
                    </div>

                    <div>
                        <h4 class="text-white font-semibold text-lg mb-1">
                            Totally Original Ideas From Us
                        </h4>
                        <p class="text-gray-200 text-sm leading-relaxed">
                            Creative concepts designed specifically for your brand,
                            not copied templates.
                        </p>
                    </div>
                </div>

            </div>

            <!-- ===== RIGHT COLUMN ===== -->
            <div class="relative space-y-10" data-aos="fade-left">

                <!-- Divider (Desktop only) -->
                <span class="hidden lg:block absolute -left-7 top-4 bottom-4
                             w-[2px] bg-white/40"></span>

                <!-- Item -->
                <div class="flex items-start gap-5">
                    <div class="w-14 h-14 rounded-xl border border-white/40
                                flex items-center justify-center text-cyan-400">
                        <i class="fa-solid fa-id-card text-xl"></i>
                    </div>

                    <div>
                        <h4 class="text-white font-semibold text-lg mb-1">
                            Enhanced Bio & Highlights
                        </h4>
                        <p class="text-gray-200 text-sm leading-relaxed">
                            Professionally crafted bios and highlights that
                            instantly explain your brand.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex items-start gap-5">
                    <div class="w-14 h-14 rounded-xl border border-white/40
                                flex items-center justify-center text-yellow-400">
                        <i class="fa-solid fa-wand-magic-sparkles text-xl"></i>
                    </div>

                    <div>
                        <h4 class="text-white font-semibold text-lg mb-1">
                            Professional & Premium Design
                        </h4>
                        <p class="text-gray-200 text-sm leading-relaxed">
                            High-quality visuals that reflect credibility,
                            professionalism, and brand value.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex items-start gap-5">
                    <div class="w-14 h-14 rounded-xl border border-white/40
                                flex items-center justify-center text-purple-400">
                        <i class="fa-solid fa-chart-column text-xl"></i>
                    </div>

                    <div>
                        <h4 class="text-white font-semibold text-lg mb-1">
                            Improve Your Company Growth
                        </h4>
                        <p class="text-gray-200 text-sm leading-relaxed">
                            Better branding leads to higher engagement,
                            stronger trust, and long-term growth.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ================= OUR PORTFOLIO ================= -->
<section class="relative py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ===== Heading ===== -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-5xl font-bold text-[#0A0F2C]"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Our <span class="text-[#2F80FF]">Portfolio</span>
            </h2>

            <p class="text-gray-500 max-w-3xl mx-auto mt-4 text-sm lg:text-base"
               style="font-family:'Inter', sans-serif;">
                Explore some of our recent Instagram designs crafted to boost engagement,
                brand visibility, and conversions.
            </p>
        </div>

        <!-- ===== Portfolio Grid ===== -->
        <div class="grid sm:grid-cols-2 gap-12">

            <!-- ===== ITEM 1 ===== -->
            <div class="group" data-aos="fade-up">
                <div class="rounded-3xl overflow-hidden shadow-lg
                            transition-all duration-500
                            group-hover:shadow-2xl group-hover:-translate-y-2">

                    <img src="/assets/images/fashion.png"
                         alt="Fashion Portfolio"
                         class="w-full h-[280px] object-cover transition-transform duration-500
                                group-hover:scale-105">
                </div>

                <h3 class="mt-5 text-xl font-semibold text-[#0A0F2C]">
                    Fashion
                </h3>

                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                    Modern Instagram layouts designed to elevate fashion brands and
                    improve audience engagement.
                </p>
            </div>

            <!-- ===== ITEM 2 ===== -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="rounded-3xl overflow-hidden shadow-lg
                            transition-all duration-500
                            group-hover:shadow-2xl group-hover:-translate-y-2">

                    <img src="/assets/images/food.png"
                         alt="Food Portfolio"
                         class="w-full h-[280px] object-cover transition-transform duration-500
                                group-hover:scale-105">
                </div>

                <h3 class="mt-5 text-xl font-semibold text-[#0A0F2C]">
                    Food
                </h3>

                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                    Visually rich food content crafted to attract customers and
                    increase brand recall.
                </p>
            </div>

            <!-- ===== ITEM 3 ===== -->
            <div class="group" data-aos="fade-up">
                <div class="rounded-3xl overflow-hidden shadow-lg
                            transition-all duration-500
                            group-hover:shadow-2xl group-hover:-translate-y-2">

                    <img src="/assets/images/property.png"
                         alt="Property Portfolio"
                         class="w-full h-[280px] object-cover transition-transform duration-500
                                group-hover:scale-105">
                </div>

                <h3 class="mt-5 text-xl font-semibold text-[#0A0F2C]">
                    Property
                </h3>

                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                    Clean and professional layouts for real estate brands that
                    highlight trust and value.
                </p>
            </div>

            <!-- ===== ITEM 4 ===== -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="rounded-3xl overflow-hidden shadow-lg
                            transition-all duration-500
                            group-hover:shadow-2xl group-hover:-translate-y-2">

                    <img src="/assets/images/desk.png"
                         alt="Desk Portfolio"
                         class="w-full h-[280px] object-cover transition-transform duration-500
                                group-hover:scale-105">
                </div>

                <h3 class="mt-5 text-xl font-semibold text-[#0A0F2C]">
                    Desk
                </h3>

                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                    Minimal and aesthetic Instagram feeds designed for creators,
                    startups, and professionals.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- ================= INSTAGRAM MARKETING PRICING SECTION ================= -->
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

<!-- ================= OUR SERVICE ================= -->
<section class="relative py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ===== Heading ===== -->
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-3xl lg:text-5xl font-bold text-[#0A0F2C]"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Our <span class="text-[#2F80FF]">Service</span>
            </h2>

            <p class="text-gray-500 max-w-3xl mx-auto mt-4 text-sm lg:text-base">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Pellentesque pharetra arcu at mi maximus.
            </p>
        </div>

        <!-- ===== Cards Grid ===== -->
        <div class="grid lg:grid-cols-2 gap-10">

            <!-- CARD -->
            <div class="service-card" data-aos="fade-right">
                <img src="/assets/images/Design.png" class="service-icon bg-blue-400" alt="Feed Layout">
                <h3 class="service-title">Feed Layout</h3>
                <p class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus hendrerit suscipit egestas.
                </p>
            </div>

            <div class="service-card" data-aos="fade-left">
                <img src="/assets/images/article.png" class="service-icon" alt="Articles">
                <h3 class="service-title">Articles</h3>
                <p class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus hendrerit suscipit egestas.
                </p>
            </div>

            <div class="service-card" data-aos="fade-right" data-aos-delay="100">
                <img src="/assets/images/Hashtag.png" class="service-icon" alt="Viral Hashtag">
                <h3 class="service-title">Viral Hashtag</h3>
                <p class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus hendrerit suscipit egestas.
                </p>
            </div>

            <div class="service-card" data-aos="fade-left" data-aos-delay="100">
                <img src="/assets/images/Text.png" class="service-icon" alt="Caption Copywriting">
                <h3 class="service-title">Caption Copywriting</h3>
                <p class="service-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus hendrerit suscipit egestas.
                </p>
            </div>

        </div>

        <!-- CTA -->
        <div class="text-center mt-20" data-aos="zoom-in">
            <a href="javascript:void(0)" onclick="openContactPopup()"
               class="inline-flex items-center justify-center
                      bg-[#2F80FF] text-white
                      px-8 py-4 rounded-xl font-semibold
                      shadow-lg hover:shadow-xl
                      transition-all duration-300 hover:bg-[#1c6fe3]">
                Let’s talk
            </a>
        </div>

    </div>
</section>
<style>
/* BASE CARD (Hashtag jaisa look) */
.service-card {
    background: #ffffff;
    border: 2px dashed #40B6FF;
    border-radius: 24px;
    padding: 36px;
    transition: all 0.35s ease;
    cursor: pointer;
}

/* ICON */
.service-icon {
    width: 48px;
    height: 48px;
    margin-bottom: 16px;
    transition: transform 0.35s ease;
}

/* TEXT */
.service-title {
    font-size: 20px;
    font-weight: 700;
    color: #0A0F2C;
    margin-bottom: 8px;
}

.service-text {
    font-size: 14px;
    color: #6B7280;
    line-height: 1.7;
}

/* HOVER = Feed Layout style */
.service-card:hover {
    background: #40B6FF;
    border-color: #40B6FF;
    transform: translateY(-10px);
    box-shadow: 0 25px 55px rgba(64,182,255,0.45);
}

.service-card:hover .service-title,
.service-card:hover .service-text {
    color: #ffffff;
}

.service-card:hover .service-icon {
    transform: scale(1.15) rotate(5deg);
}

/* Responsive */
@media (max-width: 768px) {
    .service-card {
        padding: 28px;
    }
}
</style>



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

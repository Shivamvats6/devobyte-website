@extends('layouts.app')

@section('content')

@section('title', 'Services – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[420px] flex items-center">

    <img src="/assets/images/service-banner.png" class="absolute inset-0 w-full h-full object-cover" alt="Team Banner">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
        <h1 class="text-5xl font-extrabold text-white mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
            Our <span class="text-blue-400">Services</span>
        </h1>

        <div class="inline-flex items-center gap-2 text-sm text-white/80
                border border-white/30 px-4 py-2 rounded-lg"
            style="font-family:'Inter', sans-serif;">
            <a href="/" class="hover:text-white">Home</a>
            <span>›</span>
            <span class="text-white font-semibold">Our Services</span>
        </div>
    </div>
</section>

<!-- ================= OUR SERVICES ================= -->
        <section class="py-28 bg-white" data-aos="fade-up">

            <div class="max-w-7xl mx-auto px-6">




                <!-- Services Grid -->
                <div class="grid lg:grid-cols-2 gap-10">

                    <!-- CARD 1 -->
                    <div data-aos="fade-right" data-aos-delay="100"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-6 text-center sm:text-left">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Performance Marketing <br>(Google & Meta Ads)</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Paid campaigns built for outcomes, not vanity metrics.
                                    We plan, launch, and optimize Google and Meta ad campaigns focused on qualified leads,
                                    conversions, and ROI.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/2_illustration_01.png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div data-aos="fade-left" data-aos-delay="150"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row-reverse justify-between items-center sm:items-start gap-6 text-center sm:text-right">

                            <div>
                                <h3 class="font-bold text-lg mb-3">LinkedIn Marketing</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Turn LinkedIn into a consistent lead and authority channel.
                                    We help founders and teams build visibility, trust, and inbound leads through strategy,
                                    content, and targeted outreach.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Group.png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div data-aos="fade-right" data-aos-delay="200"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-6 text-center sm:text-left">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Search Engine<br> Optimization (SEO)</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Be visible when intent is highest.
                                    Our SEO approach focuses on long-term rankings, quality traffic, and sustainable growth
                                    — without shortcuts.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Service - Illustration (1).png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 4 -->
                    <div data-aos="fade-left" data-aos-delay="250"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row-reverse justify-between items-center sm:items-start gap-6 text-center sm:text-right">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Social Media Marketing</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Build presence, engagement, and demand.
                                    We create and manage social media strategies that strengthen your brand and support your
                                    growth goals.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Service - Illustration (2).png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 5 -->
                    <div data-aos="fade-right" data-aos-delay="300"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-6 text-center sm:text-left">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Lead Generation</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Leads that actually convert.
                                    We design lead generation systems using the right mix of platforms, messaging, and
                                    funnels to drive qualified enquiries.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Service - Illustration (3).png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 6 -->
                    <div data-aos="fade-left" data-aos-delay="350"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row-reverse justify-between items-center sm:items-start gap-6 text-center sm:text-right">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Influencer Marketing</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Authentic reach with real impact.
                                    We collaborate with relevant creators to help your brand connect with the right audience
                                    in a credible way.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Group (1).png" class="w-36 sm:w-40">
                        </div>
                    </div>
                    <!-- CARD 7 -->
                    <div data-aos="fade-right" data-aos-delay="100"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-6 text-center sm:text-left">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Email Marketing</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Stay connected and drive action.
                                    From newsletters to automated campaigns, we use email to nurture leads, improve
                                    retention, and increase conversions.

                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Service - Illustration.png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 8 -->
                    <div data-aos="fade-left" data-aos-delay="150"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row-reverse justify-between items-center sm:items-start gap-6 text-center sm:text-right">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Conversion-Focused Websites</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Websites built to perform, not just look good.
                                    We develop fast, scalable, and secure websites designed to support marketing, capture
                                    leads, and drive conversions.

                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Group.png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 9 -->
                    <div data-aos="fade-right" data-aos-delay="200"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-6 text-center sm:text-left">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Mobile & Web App Development</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Custom-built applications designed for scale.
                                    From MVPs to enterprise-grade apps, we build reliable, user-friendly solutions aligned
                                    with your business goals.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/app-development.png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 10 -->
                    <div data-aos="fade-left" data-aos-delay="250"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row-reverse justify-between items-center sm:items-start gap-6 text-center sm:text-right">

                            <div>
                                <h3 class="font-bold text-lg mb-3">Custom Software Solutions</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Technology built around your workflow.
                                    We design and develop custom systems that solve real operational problems and integrate
                                    seamlessly with your business.

                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Service - Illustration (2).png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 11 -->
                    <div data-aos="fade-right" data-aos-delay="300"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-6 text-center sm:text-left">

                            <div>
                                <h3 class="font-bold text-lg mb-3">AI Chatbots & Assistants</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Smarter conversations, better experiences.
                                    We build AI-powered chatbots that handle support, lead qualification, and engagement —
                                    24/7.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Service - Illustration (3).png" class="w-36 sm:w-40">
                        </div>
                    </div>

                    <!-- CARD 12 -->
                    <div data-aos="fade-left" data-aos-delay="350"
                        class="group rounded-3xl p-10 bg-[#FFF4F2]
                hover:bg-[#EDEFFF] transition duration-300">

                        <div
                            class="flex flex-col sm:flex-row-reverse justify-between items-center sm:items-start gap-6 text-center sm:text-right">

                            <div>
                                <h3 class="font-bold text-lg mb-3">AI Automation & Workflows</h3>
                                <p class="text-gray-600 mb-6 max-w-sm mx-auto sm:mx-0">
                                    Reduce effort. Increase efficiency.
                                    We automate repetitive tasks and business processes using AI to save time, reduce costs,
                                    and improve productivity.
                                </p>

                                <a href="javascript:void(0)" onclick="openContactPopup()"
                                    class="inline-flex px-6 py-2 rounded-full border border-gray-300
                            text-sm font-medium
                            group-hover:bg-[#2F80ED]
                            group-hover:text-white
                            group-hover:border-[#2F80ED]
                            transition">
                                    See Details
                                </a>
                            </div>

                            <img src="/assets/images/Group (1).png" class="w-36 sm:w-40">
                        </div>
                    </div>

                </div>
            </div>
        </section>
<!-- ================= SMM SERVICES SECTION ================= -->
<section class="py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ================= HEADING (CENTERED) ================= -->
        <div class="text-center mb-16" data-aos="fade-up">

            <h2 class="text-4xl xl:text-5xl font-extrabold mb-4"
                style="font-family:'Montserrat Alternates', sans-serif;">
                <span class="text-blue-400">Social Media</span> Marketing Services
            </h2>

            <p class="text-gray-500 tracking-wide font-semibold"
               style="font-family:'Inter', sans-serif;">
                Turning content into consistent business growth
            </p>

        </div>

        <!-- ================= CENTER GRID (3 x 2) ================= -->
        <div class="flex justify-center">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl">

                <!-- Instagram -->
                <div data-aos="fade-up" data-aos-delay="100" class="smm-card cursor-pointer" onclick="openContactPopup()">
                    <div class="smm-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h4 class="smm-title">Instagram marketing</h4>
                    <p class="smm-text">
                        Build visibility, engagement, and demand on Instagram.
                        We create platform-specific content and campaigns that help your brand connect, grow, and convert.
                    </p>
                </div>

                <!-- Facebook -->
                <div data-aos="fade-up" data-aos-delay="150" class="smm-card cursor-pointer" onclick="openContactPopup()">
                    <div class="smm-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <h4 class="smm-title">Facebook marketing</h4>
                    <p class="smm-text">
                        Reach the right audience with precision.
                        From content to paid campaigns, we use Facebook to drive awareness, leads, and measurable results.
                    </p>
                </div>

                <!-- YouTube -->
                <div data-aos="fade-up" data-aos-delay="200" class="smm-card cursor-pointer" onclick="openContactPopup()">
                    <div class="smm-icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <h4 class="smm-title">YouTube marketing</h4>
                    <p class="smm-text">
                        Tell your story through high-impact video.
                        We help brands grow on YouTube with strategic content, optimization, and performance-driven campaigns.
                    </p>
                </div>

                <!-- Twitter -->
                <div data-aos="fade-up" data-aos-delay="250" class="smm-card cursor-pointer" onclick="openContactPopup()">
                    <div class="smm-icon">
                        <i class="fab fa-x-twitter"></i>
                    </div>
                    <h4 class="smm-title">Twitter marketing</h4>
                    <p class="smm-text">
                        Join conversations that matter.
                        We build presence and thought leadership on X through timely content and audience-focused strategies.
                    </p>
                </div>

                <!-- LinkedIn -->
                <div data-aos="fade-up" data-aos-delay="300" class="smm-card cursor-pointer" onclick="openContactPopup()">
                    <div class="smm-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <h4 class="smm-title">LinkedIn marketing</h4>
                    <p class="smm-text">
                        Generate leads and drive traffic using LinkedIn growth strategies.
                    </p>
                </div>

                <!-- Amazon -->
                <div data-aos="fade-up" data-aos-delay="350" class="smm-card cursor-pointer" onclick="openContactPopup()">
                    <div class="smm-icon">
                        <i class="fab fa-amazon"></i>
                    </div>
                    <h4 class="smm-title">Amazon marketing</h4>
                    <p class="smm-text">
                        Boost sales with optimized Amazon marketing campaigns.
                    </p>
                </div>

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
        padding: 26px;
        border: 1px solid #eee;
        box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
        transition: all .35s ease;
        height: 100%;
    }

    /* ICON */
    .smm-icon {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: #eaf2ff;
        color: #2f80ed;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        font-size: 18px;
        transition: all .35s ease;
    }

    /* TITLES */
    .smm-title {
        font-weight: 800;
        font-size: 17px;
        margin-bottom: 10px;
        color: #111827;
    }

    /* TEXT */
    .smm-text {
        font-size: 14px;
        color: #6b7280;
        transition: color .35s ease;
        line-height: 1.6;
    }

    /* HOVER EFFECT */
    .smm-card:hover {
        background: #6AA9FF;
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
</style>

@include('pages.home-sections.get-in-touch')

@endsection

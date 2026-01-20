@extends('layouts.app')

@section('content')

@section('title', 'Influencer Marketing – Devobyte')

<!-- ================= INFLUENCER HERO SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT CONTENT ================= -->
            <div data-aos="fade-right">

                <h1 class="text-3xl sm:text-4xl xl:text-5xl
                           font-extrabold text-gray-900 leading-tight mb-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Manage All Your<br>
                    Influencer Marketing<br>
                    in One Place!
                </h1>

                <p class="text-gray-600 leading-relaxed mb-8 max-w-xl font-inter">
                    Discover influencers, handle relationships, and manage campaigns and programs
                    with our all-in-one influencer marketing solution built to scale your brand.
                </p>

                <!-- CTA BUTTON (SEO BANNER STYLE) -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="group relative inline-flex items-center
                          bg-white text-blue-600
                          border-2 border-blue-600
                          pl-7 pr-[4.25rem] py-5
                          rounded-full
                          min-w-[150px]
                          justify-center sm:justify-start
                          font-semibold text-sm
                          transition-all duration-300
                          hover:bg-blue-600 hover:text-white
                          font-inter shadow-lg">

                    <span class="whitespace-nowrap">
                        LET’S TALK
                    </span>

                    <span
                        class="absolute right-1 top-1/2 -translate-y-1/2
                               w-12 h-12
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

            </div>

            <!-- ================= RIGHT IMAGE ================= -->
            <div class="relative flex justify-center lg:justify-end" data-aos="fade-left">

                <img src="/assets/images/influencer.png" alt="Influencer Marketing"
                    class="w-full max-w-sm sm:max-w-md lg:max-w-lg xl:max-w-xl
                            transform lg:scale-110 xl:scale-125
                            transition-transform duration-300">

            </div>

        </div>

    </div>

</section>



<!-- ================= EMPOWER YOUR TEAM SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT IMAGE ================= -->
            <div class="relative" data-aos="fade-right">

                <img src="/assets/images/empower.png" alt="Empower Your Team" class="w-full max-w-md mx-auto lg:mx-0">

            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div data-aos="fade-left">

                <h2 class="text-3xl sm:text-4xl xl:text-5xl
                           font-extrabold text-gray-900 leading-tight mb-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Empower Your <span class="text-blue-500">Team</span>
                </h2>

                <p class="text-gray-600 leading-relaxed mb-8 max-w-xl font-inter">
                    With Devobyte handling the routine work, your team can spend less time managing
                    tasks and more time building impactful influencer campaigns that drive growth.
                </p>

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
                    Let’s talk
                </a>

            </div>

        </div>

    </div>

</section>

<!-- ================= INFLUENCER TOOLS SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden"
    style="background-color:#2F80ED; background-image:url('/assets/images/seo_bg.png'); background-size:cover; background-position:center;">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT CONTENT ================= -->
            <div data-aos="fade-right">

                <h2 class="text-3xl sm:text-4xl xl:text-5xl
                           font-extrabold text-white leading-tight mb-6"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Optimize Your Social Efforts<br>
                    with Our Influencer Marketing Tools
                </h2>

                <!-- CTA BUTTON -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="group relative inline-flex items-center
                          bg-white text-blue-600
                          border-2 border-blue-600
                          pl-7 pr-[4.25rem] py-5
                          rounded-full
                          min-w-[160px]
                          justify-center sm:justify-start
                          font-semibold text-sm
                          transition-all duration-300
                          hover:bg-blue-600 hover:text-white
                          font-inter shadow-lg">

                    <span class="whitespace-nowrap">
                        LET’S TALK
                    </span>

                    <span
                        class="absolute right-1 top-1/2 -translate-y-1/2
                               w-12 h-12
                               bg-blue-600 text-white
                               rounded-full
                               flex items-center justify-center
                               text-lg
                               transition-all duration-300
                               group-hover:bg-white
                               group-hover:text-blue-600
                               group-hover:scale-105">
                        →
                    </span>
                </a>

            </div>

            <!-- ================= RIGHT ZIG-ZAG CARDS ================= -->
            <div class="relative grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-12">

                <!-- LEFT COLUMN -->
                <div class="flex flex-col gap-12">

                    <!-- CARD 1 -->
                    <div class="group bg-white rounded-3xl p-8 shadow-xl
                                transition-all duration-300 hover:bg-blue-400 hover:shadow-2xl
                                hover:-translate-y-1"
                        data-aos="fade-left">

                        <h3
                            class="text-xl font-bold mb-3 text-gray-900
                                   transition-all duration-300 group-hover:text-white font-montserrat">
                            Powerful Influencer Discovery
                        </h3>

                        <p
                            class="text-gray-600 leading-relaxed
                                  transition-all duration-300 group-hover:text-white/90 font-inter">
                            With access to over 300 million creators globally, our tool helps you identify,
                            evaluate, and connect with the right influencers—ensuring every campaign is a perfect fit.
                        </p>

                    </div>

                    <!-- CARD 3 -->
                    <div class="group bg-white rounded-3xl p-8 shadow-xl
                                transition-all duration-300 hover:bg-blue-400 hover:shadow-2xl
                                hover:-translate-y-1"
                        data-aos="fade-left" data-aos-delay="200">

                        <h3
                            class="text-xl font-bold mb-3 text-gray-900
                                   transition-all duration-300 group-hover:text-white font-montserrat">
                            Run End-to-end Campaigns
                        </h3>

                        <p
                            class="text-gray-600 leading-relaxed
                                  transition-all duration-300 group-hover:text-white/90 font-inter">
                            Collaborate with influencers seamlessly, forecast campaign results with confidence,
                            and keep budgets fully under control—all from one unified platform.
                        </p>

                    </div>

                </div>

                <!-- RIGHT COLUMN (SHIFTED DOWN BY 50%) -->
                <div class="flex flex-col gap-12 sm:pt-[90px]">

                    <!-- CARD 2 -->
                    <div class="group bg-white rounded-3xl p-8 shadow-xl
                                transition-all duration-300 hover:bg-blue-400 hover:shadow-2xl
                                hover:-translate-y-1"
                        data-aos="fade-left" data-aos-delay="100">

                        <h3
                            class="text-xl font-bold mb-3 text-gray-900
                                   transition-all duration-300 group-hover:text-white font-montserrat">
                            Manage Your Influencer Database
                        </h3>

                        <p
                            class="text-gray-600 leading-relaxed
                                  transition-all duration-300 group-hover:text-white/90 font-inter">
                            Build and manage a powerful influencer database tailored to your workflow.
                            Create a centralized roster with custom fields—no clutter, no guesswork.
                        </p>

                    </div>

                    <!-- CARD 4 -->
                    <div class="group bg-white rounded-3xl p-8 shadow-xl
                                transition-all duration-300 hover:bg-blue-400 hover:shadow-2xl
                                hover:-translate-y-1"
                        data-aos="fade-left" data-aos-delay="300">

                        <h3
                            class="text-xl font-bold mb-3 text-gray-900
                                   transition-all duration-300 group-hover:text-white font-montserrat">
                            Measure Influencer Success
                        </h3>

                        <p
                            class="text-gray-600 leading-relaxed
                                  transition-all duration-300 group-hover:text-white/90 font-inter">
                            Generate tailored reports and gain actionable insights to refine your social strategy
                            by measuring the impact of sponsored and organic content.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= INFLUENCER FEATURES SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden bg-[#F8FAFF]">

    <!-- Decorative Background -->
    <div class="absolute inset-0 opacity-40 pointer-events-none"
        style="background-image: radial-gradient(#cfe2ff 1px, transparent 1px); background-size: 24px 24px;">
    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-16" data-aos="fade-up">

            <h2 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold leading-tight text-gray-900"
                style="font-family:'Montserrat Alternates', sans-serif;">
                All the <span class="text-blue-500">Influencer <br>Marketing</span> Features
            </h2>

        </div>

        <!-- ================= FEATURES GRID ================= -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- CARD 1 – Lift + Glow -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:-translate-y-3 hover:shadow-2xl hover:shadow-blue-200 hover:bg-blue-400"
                data-aos="fade-up">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    1
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Platform Coverage
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Leverage influencer marketing across Facebook, Instagram, and YouTube.
                </p>
            </div>

            <!-- CARD 2 – Rotate + Zoom -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:rotate-1 hover:scale-105 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="50">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    2
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Powerful Filtering
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Filter by interests, brand affinity, locations, fake followers and more.
                </p>
            </div>

            <!-- CARD 3 – Scale Up -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:scale-110 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="100">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    3
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Seamless Management
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Easily add influencers to your custom influencer CRM.
                </p>
            </div>

            <!-- CARD 4 – Tilt -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:-rotate-2 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="150">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    4
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Analyze Any Creator
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Get influencer stats instantly without back-and-forth communication.
                </p>
            </div>

            <!-- CARD 5 – Slide Right -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:translate-x-2 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="200">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    5
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Streamlined Payments
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Pay influencers easily with streamlined invoices.
                </p>
            </div>

            <!-- CARD 6 – Drop -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:translate-y-2 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="250">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    6
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Customizable Reporting
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Create real-time reports to demonstrate success.
                </p>
            </div>

            <!-- CARD 7 – Pulse -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:scale-105 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="300">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    7
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Sharing Functionality
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Share profiles, lists, and campaign reports easily.
                </p>
            </div>

            <!-- CARD 8 – Glow -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:scale-110 hover:shadow-blue-300 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="350">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    8
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Detect Fake Followers
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Spot bots and fake audiences to safeguard your investment.
                </p>
            </div>

            <!-- CARD 9 – Lift -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:-translate-y-2 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="400">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    9
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Audience Overlap
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Analyze overlap between influencers to improve results.
                </p>
            </div>

            <!-- CARD 10 – Tilt Right -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:rotate-2 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="450">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    10
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Pitch Smarter Proposals
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Leave comments, approve or reject creators easily.
                </p>
            </div>

            <!-- CARD 11 – Zoom + Glow -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:scale-105 hover:shadow-blue-300 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="500">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    11
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Automated Outreach
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Contact influencers in bulk and track performance.
                </p>
            </div>

            <!-- CARD 12 – Big Zoom -->
            <div class="group bg-white rounded-3xl p-8 shadow-lg
                        transition-all duration-500
                        hover:scale-110 hover:shadow-2xl hover:bg-blue-400"
                data-aos="fade-up" data-aos-delay="550">

                <div
                    class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold mb-4
                            transition-all duration-500 group-hover:bg-white group-hover:text-blue-600">
                    12
                </div>

                <h4
                    class="text-lg font-semibold mb-2 text-gray-900 transition-all duration-500 group-hover:text-white font-montserrat">
                    Automated Content Collection
                </h4>

                <p
                    class="text-gray-600 text-sm leading-relaxed transition-all duration-500 group-hover:text-white/90 font-inter">
                    Collect influencer content even disappearing stories.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- ================= INFLUENCER CTA BANNER ================= -->
<section class="relative py-10 lg:py-20 overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="/assets/images/Group 164734.png" alt="Influencer CTA Background"
            class="w-full h-full object-certain object-center">
    </div>

    <!-- Soft Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 via-blue-500/10 to-blue-400/20"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- RIGHT ALIGNED CONTENT -->
        <div class="flex justify-end">
            <div class="w-full lg:w-1/2 text-left" data-aos="fade-left">

                <!-- Heading -->
                <h2 class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl
                           font-extrabold text-white leading-tight mt-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Looking To Scale Your Influencer Marketing?
                </h2>

                <!-- Sub Text -->
                <p class="text-white/90 mb-5 font-inter leading-relaxed max-w-lg">
                    Connect With Us And Turn Creator Partnerships Into Business Growth.
                </p>

                <!-- CTA BUTTON (COMPACT VERSION) -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="group relative inline-flex items-center
                          bg-white text-blue-600
                          border-2 border-white
                          pl-5 pr-[3.5rem] py-3
                          rounded-full
                          min-w-[140px]
                          font-semibold text-xs
                          transition-all duration-300
                          hover:bg-blue-600 hover:text-white
                          font-inter shadow-lg">

                    <span class="whitespace-nowrap">
                        LET’S TALK
                    </span>

                    <span
                        class="absolute right-1 top-1/2 -translate-y-1/2
                               w-9 h-9
                               bg-blue-600 text-white
                               rounded-full
                               flex items-center justify-center
                               text-sm
                               transition-all duration-300
                               group-hover:bg-white
                               group-hover:text-blue-600
                               group-hover:scale-110">
                        <i class="fa-solid fa-paper-plane text-sm"></i>
                    </span>
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

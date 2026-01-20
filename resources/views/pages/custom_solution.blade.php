@extends('layouts.app')

@section('title', 'Custom Software Development Services – Devobyte')

@section('content')

<!-- ================= HERO BANNER ================= -->
<section class="relative h-screen min-h-[100vh] w-full overflow-hidden">

    <!-- Background Image -->
    <img src="/assets/images/Custom banner.png"
         class="absolute inset-0 w-full h-full object-fit object-center"
         alt="Custom Software Banner">



    <!-- Content -->
    <div class="relative z-10 h-full flex items-center">

        <div class="max-w-7xl mx-auto px-6 w-full">

            <div class="max-w-2xl" data-aos="fade-right">

                <!-- HEADING -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-5xl
                           font-extrabold text-white leading-tight mb-8"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Custom Software
                    <span class="text-blue-400 block">Development Services</span>
                </h1>

                <!-- SUB TEXT (optional but recommended) -->
                <p class="text-white/90 text-lg mb-10 font-inter leading-relaxed">
                    We build scalable, secure and high-performance custom software solutions
                    tailored to your business goals.
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

<!-- ================= CUSTOM SOFTWARE SERVICES SECTION ================= -->
<section class="relative py-24 overflow-hidden">

    <!-- Background Split (TOP / BOTTOM) -->
    <div class="absolute inset-0 flex flex-col">

        <!-- TOP: Textured + Blue BG -->
        <div class="h-1/2 relative"
        style="background-color:#7aa6df; background-image:url('/assets/images/seo_bg.png');
         background-size:cover; background-position:center;">
></div>
        </div>

        <!-- BOTTOM: White BG -->
        <div class="h-1/2 bg-white"></div>

    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-20" data-aos="fade-up">

            <h2 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold text-gray-900 leading-tight"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Custom Software Development<br>
                Services We Offer
            </h2>

            <p class="mt-4 text-gray-600 max-w-3xl mx-auto font-inter leading-relaxed">
                Devobyte delivers end-to-end custom software solutions that modernize systems,
                improve performance, and turn IT investments into measurable results.
            </p>

        </div>

        <!-- ================= GRID ================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- ================= CARD 1 ================= -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden
                        flex h-[280px]" data-aos="fade-right">

                <!-- TEXT -->
                <div class="w-full group-hover:w-1/2 transition-all duration-500 p-8 flex flex-col justify-center">

                    <h3 class="text-xl font-bold mb-4 text-gray-900 font-montserrat">
                        Software Consulting
                    </h3>

                    <p class="text-gray-600 font-inter leading-relaxed">
                        We understand your business goals and recommend software solutions that truly fit.
                        Our strategic planning maximizes ROI and ensures your technology supports long-term growth.
                    </p>
                </div>

                <!-- IMAGE -->
                <div class="w-0 group-hover:w-1/2 transition-all duration-500 overflow-hidden">
                    <img src="/assets/images/Rectangle 4487.png"
                         class="w-full h-full object-cover"
                         alt="Software Consulting">
                </div>

                <!-- NUMBER -->
                <span class="absolute bottom-4 right-6 text-5xl font-extrabold text-blue-200">01</span>

            </div>

            <!-- ================= CARD 2 ================= -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden
                        flex h-[280px]" data-aos="fade-left">

                <!-- IMAGE -->
                <div class="w-0 group-hover:w-1/2 transition-all duration-500 overflow-hidden order-2">
                    <img src="/assets/images/Rectangle 4487 (1).png"
                         class="w-full h-full object-cover"
                         alt="Tech Advisory">
                </div>

                <!-- TEXT -->
                <div class="w-full group-hover:w-1/2 transition-all duration-500 p-8 flex flex-col justify-center order-1">

                    <h3 class="text-xl font-bold mb-4 text-gray-900 font-montserrat">
                        Tech Advisory
                    </h3>

                    <p class="text-gray-600 font-inter leading-relaxed">
                        Backed by decades of expertise, we guide your digital transformation and optimize systems
                        to deliver real business impact.
                    </p>
                </div>

                <!-- NUMBER -->
                <span class="absolute bottom-4 right-6 text-5xl font-extrabold text-blue-200">02</span>

            </div>

            <!-- ================= CARD 3 ================= -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden
                        flex h-[280px]" data-aos="fade-right">

                <!-- TEXT -->
                <div class="w-full group-hover:w-1/2 transition-all duration-500 p-8 flex flex-col justify-center">

                    <h3 class="text-xl font-bold mb-4 text-gray-900 font-montserrat">
                        Software Modernization
                    </h3>

                    <p class="text-gray-600 font-inter leading-relaxed">
                        We modernize legacy applications to make them faster, scalable, and future-ready.
                        Seamlessly migrate to modern platforms while improving performance, maintainability, and reliability.
                    </p>
                </div>

                <!-- IMAGE -->
                <div class="w-0 group-hover:w-1/2 transition-all duration-500 overflow-hidden">
                    <img src="/assets/images/Rectangle 4487 (1).png"
                         class="w-full h-full object-cover"
                         alt="Software Modernization">
                </div>

                <!-- NUMBER -->
                <span class="absolute bottom-4 right-6 text-5xl font-extrabold text-blue-200">03</span>

            </div>

            <!-- ================= CARD 4 ================= -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden
                        flex h-[280px]" data-aos="fade-left">

                <!-- IMAGE -->
                <div class="w-0 group-hover:w-1/2 transition-all duration-500 overflow-hidden order-2">
                    <img src="/assets/images/Rectangle 4487.png"
                         class="w-full h-full object-cover"
                         alt="API Integration">
                </div>

                <!-- TEXT -->
                <div class="w-full group-hover:w-1/2 transition-all duration-500 p-8 flex flex-col justify-center order-1">

                    <h3 class="text-xl font-bold mb-4 text-gray-900 font-montserrat">
                        API & Software Integration
                    </h3>

                    <p class="text-gray-600 font-inter leading-relaxed">
                        We connect your software, APIs, and third-party tools into one seamless ecosystem.
                        By automating integrations and removing manual dependencies, we streamline workflows.
                    </p>
                </div>

                <!-- NUMBER -->
                <span class="absolute bottom-4 right-6 text-5xl font-extrabold text-blue-200">04</span>

            </div>

        </div>

    </div>

</section>


<!-- ================= CUSTOM SOFTWARE INTRO SECTION ================= -->
<section class="relative py-20 lg:py-28 overflow-hidden bg-[#72B3FF]">

    <!-- subtle pattern overlay -->
    <div class="absolute inset-0 opacity-10 pointer-events-none"
         style="background-image: url('/assets/images/pattern-light.png'); background-size: 400px;">
    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT CONTENT ================= -->
            <div data-aos="fade-right" class="w-full">

                <h2 class="text-3xl sm:text-4xl lg:text-4xl xl:text-3xl
                           font-extrabold text-white leading-[1.15] mb-6
                           max-w-2xl"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Delivering thoughtfully crafted business software,
                    tailored to your goals and driven by technologies
                    built for the future.
                </h2>

                <p class="text-white/90 leading-relaxed mb-8 max-w-xl font-inter">
                    Our custom software solutions go beyond just writing code. We handle the entire application journey
                    —from idea and product strategy to design, security testing, and compliance—so you get a solution
                    that’s complete and reliable.
                </p>

                <!-- CTA BUTTON -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                   class="inline-flex items-center justify-center
                          bg-white text-blue-600
                          px-8 py-3 rounded-full
                          font-semibold text-sm
                          transition-all duration-300
                          hover:bg-blue-600 hover:text-white
                          font-inter shadow-lg">
                    Let’s talk
                </a>

            </div>

            <!-- ================= RIGHT IMAGE ================= -->
            <div class="relative flex justify-center lg:justify-end" data-aos="fade-left">

                <div class="w-full max-w-md rounded-3xl overflow-hidden shadow-2xl">
                    <img src="/assets/images/Rectangle 44.png"
                         alt="Custom Software Team"
                         class="w-full h-full object-cover">
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= TRUST FACTORS SECTION ================= -->
<section class="relative py-20 lg:py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-16" data-aos="fade-up">

            <h2 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold text-gray-900 leading-tight mb-4"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Factors That Make Devobyte The Most Trusted
                Custom Software Development Company
            </h2>

            <p class="text-gray-600 max-w-3xl mx-auto font-inter leading-relaxed">
                No matter where you are in your journey—startup or industry leader—we design custom software solutions
                that boost user engagement and maximize ROI.
            </p>

        </div>

        <!-- ================= CARDS GRID ================= -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- CARD 1 -->
            <div class="bg-[#F3F8FF] rounded-3xl p-10 shadow-lg transition-all duration-300
                        hover:-translate-y-2 hover:shadow-2xl"
                 data-aos="fade-up">

                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center mb-6 shadow">
                    <img src="/assets/images/image 315.png" alt="Quality Product" class="w-7 h-7 object-contain">
                </div>

                <h3 class="text-xl font-bold mb-3 text-gray-900 font-montserrat">
                    Quality Product
                </h3>

                <p class="text-gray-600 font-inter leading-relaxed">
                    We begin with an MVP to test what truly works for your product. By continuously testing, learning
                    from user feedback, and improving at every step, we deliver a user-friendly and dependable software solution.
                </p>

            </div>

            <!-- CARD 2 -->
            <div class="bg-[#FFF8EC] rounded-3xl p-10 shadow-lg transition-all duration-300
                        hover:-translate-y-2 hover:shadow-2xl"
                 data-aos="fade-up" data-aos-delay="100">

                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center mb-6 shadow">
                    <img src="/assets/images/image 316.png" alt="Latest Tech" class="w-7 h-7 object-contain">
                </div>

                <h3 class="text-xl font-bold mb-3 text-gray-900 font-montserrat">
                    Latest Technology Stack
                </h3>

                <p class="text-gray-600 font-inter leading-relaxed">
                    We use modern technologies and programming languages to ensure seamless integration—from system architecture
                    and development to deployment and ongoing maintenance.
                </p>

            </div>

            <!-- CARD 3 -->
            <div class="bg-[#FFF4F4] rounded-3xl p-10 shadow-lg transition-all duration-300
                        hover:-translate-y-2 hover:shadow-2xl"
                 data-aos="fade-up" data-aos-delay="200">

                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center mb-6 shadow">
                    <img src="/assets/images/image 317.png" alt="Quick Development" class="w-7 h-7 object-contain">
                </div>

                <h3 class="text-xl font-bold mb-3 text-gray-900 font-montserrat">
                    Quick Development
                </h3>

                <p class="text-gray-600 font-inter leading-relaxed">
                    Backed by deep expertise and agile best practices, our team streamlines development processes to deliver
                    mobile software solutions up to 50% faster—without compromising quality.
                </p>

            </div>

            <!-- CARD 4 -->
            <div class="bg-[#F1FFFA] rounded-3xl p-10 shadow-lg transition-all duration-300
                        hover:-translate-y-2 hover:shadow-2xl"
                 data-aos="fade-up" data-aos-delay="300">

                <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center mb-6 shadow">
                    <img src="/assets/images/image 318.png" alt="Transparency" class="w-7 h-7 object-contain">
                </div>

                <h3 class="text-xl font-bold mb-3 text-gray-900 font-montserrat">
                    Complete Transparency
                </h3>

                <p class="text-gray-600 font-inter leading-relaxed">
                    We believe transparency builds strong partnerships. At every stage of development, we keep you informed
                    with clear progress updates and full visibility into every technical decision we make.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= SOFTWARE SOLUTIONS SECTION ================= -->
<section class="relative py-16 lg:py-24 overflow-hidden bg-[#1F2BD8]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT IMAGE ================= -->
            <div class="relative" data-aos="fade-right">

                <!-- Custom shape wrapper -->
                <div class="relative w-full max-w-md aspect-square
                            rounded-[48px] overflow-hidden
                            backdrop-blur-sm">

                    <img src="/assets/images/solutions.png"
                         alt="Software Solutions"
                         class="w-full h-full object-cover">

                    <!-- Mask effect -->
                    <div class="absolute inset-0 rounded-[48px]
                                ring-1 ring-white/20 pointer-events-none"></div>
                </div>

            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div data-aos="fade-left">

                <h2 class="text-3xl sm:text-4xl xl:text-5xl
                           font-extrabold text-white leading-tight mb-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Software Solutions <br>
                    for Every Industry
                </h2>

                <p class="text-white/80 leading-relaxed mb-8 max-w-xl font-inter">
                    From startups to enterprises, we design and develop industry-specific software
                    that solves real challenges, scales effortlessly, and drives measurable growth.
                </p>

                <!-- CTA BUTTON -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                   class="inline-flex items-center justify-center
                          bg-white text-blue-700
                          px-7 py-3 rounded-full
                          font-semibold text-sm
                          transition-all duration-300
                          hover:bg-blue-500 hover:text-white
                          shadow-lg font-inter">
                    Let’s talk
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

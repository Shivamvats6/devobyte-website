@extends('layouts.app')

@section('content')

@section('title', 'Mobile App Development – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[580px] flex items-center">

    <img src="/assets/images/mobile-banner.png" class="absolute inset-0 w-full h-full object-certain" alt="Development Banner">
    <div class="absolute inset-0"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
        <h1 class="text-5xl font-extrabold text-black mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
              Mobile <span class="text-blue-400"><br>App Development</span>
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

<!-- ================= MOBILE APP DEVELOPMENT SECTION ================= -->
<section class="relative py-28 overflow-hidden bg-white">

    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT IMAGE AREA ================= -->
            <div class="relative flex justify-center" data-aos="fade-right">

                <!-- Abstract Background Shape -->
                <div class="absolute -top-10 -left-10 w-[420px] h-[420px] bg-[#2F80FF]/20 rounded-[60%] blur-2xl"></div>
                <div class="absolute top-20 -left-20 w-[300px] h-[300px] bg-[#66A6FF]/30 rounded-[50%] blur-3xl"></div>

                <!-- Blue Shape Behind Image -->
                <div class="absolute inset-0 flex justify-center items-center">
                    <div class="w-[360px] h-[360px] bg-gradient-to-br from-[#2F80FF] to-[#66A6FF] rounded-[80px] -rotate-6"></div>
                </div>

                <!-- Mobile Image -->
                <img src="/assets/images/mobo.png"
                     alt="Full Stack Mobile App Development Company in India"
                     class="relative z-10 w-full max-w-lg drop-shadow-2xl
                            transition-transform duration-500 hover:scale-105">
            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div data-aos="fade-left">

                <h2 class="text-3xl lg:text-4xl font-bold text-[#0A0F2C] leading-tight mb-4"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Full Stack <span class="text-[#2F80FF]">Mobile App Development</span><br>
                    Company
                </h2>

                <p class="text-gray-500 text-base leading-relaxed mb-5"
                   style="font-family: 'Inter', sans-serif;">
                    Welcome to Devobyte Software, a trusted mobile app development company in India,
                    delivering high-quality Android and iOS applications for businesses worldwide.
                </p>

                <p class="text-gray-500 text-base leading-relaxed mb-5"
                   style="font-family: 'Inter', sans-serif;">
                    Our expert team builds secure, scalable, and user-friendly mobile apps tailored
                    to your business needs. We focus on innovation, performance, and reliability to
                    help your brand grow digitally.
                </p>

                <p class="text-gray-500 text-base leading-relaxed mb-8"
                   style="font-family: 'Inter', sans-serif;">
                    Partner with Devobyte Software and turn your mobile app idea into a powerful
                    digital experience.
                </p>

                <a href="javascript:void(0)"
                   onclick="openContactPopup()"
                   class="inline-flex items-center justify-center
                          bg-[#2F80FF] text-white
                          px-8 py-4 rounded-xl font-semibold text-sm
                          shadow-lg hover:shadow-xl
                          transition-all duration-300 hover:bg-[#1c6fe3]">
                    Let’s talk
                </a>

            </div>

        </div>
    </div>

</section>

<!-- ================= WHY CHOOSE DEVOBYTE – MOBILE APP SECTION ================= -->
<section class="relative py-28 overflow-hidden"
         style="background-color: #489CFF1A;">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT CONTENT ================= -->
            <div data-aos="fade-right">

                <h2 class="text-3xl lg:text-4xl font-bold text-[#0A0F2C] leading-tight mb-5"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Why Must A Business Choose Alliance with the Top<br>
                    <span class="text-[#2F80FF]">Mobile App Development</span> Company?
                </h2>

                <p class="text-gray-600 text-base leading-relaxed mb-4"
                   style="font-family: 'Inter', sans-serif;">
                    Discover end-to-end mobile app development solutions with Devobyte, a leading
                    mobile app development company in India. From app consulting to Play Store
                    publishing, we ensure a seamless and stress-free journey.
                </p>

                <p class="text-gray-600 text-base leading-relaxed mb-4"
                   style="font-family: 'Inter', sans-serif;">
                    We design intuitive, feature-rich Android apps that enhance scalability,
                    strengthen brand visibility, and expand your market reach. Our reliable
                    solutions are built to deliver delightful user experiences worldwide.
                </p>

                <p class="text-gray-600 text-base leading-relaxed mb-4"
                   style="font-family: 'Inter', sans-serif;">
                    With 7+ years of experience and a proven track record of apps achieving millions
                    of downloads, Devobyte is a trusted technology partner across industries.
                </p>

                <p class="text-gray-600 text-base leading-relaxed mb-8"
                   style="font-family: 'Inter', sans-serif;">
                    Partner with Devobyte Software and take your business to new digital heights.
                </p>

                <a href="javascript:void(0)"
                   onclick="openContactPopup()"
                   class="inline-flex items-center justify-center
                          bg-[#2F80FF] text-white
                          px-8 py-4 rounded-xl font-semibold text-sm
                          shadow-lg hover:shadow-xl
                          transition-all duration-300 hover:bg-[#1c6fe3]">
                    Let’s talk
                </a>

            </div>

            <!-- ================= RIGHT IMAGE ================= -->
            <div class="relative flex justify-center lg:justify-end" data-aos="fade-left">

                <!-- Soft background glow -->
                <div class="absolute -top-10 -right-10 w-[420px] h-[420px] bg-[#2F80FF]/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 -right-20 w-[300px] h-[300px] bg-[#66A6FF]/30 rounded-full blur-3xl"></div>

                <!-- Image -->
                <img src="/assets/images/moboapps.png"
                     alt="Top Mobile App Development Company in India"
                     class="relative z-10 w-full max-w-lg drop-shadow-2xl
                            transition-transform duration-500 hover:scale-105">
            </div>

        </div>

    </div>
</section>



<!-- ================= OUR TECHNOLOGY EXPERTISE ================= -->
<section class="relative py-28 overflow-hidden">

    <!-- ===== Background Gradient + Pattern ===== -->
    <div class="absolute inset-0"
         style="background:
         radial-gradient(circle at 20% 30%, rgba(255,255,255,0.08), transparent 40%),
         radial-gradient(circle at 80% 70%, rgba(255,255,255,0.06), transparent 40%),
         linear-gradient(180deg, #0F172A 0%, #1E3A8A 50%, #2F80FF 100%);">
    </div>

    <!-- ===== Subtle Tech Icons Background ===== -->
    <div class="absolute inset-0 opacity-10 pointer-events-none bg-repeat"
         style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22120%22 height=%22120%22 viewBox=%220 0 120 120%22><text x=%220%22 y=%2280%22 font-size=%2270%22 fill=%22white%22>⚙</text></svg>');">
    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-white"
                style="font-family: 'Montserrat Alternates', sans-serif;">
                Our Technology Expertise
            </h2>
        </div>

    </div>

    <!-- ================= SCROLL ROW 1 (LEFT TO RIGHT) ================= -->
    <div class="relative w-full overflow-hidden mb-10">

        <div class="tech-marquee-ltr">
            <div class="tech-track-ltr">

                <div class="tech-item node"><i class="fa-brands fa-node-js"></i><span>Node.js</span></div>
                <div class="tech-item php"><i class="fa-brands fa-php"></i><span>PHP</span></div>
                <div class="tech-item laravel"><i class="fa-brands fa-laravel"></i><span>Laravel</span></div>
                <div class="tech-item python"><i class="fa-brands fa-python"></i><span>Python</span></div>
                <div class="tech-item react"><i class="fa-brands fa-react"></i><span>React</span></div>
                <div class="tech-item vue"><i class="fa-brands fa-vuejs"></i><span>Vue.js</span></div>
                <div class="tech-item angular"><i class="fa-brands fa-angular"></i><span>Angular</span></div>
                <div class="tech-item js"><i class="fa-brands fa-js"></i><span>JavaScript</span></div>
                <div class="tech-item git"><i class="fa-brands fa-git-alt"></i><span>Git</span></div>

                <!-- duplicate -->
                <div class="tech-item node"><i class="fa-brands fa-node-js"></i><span>Node.js</span></div>
                <div class="tech-item php"><i class="fa-brands fa-php"></i><span>PHP</span></div>
                <div class="tech-item laravel"><i class="fa-brands fa-laravel"></i><span>Laravel</span></div>
                <div class="tech-item python"><i class="fa-brands fa-python"></i><span>Python</span></div>
                <div class="tech-item react"><i class="fa-brands fa-react"></i><span>React</span></div>
                <div class="tech-item vue"><i class="fa-brands fa-vuejs"></i><span>Vue.js</span></div>
                <div class="tech-item angular"><i class="fa-brands fa-angular"></i><span>Angular</span></div>
                <div class="tech-item js"><i class="fa-brands fa-js"></i><span>JavaScript</span></div>
                <div class="tech-item git"><i class="fa-brands fa-git-alt"></i><span>Git</span></div>

            </div>
        </div>

    </div>

    <!-- ================= SCROLL ROW 2 (RIGHT TO LEFT) ================= -->
    <div class="relative w-full overflow-hidden">

        <div class="tech-marquee-rtl">
            <div class="tech-track-rtl">

                <div class="tech-item github"><i class="fa-brands fa-github"></i><span>GitHub</span></div>
                <div class="tech-item docker"><i class="fa-brands fa-docker"></i><span>Docker</span></div>
                <div class="tech-item aws"><i class="fa-brands fa-aws"></i><span>AWS</span></div>
                <div class="tech-item mysql"><i class="fa-solid fa-database"></i><span>MySQL</span></div>
                <div class="tech-item mongodb"><i class="fa-solid fa-server"></i><span>MongoDB</span></div>
                <div class="tech-item bootstrap"><i class="fa-brands fa-bootstrap"></i><span>Bootstrap</span></div>
                <div class="tech-item html"><i class="fa-brands fa-html5"></i><span>HTML5</span></div>
                <div class="tech-item css"><i class="fa-brands fa-css3-alt"></i><span>CSS3</span></div>

                <!-- duplicate -->
                <div class="tech-item github"><i class="fa-brands fa-github"></i><span>GitHub</span></div>
                <div class="tech-item docker"><i class="fa-brands fa-docker"></i><span>Docker</span></div>
                <div class="tech-item aws"><i class="fa-brands fa-aws"></i><span>AWS</span></div>
                <div class="tech-item mysql"><i class="fa-solid fa-database"></i><span>MySQL</span></div>
                <div class="tech-item mongodb"><i class="fa-solid fa-server"></i><span>MongoDB</span></div>
                <div class="tech-item bootstrap"><i class="fa-brands fa-bootstrap"></i><span>Bootstrap</span></div>
                <div class="tech-item html"><i class="fa-brands fa-html5"></i><span>HTML5</span></div>
                <div class="tech-item css"><i class="fa-brands fa-css3-alt"></i><span>CSS3</span></div>

            </div>
        </div>

    </div>

</section>

<!-- ================= MOBILE APP SERVICES SECTION ================= -->
<section class="relative py-28 overflow-hidden bg-[#F3F8FF]">

    <!-- subtle pattern bg -->
    <div class="absolute inset-0 opacity-40"
         style="background-image: linear-gradient(135deg, rgba(47,128,255,0.05) 25%, transparent 25%, transparent 50%, rgba(47,128,255,0.05) 50%, rgba(47,128,255,0.05) 75%, transparent 75%, transparent);
                background-size: 40px 40px;">
    </div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ROW ================= -->
        <div class="grid lg:grid-cols-2 gap-10 mb-16 items-center" data-aos="fade-up">

            <div>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#0A0F2C] mb-3"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Mobile App Development<br>Services We Offer
                </h2>
            </div>

            <div>
                <p class="text-gray-600 text-base leading-relaxed"
                   style="font-family: 'Inter', sans-serif;">
                    Whether you are a startup seeking startup mobile app development services,
                    or an enterprise looking for scalable mobile app development, we build apps
                    that perform flawlessly and scale with your business needs.
                </p>
            </div>

        </div>

        <!-- ================= SERVICES GRID ================= -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- ===== Card 1 ===== -->
            <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2"
                 data-aos="fade-up">

                <div class="w-14 h-14 rounded-xl bg-[#EEF4FF] flex items-center justify-center mb-5">
                    <img src="/assets/images/search_icon.png" alt="Mobile App Consulting" class="w-7 h-7">
                </div>

                <h4 class="text-lg font-semibold text-[#0A0F2C] mb-2">
                    Mobile App Consulting
                </h4>

                <p class="text-gray-500 text-sm leading-relaxed">
                    We provide expert mobile app development consulting, guiding your app’s concept,
                    tech stack, platform choices, and user experience.
                </p>
            </div>

            <!-- ===== Card 2 (Highlighted) ===== -->
            <div class="group rounded-3xl p-8 shadow-xl hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2
                        bg-gradient-to-br from-[#2F80FF] to-[#66A6FF] text-white"
                 data-aos="fade-up" data-aos-delay="100">

                <div class="w-14 h-14 rounded-xl bg-white flex items-center justify-center mb-5">
                    <img src="/assets/images/seo_icon.png" alt="Mobile App Integration" class="w-7 h-7">
                </div>

                <h4 class="text-lg font-semibold mb-2">
                    Mobile App Integration
                </h4>

                <p class="text-white/90 text-sm leading-relaxed">
                    We integrate mobile apps with APIs and backend systems to deliver a seamless,
                    unified, and secure user experience.
                </p>
            </div>

            <!-- ===== Card 3 ===== -->
            <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2"
                 data-aos="fade-up" data-aos-delay="200">

                <div class="w-14 h-14 rounded-xl bg-[#EEF4FF] flex items-center justify-center mb-5">
                    <img src="/assets/images/seo_icon.png" alt="UI UX Design" class="w-7 h-7">
                </div>

                <h4 class="text-lg font-semibold text-[#0A0F2C] mb-2">
                    UI/UX Design
                </h4>

                <p class="text-gray-500 text-sm leading-relaxed">
                    Get intuitive and visually appealing designs based on thorough research.
                    Our prototypes help clients visualize the final product.
                </p>
            </div>

            <!-- ===== Card 4 ===== -->
            <div class="group rounded-3xl p-8 shadow-xl hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2
                        bg-gradient-to-br from-[#2F80FF] to-[#66A6FF] text-white"
                 data-aos="fade-up" data-aos-delay="100">

                <div class="w-14 h-14 rounded-xl bg-white flex items-center justify-center mb-5">
                    <img src="/assets/images/search_icon.png" alt="Custom Mobile App Development" class="w-7 h-7">
                </div>

                <h4 class="text-lg font-semibold text-white mb-2">
                    Custom Mobile App Development
                </h4>

                <p class="text-white/90 text-sm leading-relaxed">
                    From ideation to deployment, we build custom mobile apps that engage users
                    and deliver measurable business results.
                </p>
            </div>

            <!-- ===== Card 5 ===== -->
            <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2"
                 data-aos="fade-up" data-aos-delay="100">

                <div class="w-14 h-14 rounded-xl bg-[#EEF4FF] flex items-center justify-center mb-5">
                    <img src="/assets/images/seo_icon.png" alt="Mobile App QA and Testing" class="w-7 h-7">
                </div>

                <h4 class="text-lg font-semibold text-[#0A0F2C] mb-2">
                    Mobile App QA and Testing
                </h4>

                <p class="text-gray-500 text-sm leading-relaxed">
                    We test mobile apps rigorously to ensure performance, security, and usability
                    across all devices and platforms.
                </p>
            </div>

            <!-- ===== Card 6 ===== -->
            <div class="group rounded-3xl p-8 shadow-xl hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2
                        bg-gradient-to-br from-[#2F80FF] to-[#66A6FF] text-white"
                 data-aos="fade-up" data-aos-delay="100">

                <div class="w-14 h-14 rounded-xl bg-white flex items-center justify-center mb-5">
                    <img src="/assets/images/search_icon.png" alt="Maintenance and Support" class="w-7 h-7">
                </div>

                <h4 class="text-lg font-semibold text-white mb-2">
                    Maintenance and Support
                </h4>

                <p class="text-white/90 text-sm leading-relaxed">
                    We offer ongoing support to monitor performance, resolve issues, and roll out
                    updates to ensure long-term app reliability.
                </p>
            </div>

            <!-- ===== Card 7 ===== -->
            <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2"
                 data-aos="fade-up">

                <div class="w-14 h-14 rounded-xl bg-[#EEF4FF] flex items-center justify-center mb-5">
                    <img src="/assets/images/search_icon.png" alt="Mobile App Modernization" class="w-7 h-7">
                </div>

                <h4 class="text-lg font-semibold text-[#0A0F2C] mb-2">
                    Mobile App Modernization
                </h4>

                <p class="text-gray-500 text-sm leading-relaxed">
                    We revamp outdated apps by updating design, functionality, and technology
                    to meet evolving user expectations.
                </p>
            </div>

            <!-- ===== Card 8 ===== -->
            <div class="group rounded-3xl p-8 shadow-xl hover:shadow-2xl
                        transition-all duration-500 hover:-translate-y-2
                        bg-gradient-to-br from-[#2F80FF] to-[#66A6FF] text-white"
                 data-aos="fade-up" data-aos-delay="100">

                <div class="w-14 h-14 rounded-xl bg-white flex items-center justify-center mb-5">
                    <img src="/assets/images/seo_icon.png" alt="Cross Platform App Development" class="w-7 h-7">
                </div>

                <h4 class="text-lg font-semibold text-white mb-2">
                    Cross-Platform App Development
                </h4>

                <p class="text-white/90 text-sm leading-relaxed">
                    Our cross-platform apps deliver a consistent experience on both iOS and Android,
                    optimizing efficiency and performance.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- ================= TECH STACK STYLES ================= -->
<style>
    .tech-item {
        width: 180px;
        height: 140px;
        margin: 0 14px;
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(6px);
        border-radius: 22px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        transition: all 0.4s ease;
        font-weight: 600;
        font-size: 14px;
    }

    .tech-item i {
        font-size: 70px;
        margin-bottom: 8px;
        transition: all 0.4s ease;
    }

    .tech-item span {
        font-size: 16px;
        font-weight: 600;
    }

    /* Brand Colors */
    .node i { color: #3C873A; }
    .php i { color: #777BB4; }
    .laravel i { color: #FF2D20; }
    .python i { color: #3776AB; }
    .react i { color: #61DAFB; }
    .vue i { color: #42B883; }
    .angular i { color: #DD0031; }
    .js i { color: #F7DF1E; }
    .git i { color: #F05032; }
    .github i { color: #000000; }
    .docker i { color: #0db7ed; }
    .aws i { color: #FF9900; }
    .mysql i { color: #00618A; }
    .mongodb i { color: #47A248; }
    .bootstrap i { color: #7952B3; }
    .html i { color: #E34F26; }
    .css i { color: #1572B6; }

    /* Hover */
    .tech-item:hover {
        transform: translateY(-10px) scale(1.1);
        box-shadow: 0 25px 60px rgba(0,0,0,0.3);
    }

    .tech-item:hover i {
        transform: rotate(6deg) scale(1.15);
    }

    /* Marquee LTR */
    .tech-marquee-ltr { overflow: hidden; }
    .tech-track-ltr {
        display: flex;
        width: max-content;
        animation: scrollLTR 35s linear infinite;
    }

    /* Marquee RTL */
    .tech-marquee-rtl { overflow: hidden; }
    .tech-track-rtl {
        display: flex;
        width: max-content;
        animation: scrollRTL 35s linear infinite;
    }

    .tech-marquee-ltr:hover .tech-track-ltr,
    .tech-marquee-rtl:hover .tech-track-rtl {
        animation-play-state: paused;
    }

    @keyframes scrollLTR {
        0% { transform: translateX(-50%); }
        100% { transform: translateX(0); }
    }

    @keyframes scrollRTL {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    @media (max-width: 640px) {
        .tech-item {
            width: 130px;
            height: 100px;
        }

        .tech-item i {
            font-size: 42px;
        }

        .tech-item span {
            font-size: 13px;
        }
    }
</style>
<!-- ================= PORTFOLIO SECTION ================= -->

        <section class="py-20 bg-white overflow-hidden w-full">

            <!-- HEADING -->
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold" style="font-family: var(--font-heading);">
                    Our Work <span class="text-blue-400">Portfolio</span>
                </h2>
            </div>

            <!-- PORTFOLIO -->
            <div class="relative w-full">
                <div class="portfolio-wrapper" id="portfolio">

                    <!-- CARD -->
                    <div class="portfolio-card card-left-back" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4550.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                    <div class="portfolio-card card-left-front" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4552.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                    <div class="portfolio-card card-center active" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4549.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                    <div class="portfolio-card card-right-front" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4553.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                    <div class="portfolio-card card-right-back" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4554.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                </div>
            </div>

            <!-- VIEW ALL -->
            <div class="text-center mt-10">
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="inline-flex px-8 py-3 border rounded-lg text-sm
                  hover:bg-black hover:text-white transition">
                    View all
                </a>
            </div>

        </section>

        <!-- ================= STYLES ================= -->
        <style>
            .portfolio-wrapper {
                position: relative;
                height: 520px;
                display: flex;
                justify-content: center;
            }

            .portfolio-card {
                position: absolute;
                width: 460px;
                height: 520px;
                border-radius: 28px;
                transition: all 0.45s ease;
                cursor: pointer;
            }

            .card-inner {
                width: 100%;
                height: 100%;
                background: #2F80ED;
                border-radius: 28px;
                padding: 10px;
                position: relative;
            }

            .card-inner img {
                width: 100%;
                height: 100%;
                border-radius: 22px;
                object-fit: cover;
            }

            /* CENTER */
            .card-center {
                z-index: 5;
                transform: scale(1);
                box-shadow: 0 40px 90px rgba(0, 0, 0, 0.35);
            }

            .card-center:hover {
                transform: scale(1.06);
            }

            /* LEFT */
            .card-left-front {
                transform: translateX(-180px) scale(0.88);
                z-index: 3;
                opacity: .85;
            }

            .card-left-back {
                transform: translateX(-320px) scale(0.75);
                z-index: 1;
                opacity: .45;
            }

            /* RIGHT */
            .card-right-front {
                transform: translateX(180px) scale(0.88);
                z-index: 3;
                opacity: .85;
            }

            .card-right-back {
                transform: translateX(320px) scale(0.75);
                z-index: 1;
                opacity: .45;
            }

            /* OVERLAY (DEFAULT HIDDEN) */
            .portfolio-overlay {
                position: absolute;
                bottom: 14px;
                left: 14px;
                right: 14px;
                background: #ffffff;
                padding: 10px 14px;
                border-radius: 14px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
                opacity: 0;
                transform: translateY(12px);
                transition: all 0.35s ease;
            }

            /* SHOW ONLY ACTIVE CENTER CARD */
            .portfolio-card.card-center .portfolio-overlay {
                opacity: 1;
                transform: translateY(0);
            }

            /* TEXT */
            .portfolio-overlay p {
                margin: 0;
                font-size: 12px;
                font-weight: 600;
                color: #2F80ED;
            }

            .portfolio-overlay h4 {
                margin: 0;
                font-size: 14px;
                font-weight: 700;
            }

            /* ARROW */
            .portfolio-overlay .arrow {
                width: 30px;
                height: 30px;
                background: #2F80ED;
                color: #fff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 14px;
                transition: transform 0.35s ease;
            }

            /* ARROW ROTATE */
            .portfolio-card.card-center:hover .arrow {
                transform: rotate(45deg);
            }

            /* MOBILE */
            @media(max-width:768px) {
                .portfolio-wrapper {
                    height: auto;
                    overflow-x: auto;
                    gap: 16px;
                    scroll-snap-type: x mandatory;
                }

                .portfolio-card {
                    position: relative;
                    min-width: 280px;
                    height: 360px;
                    transform: none !important;
                    opacity: 1 !important;
                    scroll-snap-align: center;
                }
            }
        </style>

        <!-- ================= AUTO SLIDE ================= -->
        <script>
            const cards = document.querySelectorAll('.portfolio-card');
            let current = 2;

            function rotateCards() {
                cards.forEach(c => c.className = 'portfolio-card');

                cards[(current + 3) % 5].classList.add('card-left-back');
                cards[(current + 4) % 5].classList.add('card-left-front');
                cards[current].classList.add('card-center', 'active');
                cards[(current + 1) % 5].classList.add('card-right-front');
                cards[(current + 2) % 5].classList.add('card-right-back');

                current = (current + 1) % 5;
            }

            setInterval(rotateCards, 2000); // 🔥 continuous scroll
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

@extends('layouts.app')

@section('content')

@section('title', 'Web App Development – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[420px] flex items-center">

    <img src="/assets/images/Group 164726.png" class="absolute inset-0 w-full h-full object-cover"
        alt="Development Banner">
    <div class="absolute inset-0"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
        <h1 class="text-5xl font-extrabold text-white mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
            Web <span class="text-blue-400"><br>App Development</span>
        </h1>

        <div class="inline-flex items-center gap-2 text-sm text-white/80
                border border-white-400 px-4 py-2 rounded-lg"
            style="font-family:'Inter', sans-serif;">
            <a href="/our-services" class="hover:text-white">Services</a>
            <span>›</span>
            <span class="text-white font-semibold"> Web App Development</span>
        </div>
    </div>
</section>

<!-- ================= WEB APP INTRO SECTION ================= -->
<section class="relative py-24 overflow-hidden bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT IMAGE ================= -->
            <div class="relative" data-aos="fade-right" data-aos-duration="900">
                <img src="/assets/images/web-custom.png" alt="Devobyte Web App Development"
                    class="w-full max-w-lg object-contain">
            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div data-aos="fade-left" data-aos-duration="900">

                <h2 class="text-3xl lg:text-5xl font-extrabold text-gray-900 leading-snug mb-4"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Our mission at
                    <span class="text-[#2F80FF]">DEVOBYTE</span> is
                </h2>

                <h3 class="text-xl lg:text-2xl font-medium text-gray-800 mb-4"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    to make the web development <br> process easier for you
                </h3>

                <p class="text-gray-500 text-base leading-relaxed mb-8" style="font-family: 'Inter', sans-serif;">
                    We help our clients choose the right tools for hosting, ecommerce,
                    content management and marketing. Our team builds secure, scalable,
                    and high-performing web applications tailored to your business goals.
                </p>

                <!-- Button -->
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="inline-flex items-center justify-center
                          bg-[#2F80FF] text-white
                          px-7 py-3 rounded-full font-semibold text-sm
                          shadow-lg hover:shadow-xl
                          transition-all duration-300 hover:bg-[#1c6fe3]">

                    Let’s Talk
                    <i class="fa-solid fa-arrow-right ml-3"></i>
                </a>

            </div>

        </div>
    </div>
</section>
<!-- ================= WEB DESIGN CHALLENGES SECTION ================= -->
<section class="relative py-28 overflow-hidden"
    style="background: url('/assets/images/webbg.png') center/cover no-repeat;">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ================= TOP ROW ================= -->
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between mb-10" data-aos="fade-up">

            <h2 class="text-3xl lg:text-4xl font-bold text-white leading-snug"
                style="font-family: 'Montserrat Alternates', sans-serif;">
                Dealing With Web Design<br class="hidden sm:block"> Challenges?
            </h2>

            <a href="javascript:void(0)" onclick="openContactPopup()"
                class="mt-6 lg:mt-0 inline-flex items-center justify-center
                      bg-white text-[#2F80FF]
                      px-6 py-3 rounded-xl font-semibold text-sm
                      shadow-lg hover:shadow-xl
                      transition-all duration-300 hover:bg-gray-100">
                Talk Now
            </a>
        </div>

        <!-- ================= MAIN CARD ================= -->
        <div class="relative bg-white rounded-3xl overflow-hidden shadow-2xl grid lg:grid-cols-2" data-aos="fade-up"
            data-aos-delay="100">

            <!-- ================= LEFT IMAGE PANEL ================= -->
            <div class="relative flex items-center justify-center p-10"
                style="background: url('/assets/images/bluebg.png') center/cover no-repeat;" data-aos="fade-right"
                data-aos-delay="200">

                <img src="/assets/images/webseo.png" alt="Web App Challenges"
                    class="w-full max-w-sm object-contain drop-shadow-2xl">
            </div>

            <!-- ================= RIGHT CONTENT ================= -->
            <div class="p-10 lg:p-14" data-aos="fade-left" data-aos-delay="200">

                <p class="text-gray-700 text-base leading-relaxed mb-8" style="font-family: 'Inter', sans-serif;">
                    Our team of design professionals has partnered with businesses across
                    diverse industries to tackle the same hurdles—creating beautiful,
                    responsive websites that don’t just look great, but turn visitors
                    into loyal customers and real sales.
                </p>

                <div class="grid sm:grid-cols-2 gap-4">

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">Responsive Design</span>
                    </div>

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">Security Concerns</span>
                    </div>

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">Website Loading Speed</span>
                    </div>

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">Poor Scalability</span>
                    </div>

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">Cross-Browser Compatibility</span>
                    </div>

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">SEO Integration</span>
                    </div>

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">Poor User Experience (UX)</span>
                    </div>

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">Accessibility Issues</span>
                    </div>

                    <!-- Item -->
                    <div class="flex items-start">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mt-1 mr-3"></i>
                        <span class="text-gray-700 text-sm font-bold">Poor Content Organization</span>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- ================= GOALS TO REALITY SECTION ================= -->
<section class="relative py-28 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- ================= LEFT CONTENT ================= -->
            <div data-aos="fade-right">

                <h2 class="text-3xl lg:text-4xl font-bold text-[#0A0F2C] leading-tight mb-5"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Make your Goals a<br>
                    Reality with the best<br>
                    web development services
                </h2>

                <p class="text-gray-500 text-base leading-relaxed mb-6" style="font-family: 'Inter', sans-serif;">
                    At Devobyte, we build web applications that do more than look good — they generate leads and support
                    your business goals. Our in-house team manages everything from architecture and design to
                    development, testing, and deployment.
                </p>

                <p class="text-[#2F80FF] font-semibold mb-6">
                    Custom-coded, scalable web apps tailored to your business
                </p>

                <ul class="space-y-3 mb-8">
                    <li class="flex items-center text-gray-700 text-sm">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mr-3"></i>
                        Mobile-first, fast-loading, and conversion-optimised
                    </li>
                    <li class="flex items-center text-gray-700 text-sm">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mr-3"></i>
                        SEO-ready structure built from day one
                    </li>
                    <li class="flex items-center text-gray-700 text-sm">
                        <i class="fa-solid fa-circle-check text-[#2F80FF] mr-3"></i>
                        Secure, maintained, and built to grow with you
                    </li>
                </ul>

                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="inline-flex items-center justify-center
                          bg-[#2F80FF] text-white
                          px-8 py-4 rounded-xl font-semibold
                          shadow-lg hover:shadow-xl
                          transition-all duration-300 hover:bg-[#1c6fe3]">
                    Let’s talk
                </a>

            </div>

            <!-- ================= RIGHT IMAGE AREA ================= -->
            <div class="relative" data-aos="fade-left">

                <!-- Main Image -->
                <img src="/assets/images/webdesign.png" alt="Web Design Services"
                    class="w-full max-w-md mx-auto rounded-3xl shadow-2xl">

                <!-- ================= Floating Card - Top Right ================= -->
                <div class="absolute -top-6 -right-6 bg-white rounded-xl shadow-xl p-5 w-64
                            animate-float-slow"
                    data-aos="zoom-in" data-aos-delay="200">

                    <div class="flex items-start gap-4">

                        <!-- Icon Circle -->
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                            <img src="/assets/images/statistics 1.svg" alt="Traffic Icon"
                                class="w-6 h-6 object-contain">
                        </div>

                        <!-- Text -->
                        <div>
                            <h4 class="text-sm font-semibold text-[#0A0F2C] mb-1">Drive Website Traffic</h4>
                            <p class="text-xs text-gray-500 leading-snug">
                                We build SEO-ready web apps that rank, load fast, and keep visitors engaged — turning
                                traffic into conversions.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- ================= Floating Card - Bottom Left ================= -->
                <div class="absolute -bottom-8 -left-6 bg-white rounded-xl shadow-xl p-5 w-64
                            animate-float"
                    data-aos="zoom-in" data-aos-delay="300">

                    <div class="flex items-start gap-4">

                        <!-- Icon Circle -->
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                            <img src="/assets/images/Frame (2).png" alt="Experts Icon"
                                class="w-6 h-6 object-contain">
                        </div>

                        <!-- Text -->
                        <div>
                            <h4 class="text-sm font-semibold text-[#0A0F2C] mb-1">Skilled Experts</h4>
                            <p class="text-xs text-gray-500 leading-snug">
                                Our in-house team of developers brings expertise across React, Node.js, Laravel, Python,
                                and modern cloud infrastructure.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- ================= FLOAT ANIMATIONS ================= -->
<style>
    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes floatSlow {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-6px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: floatSlow 6s ease-in-out infinite;
    }
</style>

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

<!-- ================= TECH STACK STYLES ================= -->
<style>
    .tech-item {
        width: 180px;
        height: 140px;
        margin: 0 14px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(6px);
        border-radius: 22px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
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
    .node i {
        color: #3C873A;
    }

    .php i {
        color: #777BB4;
    }

    .laravel i {
        color: #FF2D20;
    }

    .python i {
        color: #3776AB;
    }

    .react i {
        color: #61DAFB;
    }

    .vue i {
        color: #42B883;
    }

    .angular i {
        color: #DD0031;
    }

    .js i {
        color: #F7DF1E;
    }

    .git i {
        color: #F05032;
    }

    .github i {
        color: #000000;
    }

    .docker i {
        color: #0db7ed;
    }

    .aws i {
        color: #FF9900;
    }

    .mysql i {
        color: #00618A;
    }

    .mongodb i {
        color: #47A248;
    }

    .bootstrap i {
        color: #7952B3;
    }

    .html i {
        color: #E34F26;
    }

    .css i {
        color: #1572B6;
    }

    /* Hover */
    .tech-item:hover {
        transform: translateY(-10px) scale(1.1);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
    }

    .tech-item:hover i {
        transform: rotate(6deg) scale(1.15);
    }

    /* Marquee LTR */
    .tech-marquee-ltr {
        overflow: hidden;
    }

    .tech-track-ltr {
        display: flex;
        width: max-content;
        animation: scrollLTR 35s linear infinite;
    }

    /* Marquee RTL */
    .tech-marquee-rtl {
        overflow: hidden;
    }

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
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }

    @keyframes scrollRTL {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
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

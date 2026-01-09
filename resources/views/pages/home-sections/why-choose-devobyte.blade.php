<!-- ================= WHY CHOOSE DEVOBYTE ================= -->
<section class="relative py-28 overflow-hidden text-white"
    style="
         background-image:url('/assets/images/Group 164701.png');
         background-size:cover;
         background-position:center;
         background-repeat:no-repeat;
         ">

    <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">

        <!-- ================= LEFT IMAGE ================= -->
        <div class="relative" data-aos="fade-right">

            <img src="/assets/images/Img (1).png" alt="Why Devobyte">

            <!-- Experience Badge (BOTTOM RIGHT - FIGMA STYLE) -->
            <div
                class="absolute -bottom-6 -right-1
                        bg-blue-500 text-white
                        px-6 py-4 rounded-2xl shadow-2xl
                        flex items-center gap-4
                        animate-float z-20">

                <!-- Icon -->
                <img src="/assets/images/Group (2).png" alt="Experience Icon" class="w-10 h-10">

                <!-- Text -->
                <div>
                    <p class="text-2xl font-bold font-inter leading-none text-center">5+ Years</p>
                    <p class="text-sm font-inter opacity-90">
                        of Building IT & Marketing Systems That Scale
                    </p>
                </div>
            </div>

        </div>

        <!-- ================= RIGHT CONTENT ================= -->
        <div>

            <h2 class="text-4xl xl:text-5xl font-extrabold mb-12"
                style="font-family:'Montserrat Alternates', sans-serif;" data-aos="fade-up">
                Why Should Choose <br>
                Our <span class="text-blue-400">Devobyte</span>
            </h2>

            <!-- FEATURES GRID -->
            <div class="grid sm:grid-cols-2 gap-10">

                <!-- Feature -->
                <div class="why-card" data-aos="fade-up">
                    <div class="why-icon">
                        <img src="/assets/images/magnifying-glass 1.svg" alt="">
                    </div>
                    <h4 class="why-title">We Drive Real Business Growth</h4>
                    <p class="why-text">
                        Our work is focused on outcomes, not vanity metrics. We build strategies that increase
                        visibility, generate quality leads, and support long-term business growth.
                    </p>
                </div>

                <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-icon">
                        <img src="/assets/images/trend 1.png" alt="">
                    </div>
                    <h4 class="why-title">End-to-End Ownership</h4>
                    <p class="why-text">
                        From planning to execution, everything is handled in-house. You work with one dedicated team
                        that takes full responsibility for delivery and results.
                    </p>
                </div>

                <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-icon">
                        <img src="/assets/images/campaign 1.svg" alt="">
                    </div>
                    <h4 class="why-title">All Expertise, One Team</h4>
                    <p class="why-text">
                        Technology, marketing, and creative expertise under one roof means faster execution, better
                        coordination, and consistent quality.
                    </p>
                </div>

                <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-icon">
                        <img src="/assets/images/help 1.svg" alt="">
                    </div>
                    <h4 class="why-title">Smart, Affordable Solutions</h4>
                    <p class="why-text">
                        We design solutions that deliver strong returns without unnecessary costs. Our pricing is
                        transparent, flexible, and built to offer real value at every stage of growth.
                    </p>
                </div>

            </div>

            <!-- CTA -->
            <a href="javascript:void(0)" onclick="openContactPopup()"
                class="why-cta mt-14 inline-flex items-center gap-3">
                Discover More
                <span>→</span>
            </a>

        </div>
    </div>
</section>

<!-- ================= STYLES ================= -->
<style>
    .why-card {
        background: rgba(255, 255, 255, .08);
        backdrop-filter: blur(12px);
        border-radius: 22px;
        padding: 28px;
        transition: .35s ease;
    }

    .why-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 60px rgba(47, 128, 237, .35);
        background: rgba(255, 255, 255, .12);
    }

    .why-icon {
        width: 54px;
        height: 54px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 14px;
        animation: floatIcon 3.5s ease-in-out infinite;
    }

    .why-icon img {
        width: 26px
    }

    @keyframes floatIcon {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-6px)
        }
    }

    .why-title {
        font-weight: 700;
        margin-bottom: 6px;
        font-family: 'Inter', sans-serif;
    }

    .why-text {
        font-size: 14px;
        opacity: .85;
        font-family: 'Inter', sans-serif;
    }

    .why-cta {
        background: #2F80ED;
        padding: 16px 34px;
        border-radius: 999px;
        font-weight: 600;
        transition: .35s ease;
    }

    .why-cta:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(47, 128, 237, .45);
    }

    .animate-float {
        animation: floatIcon 4s ease-in-out infinite;
    }

    @media(max-width:768px) {
        .why-card {
            text-align: center
        }

        .why-icon {
            margin: auto
        }
    }
</style>

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 900,
        once: true
    });
</script>

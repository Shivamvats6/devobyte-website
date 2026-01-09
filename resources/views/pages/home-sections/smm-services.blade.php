<!-- ================= SMM SERVICES SECTION ================= -->
<section class="py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6
                grid lg:grid-cols-2 gap-20 items-start">

        <!-- ================= LEFT CONTENT ================= -->
        <div class="relative" data-aos="fade-right">

            <h2 class="text-4xl xl:text-5xl font-extrabold mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                <span class="text-blue-400">Social Media</span> Marketing Services
            </h2>

            <p class="text-gray-500 mb-10 tracking-wide font-semibold" style="font-family:'Inter', sans-serif;">
                Turning content into consistent business growth
            </p>

            <img src="/assets/images/Images (1).png" alt="SMM Visual" class="w-full max-w-md">
        </div>

        <!-- ================= RIGHT ZIG-ZAG CARDS ================= -->
        <div class="relative grid grid-cols-1 sm:grid-cols-2 gap-8">

            <!-- Instagram -->
            <div data-aos="fade-up" data-aos-delay="100" class="smm-card translate-y-12 cursor-pointer"
                onclick="openContactPopup()">
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
            <div data-aos="fade-up" data-aos-delay="200" class="smm-card cursor-pointer" onclick="openContactPopup()">
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
            <div data-aos="fade-up" data-aos-delay="300" class="smm-card translate-y-12 cursor-pointer"
                onclick="openContactPopup()">
                <div class="smm-icon">
                    <i class="fab fa-youtube"></i>
                </div>
                <h4 class="smm-title">YouTube marketing</h4>
                <p class="smm-text">
                    Tell your story through high-impact video.
                    We help brands grow on YouTube with strategic content, optimization, and performance-driven
                    campaigns.
                </p>
            </div>

            <!-- Twitter -->
            <div data-aos="fade-up" data-aos-delay="300" class="smm-card cursor-pointer" onclick="openContactPopup()">
                <div class="smm-icon">
                    <i class="fab fa-x-twitter"></i>
                </div>
                <h4 class="smm-title">Twitter marketing</h4>
                <p class="smm-text">
                    Join conversations that matter.
                    We build presence and thought leadership on X through timely content and audience-focused
                    strategies.
                </p>
            </div>

            <!-- Linkedin -->
            <div data-aos="fade-up" data-aos-delay="500" class="smm-card translate-y-12 cursor-pointer"
                onclick="openContactPopup()">
                <div class="smm-icon">
                    <i class="fab fa-linkedin-in"></i>
                </div>
                <h4 class="smm-title">LinkedIn marketing</h4>
                <p class="smm-text">
                    Generate leads and drive traffic using
                    LinkedIn growth strategies.
                </p>
            </div>

            <!-- Amazon -->
            <div data-aos="fade-up" data-aos-delay="600" class="smm-card cursor-pointer" onclick="openContactPopup()">
                <div class="smm-icon">
                    <i class="fab fa-amazon"></i>
                </div>
                <h4 class="smm-title">Amazon marketing</h4>
                <p class="smm-text">
                    Boost sales with optimized Amazon
                    marketing campaigns.
                </p>
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
        padding: 24px;
        border: 1px solid #eee;
        box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
        transition: all .35s ease;
    }

    /* ICON */
    .smm-icon {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #eaf2ff;
        color: #2f80ed;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 14px;
        font-size: 18px;
        transition: all .35s ease;
    }

    /* TITLES */
    .smm-title {
        font-weight: 700;
        /* 🔥 MORE BOLD */
        font-size: 16px;
        margin-bottom: 8px;
    }

    /* TEXT */
    .smm-text {
        font-size: 14px;
        color: #6b7280;
        transition: color .35s ease;
    }

    /* HOVER = TWITTER STYLE */
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

    /* ACTIVE CARD (DEFAULT BLUE) */
    .smm-card-active {
        background: #6AA9FF;
        border: none;
        box-shadow: 0 25px 60px rgba(47, 128, 237, .45);
    }

    .smm-card-active .smm-title,
    .smm-card-active .smm-text {
        color: #fff;
    }

    .smm-icon-light {
        background: rgba(255, 255, 255, .25);
        color: #fff;
    }

    /* MOBILE FIX */
    @media (max-width:640px) {
        .translate-y-6 {
            transform: none !important;
        }
    }
</style>

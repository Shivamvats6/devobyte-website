@extends('layouts.app')

@section('content')

@section('title', 'Industry – Devobyte')

<!-- ================= HERO BANNER ================= -->
    <section class="relative min-h-[420px] flex items-center">

        <img src="/assets/images/industry-banner.png" class="absolute inset-0 w-full h-full object-cover bg-black" alt="Contact Banner">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
            <h1 class="text-5xl font-extrabold text-white mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                Industry </h1>

            <div class="inline-flex items-center gap-2 text-sm text-white/80
                    border border-white/30 px-4 py-2 rounded-lg"
                style="font-family:'Inter', sans-serif;">
                <a href="/" class="hover:text-white">Home</a>
                <span>›</span>
                <span class="text-white font-semibold">Industry</span>
            </div>
        </div>
    </section>
<!-- ================= OUR EXPERTISE ACROSS INDUSTRIES ================= -->
<section class="relative py-28 bg-[#F8FAFF] overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ===== Heading ===== -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-5xl font-bold text-[#0A0F2C]"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Our Expertise Across <span class="text-blue-500">Industries</span>
            </h2>
        </div>

        <!-- ===== Cards Grid ===== -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- ===== CARD 1 ===== -->
            <div class="flip-card" data-aos="zoom-in">
                <div class="flip-inner">

                    <!-- Front -->
                    <div class="flip-front">
                        <img src="/assets/images/Healthcare.png" alt="Healthcare Industry">
                        <h3>Healthcare</h3>
                    </div>

                    <!-- Back -->
                    <div class="flip-back">
                        <h3>Healthcare</h3>
                        <p>
                            Simple, tailored digital solutions that help hospitals, clinics, and wellness centers connect better with patients and build real trust.
                        </p>
                    </div>

                </div>
            </div>

            <!-- ===== CARD 2 ===== -->
            <div class="flip-card" data-aos="zoom-in" data-aos-delay="50">
                <div class="flip-inner">

                    <div class="flip-front">
                        <img src="/assets/images/Education.png" alt="Education Industry">
                        <h3>Education</h3>
                    </div>

                    <div class="flip-back">
                        <h3>Education</h3>
                        <p>
                            Digital platforms and campaigns for schools, universities, and e-learning companies to improve engagement and learning outcomes.
                        </p>
                    </div>

                </div>
            </div>

            <!-- ===== CARD 3 ===== -->
            <div class="flip-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="flip-inner">

                    <div class="flip-front">
                        <img src="/assets/images/Real Estate.png" alt="Real Estate Industry">
                        <h3>Real Estate</h3>
                    </div>

                    <div class="flip-back">
                        <h3>Real Estate</h3>
                        <p>
                            Lead generation, listings, and virtual tours that boost property visibility, engagement, and sales.
                        </p>
                    </div>

                </div>
            </div>

            <!-- ===== CARD 4 ===== -->
            <div class="flip-card" data-aos="zoom-in">
                <div class="flip-inner">

                    <div class="flip-front">
                        <img src="/assets/images/E-Commerce.png" alt="E-Commerce Industry">
                        <h3>E-Commerce</h3>
                    </div>

                    <div class="flip-back">
                        <h3>E-Commerce</h3>
                        <p>
                            SEO, ads, and UX solutions that increase traffic, improve conversions, and build repeat customers.
                        </p>
                    </div>

                </div>
            </div>

            <!-- ===== CARD 5 ===== -->
            <div class="flip-card" data-aos="zoom-in" data-aos-delay="50">
                <div class="flip-inner">

                    <div class="flip-front">
                        <img src="/assets/images/Finance.png" alt="Finance Industry">
                        <h3>Finance</h3>
                    </div>

                    <div class="flip-back">
                        <h3>Finance</h3>
                        <p>
                            Secure digital platforms and campaigns for banks, fintech, and financial institutions to build credibility and growth.
                        </p>
                    </div>

                </div>
            </div>

            <!-- ===== CARD 6 ===== -->
            <div class="flip-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="flip-inner">

                    <div class="flip-front">
                        <img src="/assets/images/Travel & Hospitality.png" alt="Travel & Hospitality Industry">
                        <h3>Travel & Hospitality</h3>
                    </div>

                    <div class="flip-back">
                        <h3>Travel & Hospitality</h3>
                        <p>
                            Engaging websites, booking systems, and campaigns for hotels, airlines, and travel agencies.
                        </p>
                    </div>

                </div>
            </div>

            <!-- ===== CARD 7 ===== -->
            <div class="flip-card" data-aos="zoom-in">
                <div class="flip-inner">

                    <div class="flip-front">
                        <img src="/assets/images/Social Media.png" alt="Social Media Industry">
                        <h3>Social Media</h3>
                    </div>

                    <div class="flip-back">
                        <h3>Social Media</h3>
                        <p>
                            Creative strategies and platform solutions to grow audiences, engagement, and brand loyalty.
                        </p>
                    </div>

                </div>
            </div>

            <!-- ===== CARD 8 ===== -->
            <div class="flip-card" data-aos="zoom-in" data-aos-delay="50">
                <div class="flip-inner">

                    <div class="flip-front">
                        <img src="/assets/images/Energy & Utilities.png" alt="Energy & Utilities Industry">
                        <h3>Energy & Utilities</h3>
                    </div>

                    <div class="flip-back">
                        <h3>Energy & Utilities</h3>
                        <p>
                            Smart digital solutions for power, water, and utility providers to optimize operations and customer service.
                        </p>
                    </div>

                </div>
            </div>

            <!-- ===== CARD 9 ===== -->
            <div class="flip-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="flip-inner">

                    <div class="flip-front">
                        <img src="/assets/images/Media & Entertainment.png" alt="Media & Entertainment Industry">
                        <h3>Media & Entertainment</h3>
                    </div>

                    <div class="flip-back">
                        <h3>Media & Entertainment</h3>
                        <p>
                            High-impact digital experiences for content creators, streaming platforms, and entertainment brands.
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<style>
/* ===== Flip Card Core ===== */
.flip-card {
    perspective: 1200px;
}

.flip-inner {
    position: relative;
    width: 100%;
    height: 350px;
    transition: transform 0.8s ease;
    transform-style: preserve-3d;
}

.flip-card:hover .flip-inner {
    transform: rotateY(180deg);
}

/* Front & Back */
.flip-front,
.flip-back {
    position: absolute;
    inset: 0;
    border-radius: 22px;
    overflow: hidden;
    backface-visibility: hidden;
    box-shadow: 0 12px 35px rgba(0,0,0,0.12);
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding: 20px;
}

/* Front */
.flip-front {
    background: #000;
}

.flip-front img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.flip-front::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.65), rgba(0,0,0,0.15));
}

.flip-front h3 {
    position: relative;
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    z-index: 2;
    text-align: center;
}

/* Back */
.flip-back {
    background: linear-gradient(135deg, #2F80FF, #1C5FD6);
    color: #fff;
    transform: rotateY(180deg);
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 28px;
}

.flip-back h3 {
    font-size: 28px;
    font-weight: 800;
    margin-bottom: 12px;
}

.flip-back p {
    font-size: 18px;
    line-height: 1.6;
    opacity: 0.95;
}

/* Hover Lift */
.flip-card:hover {
    transform: translateY(-8px);
    transition: transform 0.3s ease;
}

/* Responsive */
@media (max-width: 640px) {
    .flip-inner {
        height: 280px;
    }
}
</style>
@include('pages.home-sections.get-in-touch')
@endsection


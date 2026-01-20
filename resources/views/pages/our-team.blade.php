@extends('layouts.app')

@section('content')

@section('title', 'Our Team – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[420px] flex items-center">

    <img src="/assets/images/team-banner.png" class="absolute inset-0 w-full h-full object-cover" alt="Team Banner">
    <div class="absolute inset-0 "></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
        <h1 class="text-5xl font-extrabold text-white mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
            Our <span class="text-blue-400">Team</span>
        </h1>

        <div class="inline-flex items-center gap-2 text-sm text-white/80
                border border-white/30 px-4 py-2 rounded-lg"
            style="font-family:'Inter', sans-serif;">
            <a href="/" class="hover:text-white">Home</a>
            <span>›</span>
            <span class="text-white font-semibold">Our Team</span>
        </div>
    </div>
</section>

<!-- ================= MEET OUR TEAM ================= -->
<section class="relative py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-extrabold"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Meet our <span class="text-blue-500">team</span>
            </h2>
            <p class="text-gray-500 mt-3 max-w-xl mx-auto font-inter">
                Just take a look – each member of the team is watching your every gesture and will hear your every whisper.
            </p>
        </div>

        <!-- ================= TEAM GRID ================= -->
        <div class="grid md:grid-cols-3 gap-14">

            <!-- ================= CARD ================= -->
            <div class="team-card group">
                <div class="image-wrap">
                    <img src="/assets/images/our-founder.jpeg" alt="Team Member">
                    <div class="brush-overlay"></div>
                </div>

                <div class="info-box">
                    <h4>Sarfraz Khan</h4>
                    <p>Founder of Devobyte</p>
                </div>
            </div>

            <!-- ================= CARD ================= -->
            <div class="team-card group">
                <div class="image-wrap">
                    <img src="/assets/images/shrutisingh.png" alt="Team Member">
                    <div class="brush-overlay"></div>
                </div>

                <div class="info-box">
                    <h4>Shruti Singh</h4>
                    <p>HR</p>

                </div>
            </div>

            <!-- ================= CARD ================= -->
            <div class="team-card group">
                <div class="image-wrap">
                    <img src="/assets/images/shivam.jpeg" alt="Team Member">
                    <div class="brush-overlay"></div>
                </div>

                <div class="info-box">
                    <h4>Shivam Sharma</h4>
                    <p>Senior Web Developer</p>
                </div>
            </div>

            <!-- ================= CARD ================= -->
            <div class="team-card group">
                <div class="image-wrap">
                    <img src="/assets/images/our-founder.jpeg" alt="Team Member">
                    <div class="brush-overlay"></div>
                </div>

                <div class="info-box">
                    <h4>Arjun Basor</h4>
                    <p>Digital Marketer</p>
                </div>
            </div>

            <!-- ================= CARD ================= -->
            <div class="team-card group">
                <div class="image-wrap">
                    <img src="/assets/images/our-founder.jpeg" alt="Team Member">
                    <div class="brush-overlay"></div>
                </div>

                <div class="info-box">
                    <h4>Farheed Saifi</h4>
                    <p>Senior Web Developer</p>
                </div>
            </div>

            <!-- ================= CARD ================= -->
            <div class="team-card group">
                <div class="image-wrap">
                    <img src="/assets/images/ankit.jpeg" alt="Team Member">
                    <div class="brush-overlay"></div>
                </div>

                <div class="info-box">
                    <h4>Ankit Shah</h4>
                    <p>Senior UI/UX Designer</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ================= TEAM STYLES ================= -->
<style>
.team-card{
    background:#fff;
    border-radius:26px;
    padding:18px;
    box-shadow:0 20px 60px rgba(0,0,0,0.05);
    transition:all .4s ease;
    position:relative;
    overflow:hidden;
}

.team-card:hover{
    transform:translateY(-10px);
    box-shadow:0 30px 80px rgba(37,99,235,0.15);
}

/* IMAGE */
.image-wrap{
    position:relative;
    border-radius:22px;
    overflow:hidden;
    height:260px;
}

.image-wrap img{
    width:100%;
    height:100%;
    object-fit: cover;
    object-position: center 20%;
    position:relative;
    z-index:2;
    background: #f5f5f5; /* optional – empty space clean lage */
}

/* BRUSH EFFECT */
.brush-overlay{
    position:absolute;
    inset:0;
    background:url('/assets/images/brush.png') center/cover no-repeat;
    z-index:3;
    pointer-events:none;
    opacity:0.9;
}

/* INFO */
.info-box{
    text-align:center;
    padding:18px 10px 10px;
    transition:all .4s ease;
}

.info-box h4{
    font-size:18px;
    font-weight:700;
    color:#2563EB;
    font-family:'Montserrat Alternates',sans-serif;
}

.info-box p{
    font-size:13px;
    color:#6B7280;
    font-family:'Inter',sans-serif;
}

/* SOCIAL */
.social{
    width:32px;
    height:32px;
    background:#fff;
    color:#3B82F6;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:13px;
    font-weight:700;
    transition:.3s;
}

.social:hover{
    background:#1e40af;
    color:#fff;
    transform:scale(1.1);
}

/* HOVER TO ACTIVE STYLE */
.team-card:hover .info-box{
    background:#3B82F6;
    margin:-10px -18px 0;
    padding:22px 10px;
    border-radius:0 0 26px 26px;
}

.team-card:hover .info-box h4,
.team-card:hover .info-box p{
    color:#fff;
}
</style>

@endsection

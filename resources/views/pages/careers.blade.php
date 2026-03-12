@extends('layouts.app')

@section('title', 'Careers at Devobyte | Join Our Digital Innovation Team')

@section('meta')
    <meta name="description"
        content="Join Devobyte and build your career in web development, mobile apps, AI, and digital marketing. Explore exciting job opportunities and grow with us.">
    <meta name="keywords"
        content="Devobyte Careers, IT Jobs in India, Web Developer Jobs, Laravel Jobs, Digital Marketing Careers, AI Jobs">
@endsection

@section('content')

    <!-- ================= CAREER HERO SECTION ================= -->
    <section class="career-hero relative overflow-hidden">

        <!-- Future BG Image Layer -->
        <div class="career-bg-image absolute h-full inset-0"></div>


        <div class="relative max-w-7xl mx-auto px-6 py-28 text-center" data-aos="fade-up">

            <h1 class="text-white text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-8"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Build Your Future. Create Meaningful <br class="hidden sm:block">
                Digital Experiences. Grow With <span class="text-blue-400">Devobyte.</span>
            </h1>

            <a href="#open-positions"
                class="inline-flex items-center gap-3 bg-white text-blue-600
                  px-7 py-4 rounded-full font-semibold shadow-lg
                  transition-all duration-300 hover:scale-110 hover:shadow-2xl">
                Join Our Team
                <span class="bg-blue-500 text-white w-9 h-9 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-paper-plane text-sm"></i>
                </span>
            </a>
        </div>

    </section>

    <style>
        .career-hero {
            background: linear-gradient(135deg, #061C3D, #0B2A5C);
        }

        .career-bg-image {
            background-image: url('');
            background-size: cover;
            background-position: center;
        }
    </style>
    <!-- ================= WHY JOIN DEVOBYTE ================= -->
    <section class="relative py-28 bg-white overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div data-aos="fade-right">

                    <span class="inline-block bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-semibold mb-5">
                        Benefits
                    </span>

                    <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-6"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        Why you Should Join Our <br>
                        <span class="text-blue-500">Awesome Team</span>
                    </h2>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        At Devobyte, we believe great digital products are built by people who care — about craft,
                        about impact, and about growth. We’re more than a workplace.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        We're a team of designers, developers, strategists, and problem-solvers driven by curiosity and
                        innovation.
                    </p>

                    <p class="text-gray-600 leading-relaxed">
                        Here, your ideas matter, your skills evolve, and your work makes a real difference.
                    </p>

                </div>

                <!-- RIGHT FEATURES -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">

                    <!-- Card 1 -->
                    <div class="benefit-card" data-aos="zoom-in">
                        <div class="benefit-icon bg-blue-50">
                            <img src="/assets/images/Team work.png" alt="Team Work">
                        </div>
                        <h4>Team Work</h4>
                        <p>Collaborate with passionate professionals to build amazing solutions.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="benefit-card" data-aos="zoom-in" data-aos-delay="150">
                        <div class="benefit-icon bg-green-50">
                            <img src="/assets/images/Secured Future.png" alt="Secured Future">
                        </div>
                        <h4>Secured Future</h4>
                        <p>We provide stability and growth opportunities for long-term success.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="benefit-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="benefit-icon bg-yellow-50">
                            <img src="/assets/images/Learning Opportunity.png" alt="Learning Opportunity">
                        </div>
                        <h4>Learning Opportunity</h4>
                        <p>Continuous learning to sharpen your skills and expand your career.</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="benefit-card" data-aos="zoom-in" data-aos-delay="450">
                        <div class="benefit-icon bg-pink-50">
                            <img src="/assets/images/Upgrade Skills.png" alt="Upgrade Skills">
                        </div>
                        <h4>Upgrade Skills</h4>
                        <p>Work with modern technologies and improve every day.</p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <style>
        .career-bg-image {
            background-image: url('/assets/images/careerbg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
        }

        .benefit-card {
            background: #ffffff;
            padding: 28px;
            border-radius: 18px;
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.08);
            transition: all .35s ease;
            min-height: 200px;
        }

        .benefit-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 25px 50px rgba(59, 130, 246, 0.25);
        }

        .benefit-icon {
            width: 64px;
            height: 64px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
        }

        .benefit-icon img {
            width: 34px;
        }

        .benefit-card h4 {
            font-size: 18px;
            font-weight: 700;
            color: #0A0F2C;
            margin-bottom: 8px;
        }

        .benefit-card p {
            font-size: 14.5px;
            color: #4B5563;
            line-height: 1.6;
        }
    </style>
    <!-- ================= CAREER OPENINGS SECTION ================= -->
    <section class="relative py-24 bg-white" id="career-openings">

        <div class="max-w-6xl mx-auto px-6">

            <!-- Heading -->
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-blue-500 font-semibold tracking-wide">COME JOIN US</span>
                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mt-2 mb-4"
                    style="font-family:'Montserrat Alternates', sans-serif;">
                    Career Openings
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We’re always looking for creative, talented self-starters to join the Devobyte family.
                    Check our open roles below and apply.
                </p>
            </div>

            <!-- Job List -->
            <div class="space-y-6">

                @forelse($vacancies as $index => $job)

                    <div class="career-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">

                        <div class="career-header" onclick="toggleCareer(this)">
                            <div class="career-left">
                                <h4>{{ $job->title }}</h4>
                            </div>

                            <div class="career-meta">
                                <span>
                                    <strong>Experience:</strong>
                                    <b>{{ $job->experience }}</b>
                                </span>

                                <span>
                                    <strong>Deadline:</strong>
                                    <b>{{ $job->deadline->format('Y-m-d') }}</b>
                                </span>

                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>

                        <div class="career-body">

                            {{-- SUMMARY --}}
                            <h5>SUMMARY</h5>
                            <p>{{ $job->summary }}</p>

                            {{-- RESPONSIBILITIES --}}
                            <h5>KEY RESPONSIBILITIES</h5>
                            <ul>
                                @foreach ($job->responsibilities ?? [] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>


                            {{-- REQUIREMENTS --}}
                            <h5>WHAT WE LOOK FOR IN YOU</h5>
                            <ul>
                                @foreach ($job->requirements ?? [] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>

                            <button onclick="openApplyPopup('{{ $job->title }}')" class="apply-btn">
                                Apply Now →
                            </button>

                        </div>
                    </div>

                @empty
                    <p class="text-center text-gray-500">
                        No openings available at the moment.
                    </p>
                @endforelse

            </div>

        </div>
    </section>

    <!-- ================= STYLES ================= -->
    <style>
        .career-item {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all .3s ease;
            border: 1px solid #eef2ff;
        }

        .career-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100px;
            padding: 22px 26px;
            cursor: pointer;
        }

        .career-header h4 {
            font-size: 18px;
            font-weight: 700;
            color: #0A0F2C;
        }

        .career-meta {
            display: flex;
            align-items: center;
            gap: 100px;
            font-size: 16px;
            color: #555;
        }

        .career-meta i {
            transition: transform .3s ease;
        }

        .career-item.active .career-meta i {
            transform: rotate(180deg);
        }

        .career-body {
            display: none;
            padding: 26px;
            border-top: 1px solid #e5e7eb;
            animation: fadeIn .4s ease;
        }

        .career-item.active .career-body {
            display: block;
        }

        .career-body h5 {
            font-size: 15px;
            font-weight: 700;
            margin-top: 16px;
            color: #2563EB;
        }

        .career-body p {
            font-size: 14.5px;
            color: #555;
            margin-top: 6px;
        }

        .career-body ul {
            margin-top: 8px;
            padding-left: 18px;
        }

        .career-body ul li {
            font-size: 14px;
            color: #444;
            margin-bottom: 6px;
        }

        .apply-btn {
            margin-top: 18px;
            background: #2563EB;
            color: white;
            padding: 10px 26px;
            border-radius: 8px;
            font-weight: 600;
            transition: all .3s ease;
        }

        .apply-btn:hover {
            transform: scale(1.08);
            box-shadow: 0 10px 25px rgba(37, 99, 235, .4);
        }

        /* Mobile */
        @media(max-width:768px) {
            .career-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .career-meta {
                flex-wrap: wrap;
                gap: 12px;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <!-- ================= SCRIPT ================= -->
    <script>
        function toggleCareer(element) {
            const parent = element.closest('.career-item');

            document.querySelectorAll('.career-item').forEach(item => {
                if (item !== parent) {
                    item.classList.remove('active');
                }
            });

            parent.classList.toggle('active');
        }

        function openApplyPopup(position) {
            alert("Apply popup for: " + position + " (Next step: Career form popup)");
        }
    </script>
    @include('partials.careerform')
@endsection

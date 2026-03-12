@extends('layouts.app')


@section('title', 'Case Study - Our Work Portfolio | Devobyte')

@section('meta')
<meta name="description" content="Explore Devobyte case studies showcasing our web and app development projects with performance-driven results.">
<meta name="keywords" content="Devobyte Case Study, Web Development Projects, App Development Portfolio, Laravel Projects">
@section('content')
<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[620px] flex items-center overflow-hidden">

    <!-- Background Image -->
    <img src="/assets/images/casestudy.png" class="absolute inset-0 w-full h-full object-cover" alt="case-study Banner">

    <!-- Overlay if needed -->
    <div class="absolute inset-0"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full pt-20" data-aos="fade-right">
        <p class="text-2xl font-bold text-white mb-4 opacity-80 text-center lg:text-left"
        style="font-family:'inter', sans-serif;">
        Our Work Portfolio
        </p>

        <!-- HEADING -->
        <h1 class="text-5xl lg:text-6xl font-extrabold text-white mb-12 leading-tight"
            style="font-family:'Montserrat Alternates', sans-serif;">
            Case Study
        </h1>

        <!-- CTA BUTTONS -->
        <div class="flex flex-col sm:flex-row gap-6
            justify-center lg:justify-start mt-6" data-aos="fade-up"
            data-aos-delay="400">

            <!-- PRIMARY BUTTON -->
            <a href="javascript:void(0)" onclick="openContactPopup()"
                class="group relative inline-flex items-center
              bg-white text-blue-600
              pl-6 pr-[5.5rem] py-5
              rounded-full
              font-semibold text-sm
              transition-all duration-300
              hover:bg-blue-600 hover:text-white
              font-inter shadow-lg">

                <span class="whitespace-nowrap">
                    Contact Us
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



        </div>


    </div>

</section>
{{-- AOS CSS --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

{{-- ================= FIRST 3 VISIBLE CASE STUDIES ================= --}}

@php
$visibleCases = [1,2,3];
@endphp

@foreach($visibleCases as $case)
<section class="py-20 px-4 md:px-16 {{ $case % 2 == 0 ? 'bg-gray-50' : 'bg-white' }}">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        {{-- Content --}}
        <div data-aos="fade-right">
            <span class="text-blue-600 font-semibold uppercase">Website</span>
            <h2 class="text-4xl font-bold mt-2 mb-4"
                style="font-family:'Montserrat Alternates', sans-serif;">
                ECO CAPACITY
            </h2>

            <div class="space-y-4 text-gray-700">

                <h3 class="text-lg font-semibold">Client</h3>
                <p>Smartbox Media Inc</p>

                <h3 class="text-lg font-semibold">Industry</h3>
                <p>IT</p>

                <h3 class="text-lg font-semibold">Goal</h3>
                <p>To generate leads and increase brand awareness among potential customers on LinkedIn.</p>

                <h3 class="text-lg font-semibold">Background</h3>
                <p>
                    Smartbox Media Inc is an IT company that offers a range of technology solutions across industries. They wanted to increase their LinkedIn presence and generate leads among potential customers.
                </p>

                <h3 class="text-lg font-semibold">Strategy</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li><strong>Profile Optimization:</strong> Updated headshots, background images, and descriptions.</li>
                    <li><strong>Segmentation & Connections:</strong> Targeted customer segments and relationship building.</li>
                    <li><strong>Service Pitching:</strong> Personalized LinkedIn messaging campaigns.</li>
                    <li><strong>Appointment Booking:</strong> Calendar integration for one-on-one meetings.</li>
                </ul>

                <h3 class="text-lg font-semibold">Results</h3>
                <p>
                    The LinkedIn campaign generated high-quality leads, improved client relationships, and increased sales and revenue.
                </p>

            </div>
        </div>

        {{-- Image --}}
        <div data-aos="fade-left" class="{{ $case % 2 == 0 ? 'lg:order-first' : '' }}">
            <img src="{{ asset('assets/images/post1.png') }}"
                 alt="Eco Capacity Case Study Devobyte"
                 class="rounded-xl shadow-lg w-full"
                 loading="lazy">
        </div>

    </div>
</section>
@endforeach

{{-- ================= VIEW ALL BUTTON ================= --}}
<div class="text-center py-10">
    <button onclick="toggleMoreCases()"
            class="bg-blue-600 hover:bg-blue-700 transition text-white px-8 py-3 rounded-full font-semibold">
        View All Case Studies
    </button>
</div>

{{-- ================= HIDDEN EXTRA CASE STUDIES ================= --}}
<div id="moreCases" class="hidden">

@for($i=4; $i<=6; $i++)
<section class="py-20 px-4 md:px-16 {{ $i % 2 == 0 ? 'bg-gray-50' : 'bg-white' }}">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <div data-aos="fade-right">
            <span class="text-blue-600 font-semibold uppercase">LinkedIn Marketing</span>
            <h2 class="text-4xl font-bold mt-2 mb-4"
                style="font-family:'Montserrat Alternates', sans-serif;">
                SMARTBOX MEDIA LEAD BOOST
            </h2>

            <div class="space-y-4 text-gray-700">
                <h3 class="text-lg font-semibold">Client</h3>
                <p>Smartbox Media Inc</p>

                <h3 class="text-lg font-semibold">Industry</h3>
                <p>IT</p>

                <h3 class="text-lg font-semibold">Goal</h3>
                <p>Build a consistent lead pipeline through LinkedIn outreach.</p>

                <h3 class="text-lg font-semibold">Strategy</h3>
                <p>
                    Automated outreach, CRM integration, and retargeting ads were implemented.
                </p>

                <h3 class="text-lg font-semibold">Results</h3>
                <p>
                    Increased appointment booking and 40% higher conversion rates.
                </p>
            </div>
        </div>

        <div data-aos="fade-left" class="{{ $i % 2 == 0 ? 'lg:order-first' : '' }}">
            <img src="{{ asset('assets/images/post1.png') }}"
                 alt="Smartbox Media Devobyte Case Study"
                 class="rounded-xl shadow-lg w-full"
                 loading="lazy">
        </div>

    </div>
</section>
@endfor

</div>

{{-- ================= SCRIPTS ================= --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });

  function toggleMoreCases() {
    document.getElementById('moreCases').classList.remove('hidden');
  }
</script>

@endsection

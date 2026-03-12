@extends('layouts.app')

@section('content')

@section('title', 'Lead Generation – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[620px] flex items-center overflow-hidden">

    <!-- Background Image -->
    <img src="/assets/images/lead-banner.png" class="absolute inset-0 w-full h-full object-cover" alt="Lead Generation Banner">

    <!-- Overlay if needed -->
    <div class="absolute inset-0"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full pt-20" data-aos="fade-right">

        <!-- HEADING -->
        <h1 class="text-5xl lg:text-6xl font-extrabold text-white mb-12 leading-tight"
            style="font-family:'Montserrat Alternates', sans-serif;">
            Lead Generation
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
              rounded-full
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

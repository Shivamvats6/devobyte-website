@extends('layouts.app')

@section('content')

@section('title', 'SEO Services – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[620px] flex items-center overflow-hidden">

    <!-- Background Image -->
    <img src="/assets/images/seo.png"
         class="absolute inset-0 w-full h-full object-cover"
         alt="SEO Banner">

    <!-- Overlay if needed -->
    <div class="absolute inset-0"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full pt-20" data-aos="fade-right">

        <!-- HEADING -->
        <h1 class="text-5xl lg:text-6xl font-extrabold text-white mb-12 leading-tight"
            style="font-family:'Montserrat Alternates', sans-serif;">
            Search Engine <span class="text-blue-400"><br>Optimization</span>
        </h1>

        <!-- CTA BUTTONS -->
        <div class="flex flex-col sm:flex-row gap-6
                    justify-center lg:justify-start mt-6"
             data-aos="fade-up" data-aos-delay="400">

            <!-- PRIMARY BUTTON -->
            <a href="javascript:void(0)" onclick="openContactPopup()"
               class="group inline-flex items-center justify-between
                      bg-white text-blue-600
                      px-7 py-3
                      rounded-full
                      min-w-[240px]
                      font-semibold text-sm
                      transition-all duration-300
                      hover:bg-blue-600 hover:text-white
                      font-inter">

                <span class="whitespace-nowrap">
                    BOOK A STRATEGY CALL
                </span>

                <!-- ROUND ICON WITH ARROW -->
                <span
                    class="ml-4 w-10 h-10 rounded-full
                           bg-blue-600 text-white
                           flex items-center justify-center
                           text-xl
                           transition-all duration-300
                           group-hover:bg-white
                           group-hover:text-blue-600
                           group-hover:translate-x-1">
                    ↗
                </span>
            </a>

            <!-- SECONDARY BUTTON -->
            <a href="javascript:void(0)" onclick="openContactPopup()"
               class="group inline-flex items-center justify-between
                      bg-white text-blue-600
                      px-7 py-3
                      rounded-full
                      min-w-[200px]
                      font-semibold text-sm
                      transition-all duration-300
                      hover:bg-blue-600 hover:text-white
                      font-inter">

                <span class="whitespace-nowrap">
                    GET QUOTE
                </span>

                <!-- ROUND ICON WITH ARROW -->
                <span
                    class="ml-4 w-10 h-10 rounded-full
                           bg-blue-600 text-white
                           flex items-center justify-center
                           text-xl
                           transition-all duration-300
                           group-hover:bg-white
                           group-hover:text-blue-600
                           group-hover:translate-x-1">
                    ↗
                </span>
            </a>

        </div>

    </div>

</section>

@endsection

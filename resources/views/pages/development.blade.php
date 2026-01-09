@extends('layouts.app')

@section('content')

@section('title', 'About Us – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[420px] flex items-center">

    <img src="/assets/images/mobile-banner.png" class="absolute inset-0 w-full h-full object-cover" alt="Development Banner">
    <div class="absolute inset-0"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
        <h1 class="text-5xl font-extrabold text-black mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
             Mobile & Web <span class="text-blue-400"><br>App Development</span>
        </h1>

        <div class="inline-flex items-center gap-2 text-sm text-blue/80
                border border-blue-400 px-4 py-2 rounded-lg"
            style="font-family:'Inter', sans-serif;">
            <a href="/our-services" class="hover:text-black">Services</a>
            <span>›</span>
            <span class="text-black font-semibold">Mobile & Web App Development</span>
        </div>
    </div>
</section>

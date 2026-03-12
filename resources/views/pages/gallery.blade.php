@extends('layouts.app')

@section('content')

@section('title', 'Gallery – Devobyte')

<!-- ================= HERO BANNER ================= -->
<section class="relative min-h-[420px] flex items-center">

    <img src="/assets/images/gallery-banner.png" class="absolute inset-0 w-full h-full object-cover" alt="Team Banner">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
        <h1 class="text-5xl font-extrabold text-white mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
            Our <span class="text-blue-400">Gallery</span>
        </h1>

        <div class="inline-flex items-center gap-2 text-sm text-white/80
                border border-white/30 px-4 py-2 rounded-lg"
            style="font-family:'Inter', sans-serif;">
            <a href="/" class="hover:text-white">Home</a>
            <span>›</span>
            <span class="text-white font-semibold">Our Gallery</span>
        </div>
    </div>
</section>
<!-- ================= FIGMA STYLE GALLERY ================= -->
<section class="relative py-24 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- GALLERY GRID -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- LEFT COLUMN -->
            <div class="grid grid-rows-2 gap-6">

                <div class="gallery-card h-[200px]" data-aos="zoom-in">
                    <img src="/assets/images/01.png" onclick="openLightbox(this.src)" alt="Gallery Image 1">
                </div>

                <div class="gallery-card h-[260px]" data-aos="zoom-in" data-aos-delay="100">
                    <img src="/assets/images/03.png" onclick="openLightbox(this.src)" alt="Gallery Image 2">
                </div>

            </div>

            <!-- CENTER COLUMN -->
            <div class="grid grid-rows-3 gap-6">

                <div class="gallery-card h-[160px]" data-aos="zoom-in" data-aos-delay="200">
                    <img src="/assets/images/04.png" onclick="openLightbox(this.src)" alt="Gallery Image 3">
                </div>

                <div class="gallery-card h-[220px]" data-aos="zoom-in" data-aos-delay="300">
                    <img src="/assets/images/05.png" onclick="openLightbox(this.src)" alt="Gallery Image 4">
                </div>

                <div class="gallery-card h-[180px]" data-aos="zoom-in" data-aos-delay="400">
                    <img src="/assets/images/06.png" onclick="openLightbox(this.src)" alt="Gallery Image 5">
                </div>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="gallery-card h-full min-h-[500px]" data-aos="zoom-in" data-aos-delay="500">
                <img src="/assets/images/04.png" onclick="openLightbox(this.src)" alt="Gallery Image 6">
            </div>

        </div>

    </div>

    <!-- LIGHTBOX -->
    <div id="lightbox"
        class="fixed inset-0 bg-black/90 hidden items-center justify-center z-[9999] p-6">
        <span onclick="closeLightbox()"
              class="absolute top-6 right-6 text-white text-3xl cursor-pointer">&times;</span>
        <img id="lightbox-img"
             class="max-w-full max-h-full rounded-xl shadow-2xl object-contain">
    </div>

    <!-- STYLES -->
    <style>
        .gallery-card {
            position: relative;
            overflow: hidden;
            border-radius: 22px;
            cursor: pointer;
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
            transition: all .35s ease;
        }

        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.08);
        }

        .gallery-card:hover {
            box-shadow: 0 25px 50px rgba(59,130,246,0.25);
        }

        @media (max-width: 768px) {
            .gallery-card {
                height: 220px !important;
            }
        }
    </style>

    <!-- SCRIPTS -->
    <script>
        function openLightbox(src) {
            const box = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            img.src = src;
            box.classList.remove('hidden');
            box.classList.add('flex');
        }

        function closeLightbox() {
            const box = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            box.classList.add('hidden');
            box.classList.remove('flex');
            img.src = '';
        }
    </script>

</section>


<section class="relative py-20 overflow-hidden bg-[#F7F8FC]">

    <!-- ================= HEADING ================= -->
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-extrabold"
            style="font-family: 'Montserrat Alternates', sans-serif;">
            Our Amazing <span class="text-blue-400">Clients</span>
        </h2>
    </div>

    <!-- ================= SCROLL WRAPPER ================= -->
    <div class="relative w-full overflow-hidden">

        @php
            $clients = [
                ['logo' => '/assets/images/startupca (1).png'],
                ['logo' => '/assets/images/Screenshot_2023-03-02_103243-removebg-preview-1 (1).png'],
                ['logo' => '/assets/images/small (1).png'],
                ['logo' => '/assets/images/infobahnlogo-1-1 (1).png'],
                ['logo' => '/assets/images/Smartbox-media (1).png'],
                ['logo' => '/assets/images/logoo (1).png'],
                ['logo' => '/assets/images/Desktop-Logo.webp'],
                ['logo' => '/assets/images/download (2).png'],
            ];
        @endphp

        <!-- ================= MOVING TRACK ================= -->
        <div class="client-track flex w-max items-center gap-16 px-10">

            {{-- DUPLICATE LOOP FOR INFINITE SCROLL --}}
            @foreach (array_merge($clients, $clients) as $client)
                <div class="client-logo-card flex items-center justify-center">
                    <img src="{{ $client['logo'] }}" alt="Client Logo"
                         class="h-12 md:h-16 object-contain transition duration-300
                                opacity-80 hover:opacity-100 hover:scale-110">
                </div>
            @endforeach

        </div>
    </div>

</section>

<!-- ================= CUSTOM STYLES ================= -->
<style>
    .client-track {
        animation: clientScroll 30s linear infinite;
    }

    .client-track:hover {
        animation-play-state: paused;
    }

    @keyframes clientScroll {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .client-logo-card {
        min-width: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .client-logo-card {
            min-width: 140px;
        }

        .client-track {
            gap: 40px;
        }
    }
</style>

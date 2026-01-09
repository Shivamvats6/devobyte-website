<section class="relative py-20 overflow-hidden bg-[#F7F8FC]">

            <!-- ================= HEADING ================= -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold" style="font-family: var(--font-heading);">
                    Our Amazing <span class="text-blue-400">Clients</span>
                </h2>
            </div>

            <!-- ================= SCROLL WRAPPER ================= -->
            <div class="relative w-full overflow-hidden">

                @php
                    /*
            |--------------------------------------------------------------------------
            | CLIENT LOGOS ARRAY
            |--------------------------------------------------------------------------
            | 👉 YAHAN PAR AAP APNE REAL CLIENT LOGOS KE PATH ADD KAREN
            | Example:
            | '/assets/images/clients/client-1.png'
            | '/assets/images/clients/client-2.png'
            */
                    $clients = [
                        [
                            'logo' => '/assets/images/startupca (1).png',
                        ],
                        [
                            'logo' => '/assets/images/Screenshot_2023-03-02_103243-removebg-preview-1 (1).png',
                        ],
                        [
                            'logo' => '/assets/images/small (1).png',
                        ],
                        [
                            'logo' => '/assets/images/infobahnlogo-1-1 (1).png',
                        ],
                        [
                            'logo' => '/assets/images/Smartbox-media (1).png',
                        ],
                        [
                            'logo' => '/assets/images/logoo (1).png',
                        ],
                        // Optional 7th logo
                        [
                            'logo' => '/assets/images/Desktop-Logo.webp',
                        ],
                        [
                            'logo' => '/assets/images/download (2).png',
                        ],
                    ];
                @endphp

                <!-- ================= MOVING TRACK ================= -->
                <div class="flex w-max animate-client-scroll gap-10 px-16">

                    {{-- DUPLICATE LOOP FOR SMOOTH INFINITE SCROLL --}}
                    @foreach (array_merge($clients, $clients) as $client)
                        <div class="flex items-center gap-8 min-w-[420px]">


                            <!-- LOGO -->
                            <img src="{{ $client['logo'] }}" alt="Client Logo"
                                class="h-12 md:h-14 object-contain
                                opacity-90 hover:opacity-100
                                transition duration-300">
                        </div>
                    @endforeach

                </div>
            </div>

        </section>

        <!-- ================= CUSTOM ANIMATION ================= -->
        <style>
            @keyframes clientScroll {
                0% {
                    transform: translateX(-50%);
                }

                100% {
                    transform: translateX(0);
                }
            }

            .animate-client-scroll {
                animation: clientScroll 28s linear infinite;
            }
        </style>



        <!-- ================= PORTFOLIO SECTION ================= -->

        <section class="py-20 bg-white overflow-hidden w-full">

            <!-- HEADING -->
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold" style="font-family: var(--font-heading);">
                    Our Work <span class="text-blue-400">Portfolio</span>
                </h2>
            </div>

            <!-- PORTFOLIO -->
            <div class="relative w-full">
                <div class="portfolio-wrapper" id="portfolio">

                    <!-- CARD -->
                    <div class="portfolio-card card-left-back" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4550.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                    <div class="portfolio-card card-left-front" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4552.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                    <div class="portfolio-card card-center active" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4549.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                    <div class="portfolio-card card-right-front" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4553.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                    <div class="portfolio-card card-right-back" onclick="openContactPopup()">
                        <div class="card-inner">
                            <img src="/assets/images/Rectangle 4554.png">
                            @include('partials.portfolio-overlay')
                        </div>
                    </div>

                </div>
            </div>

            <!-- VIEW ALL -->
            <div class="text-center mt-10">
                <a href="javascript:void(0)" onclick="openContactPopup()"
                    class="inline-flex px-8 py-3 border rounded-lg text-sm
                  hover:bg-black hover:text-white transition">
                    View all
                </a>
            </div>

        </section>

        <!-- ================= STYLES ================= -->
        <style>
            .portfolio-wrapper {
                position: relative;
                height: 520px;
                display: flex;
                justify-content: center;
            }

            .portfolio-card {
                position: absolute;
                width: 460px;
                height: 520px;
                border-radius: 28px;
                transition: all 0.45s ease;
                cursor: pointer;
            }

            .card-inner {
                width: 100%;
                height: 100%;
                background: #2F80ED;
                border-radius: 28px;
                padding: 10px;
                position: relative;
            }

            .card-inner img {
                width: 100%;
                height: 100%;
                border-radius: 22px;
                object-fit: cover;
            }

            /* CENTER */
            .card-center {
                z-index: 5;
                transform: scale(1);
                box-shadow: 0 40px 90px rgba(0, 0, 0, 0.35);
            }

            .card-center:hover {
                transform: scale(1.06);
            }

            /* LEFT */
            .card-left-front {
                transform: translateX(-180px) scale(0.88);
                z-index: 3;
                opacity: .85;
            }

            .card-left-back {
                transform: translateX(-320px) scale(0.75);
                z-index: 1;
                opacity: .45;
            }

            /* RIGHT */
            .card-right-front {
                transform: translateX(180px) scale(0.88);
                z-index: 3;
                opacity: .85;
            }

            .card-right-back {
                transform: translateX(320px) scale(0.75);
                z-index: 1;
                opacity: .45;
            }

            /* OVERLAY (DEFAULT HIDDEN) */
            .portfolio-overlay {
                position: absolute;
                bottom: 14px;
                left: 14px;
                right: 14px;
                background: #ffffff;
                padding: 10px 14px;
                border-radius: 14px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
                opacity: 0;
                transform: translateY(12px);
                transition: all 0.35s ease;
            }

            /* SHOW ONLY ACTIVE CENTER CARD */
            .portfolio-card.card-center .portfolio-overlay {
                opacity: 1;
                transform: translateY(0);
            }

            /* TEXT */
            .portfolio-overlay p {
                margin: 0;
                font-size: 12px;
                font-weight: 600;
                color: #2F80ED;
            }

            .portfolio-overlay h4 {
                margin: 0;
                font-size: 14px;
                font-weight: 700;
            }

            /* ARROW */
            .portfolio-overlay .arrow {
                width: 30px;
                height: 30px;
                background: #2F80ED;
                color: #fff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 14px;
                transition: transform 0.35s ease;
            }

            /* ARROW ROTATE */
            .portfolio-card.card-center:hover .arrow {
                transform: rotate(45deg);
            }

            /* MOBILE */
            @media(max-width:768px) {
                .portfolio-wrapper {
                    height: auto;
                    overflow-x: auto;
                    gap: 16px;
                    scroll-snap-type: x mandatory;
                }

                .portfolio-card {
                    position: relative;
                    min-width: 280px;
                    height: 360px;
                    transform: none !important;
                    opacity: 1 !important;
                    scroll-snap-align: center;
                }
            }
        </style>

        <!-- ================= AUTO SLIDE ================= -->
        <script>
            const cards = document.querySelectorAll('.portfolio-card');
            let current = 2;

            function rotateCards() {
                cards.forEach(c => c.className = 'portfolio-card');

                cards[(current + 3) % 5].classList.add('card-left-back');
                cards[(current + 4) % 5].classList.add('card-left-front');
                cards[current].classList.add('card-center', 'active');
                cards[(current + 1) % 5].classList.add('card-right-front');
                cards[(current + 2) % 5].classList.add('card-right-back');

                current = (current + 1) % 5;
            }

            setInterval(rotateCards, 2000); // 🔥 continuous scroll
        </script>

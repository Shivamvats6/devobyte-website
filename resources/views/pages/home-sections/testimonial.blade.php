<!-- ================= TESTIMONIAL SECTION ================= -->

        <section class="relative py-28 overflow-hidden bg-white" data-aos="fade-up">

            <!-- BACKGROUND TEXTURE -->
            <img src="/assets/images/Bg Textures.png" alt="Background Texture"
                class="absolute inset-0 w-full h-full object-cover">

            <!-- CONTENT -->
            <div class="relative max-w-7xl mx-auto px-6">

                <!-- HEADING -->
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-extrabold"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        What People Think <span class="text-blue-500">About Us?</span>
                    </h2>
                </div>

                <!-- CARDS (AOS ONLY HERE) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center" data-aos="fade-up" data-aos-delay="150">

                    <!-- CARD -->
                    <div class="testimonial-card">

                        <div class="quote-outer">
                            <div class="quote-wrap">
                                <img src="/assets/images/Icon (4).png" alt="quote">
                            </div>
                        </div>

                        <div class="stars">★★★★★</div>

                        <p class="text">
                            There are many variations of passages of Lorem Ipsum is available,
                            but the majority have suffered alteration in form by injected humour
                        </p>

                        <div class="user-box">
                            <img src="/assets/images/Img (2).png" alt="James">
                            <div>
                                <h4>James</h4>
                                <span>CEO & FOUNDER AT ECO</span>
                            </div>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="testimonial-card">

                        <div class="quote-outer">
                            <div class="quote-wrap">
                                <img src="/assets/images/Icon (4).png" alt="quote">
                            </div>
                        </div>

                        <div class="stars">★★★★★</div>

                        <p class="text">
                            There are many variations of passages of Lorem Ipsum is available,
                            but the majority have suffered alteration in form by injected humour
                        </p>

                        <div class="user-box">
                            <img src="/assets/images/Img (3).png" alt="Kathryn Murphy">
                            <div>
                                <h4>Kathryn Murphy</h4>
                                <span>CEO & FOUNDER AT ECO</span>
                            </div>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="testimonial-card">

                        <div class="quote-outer">
                            <div class="quote-wrap">
                                <img src="/assets/images/Icon (4).png" alt="quote">
                            </div>
                        </div>

                        <div class="stars">★★★★★</div>

                        <p class="text">
                            There are many variations of passages of Lorem Ipsum is available,
                            but the majority have suffered alteration in form by injected humour
                        </p>

                        <div class="user-box">
                            <img src="/assets/images/Img (4).png" alt="Theresa Webb">
                            <div>
                                <h4>Theresa Webb</h4>
                                <span>CEO & FOUNDER AT ECO</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ================= CUSTOM CSS ================= -->
        <style>
            .testimonial-card {
                position: relative;
                background: #ffffff;
                border-radius: 22px;
                padding: 68px 38px 44px;
                text-align: center;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
                transition:
                    transform 0.45s ease,
                    box-shadow 0.45s ease,
                    background 0.45s ease;
                cursor: pointer;
                will-change: transform;
            }

            /* QUOTE OUTER */
            .quote-outer {
                position: absolute;
                top: -26px;
                left: 46%;
                width: 55px;
                height: 55px;
                background: #ffffff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* QUOTE ICON */
            .quote-wrap {
                width: 48px;
                height: 48px;
                background: #2F80ED;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .quote-wrap img {
                width: 22px;
                filter: brightness(0) invert(1);
            }

            /* STARS */
            .stars {
                color: #2F80ED;
                letter-spacing: 3px;
                margin-bottom: 24px;
                font-size: 20px;
                font-weight: 700;
            }

            /* TEXT */
            .testimonial-card .text {
                font-size: 15px;
                font-weight: 600;
                color: #555;
                line-height: 1.75;
                margin-bottom: 34px;
            }

            /* USER BOX */
            .user-box {
                display: flex;
                align-items: center;
                gap: 14px;
                justify-content: center;
                padding: 12px 18px;
                border: 1px solid #e5e7eb;
                border-radius: 999px;
                background: #e5e7eb;
                transition: all 0.3s ease;
            }

            .user-box img {
                width: 46px;
                height: 46px;
                border-radius: 50%;
            }

            .user-box h4 {
                font-size: 16px;
                font-weight: 700;
                margin: 0;
                color: #111;
            }

            .user-box span {
                font-size: 11px;
                color: #555;
            }

            /* 🔥 REAL HOVER ZOOM + LIFT */
            .testimonial-card:hover {
                background: #2F80ED;
                transform: translateY(-18px) scale(1.06);
                box-shadow: 0 50px 100px rgba(47, 128, 237, 0.45);
            }

            .testimonial-card:hover .stars {
                color: #ffffff;
            }

            .testimonial-card:hover .text {
                color: #eaf1ff;
            }

            .testimonial-card:hover .user-box {
                background: #ffffff;
                border-color: #ffffff;
            }

            .testimonial-card:hover h4 {
                color: #111;
            }

            .testimonial-card:hover span {
                color: #4b5563;
            }

            /* MOBILE FIX */
            @media (max-width: 768px) {
                .quote-outer {
                    left: 50%;
                    transform: translateX(-50%);
                }

                .testimonial-card {
                    padding: 64px 26px 38px;
                }
            }
        </style>

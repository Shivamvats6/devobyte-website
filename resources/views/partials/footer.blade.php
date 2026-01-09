<!-- ================= FOOTER ================= -->
<footer class="relative text-white pt-40 pb-10 overflow-hidden">

    <!-- ================= BACKGROUND IMAGE ================= -->
    <div class="absolute inset-0 z-0">
        <img src="/assets/images/Rectangle 4483.png" alt="Footer Background"
            class="w-full h-full object-cover scale-105 animate-slowZoom">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-black/70"></div>
    </div>

    <!-- ================= FLOATING GLOW ORBS ================= -->
    <div class="absolute top-20 left-10 w-40 h-40 bg-blue-500/30 rounded-full blur-3xl animate-floatSlow"></div>
    <div
        class="absolute bottom-32 right-20 w-56 h-56 bg-purple-500/20 rounded-full blur-3xl animate-floatSlow delay-1000">
    </div>
    <div class="absolute top-1/2 right-1/3 w-32 h-32 bg-cyan-400/20 rounded-full blur-2xl animate-floatSlow delay-2000">
    </div>

    <!-- ================= FOOTER CONTENT ================= -->
    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-4 gap-14">

            <!-- ================= LOGO & SOCIAL ================= -->
            <div>

                <img src="{{ asset('assets/images/logo 1.png') }}" alt="Devobyte"
                    class="h-15 mb-8 hover:scale-105 transition duration-500">

              <a href="javascript:void(0)" onclick="openContactPopup()"
                            class="group relative inline-flex items-center
                          bg-white text-blue-600
                          pl-6 pr-[4rem] py-2.5
                          rounded-full
                          font-semibold text-sm
                          transition-all duration-300
                          hover:bg-blue-600 hover:text-white
                          font-inter shadow-lg">

                            <span class="whitespace-nowrap">
                                Contact Us
                            </span>

                            <span
                                class="absolute right-0.5 inset-y-0.5
                               w-9 h-8.9
                               bg-blue-600 text-white
                               rounded-full
                               flex items-center justify-center
                               text-lg
                               transition-all duration-300
                               group-hover:bg-white
                               group-hover:text-blue-600
                               group-hover:scale-105">
                                ↗
                            </span>
                        </a>



                <div class="flex items-center gap-5 mt-6">

                    <span class="text-base font-semibold text-white font-inter whitespace-nowrap">
                        Follow on
                    </span>

                    <div class="flex gap-4">

                        <a href="javascript:void(0)" onclick="openContactPopup()"
                            class="social-icon bg-black text-white">
                            <i class="fab fa-x-twitter"></i>
                        </a>

                        <a href="javascript:void(0)" onclick="openContactPopup()"
                            class="social-icon bg-[#0A66C2] text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a href="javascript:void(0)" onclick="openContactPopup()"
                            class="social-icon bg-[#FF0000] text-white">
                            <i class="fab fa-youtube"></i>
                        </a>

                    </div>
                </div>

            </div>

            <!-- ================= QUICK LINKS ================= -->
            <div>
                <h4 class="mb-5 text-white font-semibold tracking-wide"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Quick Link
                </h4>

                <ul class="space-y-3 text-sm text-white/80 font-inter">
                    <li><a href="#" class="footer-link">› About Us</a></li>
                    <li><a href="#" class="footer-link">› Services</a></li>
                    <li><a href="#" class="footer-link">› Industries</a></li>
                    <li><a href="#" class="footer-link">› Case Study</a></li>
                    <li><a href="#" class="footer-link">› Blog</a></li>
                </ul>
            </div>

            <!-- ================= OUR SERVICES ================= -->
            <div>
                <h4 class="mb-5 text-white font-semibold tracking-wide"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Our Services
                </h4>

                <ul class="space-y-3 text-sm text-white/80 font-inter">
                    <li><a href="#" class="footer-link">› Digital Marketing</a></li>
                    <li><a href="#" class="footer-link">› Web Development</a></li>
                    <li><a href="#" class="footer-link">› UI/UX Design</a></li>
                    <li><a href="#" class="footer-link">› App Development</a></li>
                    <li><a href="#" class="footer-link">› Linkedin lead generation</a></li>
                </ul>
            </div>

            <!-- ================= CONTACT INFO ================= -->
            <div>
                <h4 class="mb-5 text-white font-semibold tracking-wide"
                    style="font-family: 'Montserrat Alternates', sans-serif;">
                    Contact Us
                </h4>

                <ul class="space-y-4 text-sm text-white/80 font-inter">
                    <li class="flex gap-3 items-start">
                        <span>📍</span>
                        <span>
                            A-522, NX One, Greater Noida <br>
                            West, Uttar Pradesh - 201306
                        </span>
                    </li>

                    <li class="flex gap-3 items-center">
                        <span>📞</span>
                        <span>+91 95821 18311</span>
                    </li>

                    <li class="flex gap-3 items-center">
                        <span>✉️</span>
                        <span>sarffraz.khan@devobyte.com</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- ================= DIVIDER ================= -->
        <div class="border-t border-white/20 my-10 animate-glowLine"></div>

        <!-- ================= BOTTOM BAR ================= -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white/70 font-inter">
            <p>© All Copyright 2025 by Devobyte</p>

            <div class="flex gap-6">
                <a href="{{ route('terms') }}" class="footer-link">Terms & Conditions</a>
                <a href="{{ route('privacy') }}" class="footer-link">Privacy Policy</a>
                <a href="{{ route('refund') }}" class="footer-link">Refund & Cancellation Policy</a>
            </div>
        </div>

    </div>

    <!-- ================= STYLES ================= -->
    <style>
        /* ================= CONTACT US BUTTON FIXED ================= */




        /* SOCIAL ICONS */
        .social-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            transition: all .35s ease;
        }

        .social-icon:hover {
            transform: translateY(-6px) scale(1.1);
            box-shadow: 0 12px 30px rgba(0, 0, 0, .45);
        }

        .footer-link {
            display: inline-block;
            transition: all .3s ease;
        }

        .footer-link:hover {
            color: #fff;
            transform: translateX(6px);
        }

        @keyframes floatSlow {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(-20px) translateX(10px);
            }
        }

        .animate-floatSlow {
            animation: floatSlow 10s ease-in-out infinite;
        }

        @keyframes slowZoom {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.08);
            }
        }

        .animate-slowZoom {
            animation: slowZoom 18s ease-in-out infinite alternate;
        }

        @keyframes glowLine {
            0% {
                opacity: .3;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: .3;
            }
        }

        .animate-glowLine {
            animation: glowLine 3s ease-in-out infinite;
        }
        /* 🚫 KILL FONT-AWESOME EXTERNAL ICON IN FOOTER CTA */
.footer-no-icon::after,
.footer-no-icon::before,
.footer-no-icon span::after,
.footer-no-icon span::before {
    content: none !important;
    display: none !important;
}

/* Also remove browser focus box */
.footer-no-icon:focus,
.footer-no-icon:active {
    outline: none !important;
}

/* 🚫 Disable Font Awesome external link injection globally */
a::after,
a::before,
a span::after,
a span::before {
    content: none !important;
    display: none !important;
}

/* Extra safety */
.fa,
.fa-solid,
.fa-regular,
.fa-light,
.fa-thin,
.fa-duotone {
    font-family: "Font Awesome 6 Free" !important;
}

    </style>

</footer>

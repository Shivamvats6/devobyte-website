<!-- ================= FOOTER ================= -->

<!-- ================= NEWSLETTER SUBSCRIBE SECTION ================= -->
<section class="relative z-30 -mb-1 px-6 mt-1" data-aos="fade-up">

    <div class="max-w-6xl mx-auto">

        <div class="newsletter-box">

            <!-- CONTENT -->
            <div class="flex flex-col lg:flex-row items-center justify-end gap-10">

                <!-- RIGHT SIDE CONTENT + FORM -->
                <div class="w-full lg:w-1/2">

                    <!-- TEXT -->
                    <h3 class="text-2xl lg:text-3xl font-bold text-white mb-2"
                        style="font-family:'Montserrat Alternates', sans-serif;">
                        Subscribe To Our Newsletter!
                    </h3>

                    <p class="text-white/90 text-sm mb-6">
                        Get latest updates, offers & marketing tips directly in your inbox.
                    </p>

                    <!-- FORM -->
                    <form action="#" method="POST" class="newsletter-form flex w-full max-w-md" aria-label="Newsletter Subscription Form">
                        @csrf

                        <label for="newsletter-email" class="sr-only">Enter your email address</label>

                        <input id="newsletter-email" type="email" name="email" required
                               placeholder="Enter Email Address"
                               class="newsletter-input">

                        <button type="submit" class="newsletter-btn" aria-label="Submit Email">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>

                </div>

            </div>

        </div>

    </div>
</section>


<footer class="relative text-white pt-44 pb-10 overflow-hidden">

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
                                <i class="fa-solid fa-paper-plane text-sm"></i>
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
                        <span>sarfraz.khan@devobyte.com</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- ================= DIVIDER ================= -->
        <div class="border-t border-white/20 my-10 animate-glowLine"></div>

        <!-- ================= BOTTOM BAR ================= -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white/70 font-inter">
            <p>© All Copyright 2026 by Devobyte</p>

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

/* ================= NEWSLETTER BOX ================= */

.newsletter-box {
    background: url('/assets/images/action.png') center/cover no-repeat;

    border-radius: 20px;
    padding: 40px 60px;
    position: relative;
    overflow: hidden;

    box-shadow: 0 25px 70px rgba(0, 0, 0, 0.35);

    min-height: 180px;

    /* 🔥 PERFECT HALF OVERLAP EFFECT */
    transform: translateY(50%);
}

/* Remove overlay fully */
.newsletter-box::before {
    display: none !important;
    content: none !important;
}

/* FORM */
.newsletter-form {
    background: #ffffff;
    border-radius: 999px;
    overflow: hidden;
    padding: 6px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.25);
}

.newsletter-input {
    flex: 1;
    border: none;
    outline: none;
    padding: 14px 18px;
    font-size: 14px;
    border-radius: 999px;
}

.newsletter-btn {
    width: 48px;
    height: 48px;
    background: #2F80FF;
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.35s ease;
}

.newsletter-btn:hover {
    background: #1c6fe3;
    transform: scale(1.1) rotate(5deg);
}

/* ================= RESPONSIVE FIX ================= */

@media (max-width: 768px) {
    .newsletter-box {
        padding: 30px 24px;
        text-align: center;
        transform: translateY(40%);
    }

    .newsletter-form {
        width: 100%;
        margin: 0 auto;
    }
}

.newsletter-input {
    flex: 1;
    border: none;
    outline: none;
    padding: 14px 18px;
    font-size: 14px;
    border-radius: 999px;
}

.newsletter-btn {
    width: 48px;
    height: 48px;
    background: #2F80FF;
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.35s ease;
}

.newsletter-btn:hover {
    background: #1c6fe3;
    transform: scale(1.1) rotate(5deg);
}

/* Responsive */
@media (max-width: 768px) {
    .newsletter-box {
        padding: 30px 24px;
        text-align: center;
    }

    .newsletter-form {
        width: 100%;
    }
}

    </style>

</footer>

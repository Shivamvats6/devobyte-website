@extends('layouts.app')

@section('title', 'Contact Us – Devobyte')

@section('content')

    <!-- ================= HERO BANNER ================= -->
    <section class="relative min-h-[420px] flex items-center">

        <img src="/assets/images/Image.png" class="absolute inset-0 w-full h-full object-cover bg-black" alt="Contact Banner">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
            <h1 class="text-5xl font-extrabold text-white mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                Contact <span class="text-blue-400">Us</span>
            </h1>

            <div class="inline-flex items-center gap-2 text-sm text-white/80
                    border border-white/30 px-4 py-2 rounded-lg"
                style="font-family:'Inter', sans-serif;">
                <a href="/" class="hover:text-white">Home</a>
                <span>›</span>
                <span class="text-white font-semibold">Contact Us</span>
            </div>
        </div>
    </section>

    <!-- ================= CONTACT INFO CARDS ================= -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                @php
                    $cards = [
                        [
                            'icon' => 'house',
                            'title' => 'Address',
                            'text' =>
                                'Devobyte OPC pvt. Ltd, A-522, T-3,<br>NX One, Greater Noida<br>West, Uttar Pradesh - 201306',
                        ],
                        ['icon' => 'envelope', 'title' => 'Email', 'text' => 'sarfraz.khan@devobyte.com'],
                        ['icon' => 'phone', 'title' => 'Contact Us', 'text' => '+91 95821 18311'],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div data-aos="fade-up"
                        class="group border-2 border-blue-400 rounded-2xl p-10 text-center
                        bg-white transition-all duration-300 hover:bg-blue-400 hover:text-white hover:shadow-xl">

                        <div class="text-blue-500 group-hover:text-white text-5xl mb-4 transition">
                            <i class="fa-solid fa-{{ $card['icon'] }}"></i>
                        </div>

                        <h4 class="text-2xl font-bold mb-3" style="font-family:'Montserrat Alternates', sans-serif;">
                            {{ $card['title'] }}
                        </h4>

                        <p class="text-sm leading-relaxed" style="font-family:'Inter', sans-serif;">
                            {!! $card['text'] !!}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- ================= GET IN TOUCH SECTION ================= -->

    <section class=" bg-white overflow-hidden w-full">

        <!-- FULL WIDTH CONTAINER -->
        <div class="w-full">

            <!-- GRID -->
            <div
                class="grid grid-cols-1 lg:grid-cols-[60%_40%]
                    rounded-none lg:rounded-[28px]
                    overflow-hidden shadow-2xl">

                <!-- ================= LEFT SIDE (60%) ================= -->
                <div
                    class="relative bg-[#0B2CFF] text-white
            p-12 lg:p-20
            flex flex-col justify-center
            min-h-[520px] overflow-hidden">

                    <!-- BACKGROUND PATTERN IMAGE -->
                    <img src="/assets/images/Frame (1).png" alt="Background Pattern"
                        class="absolute inset-0 w-full h-full
                object-cover object-center
                opacity-15">

                    <!-- CONTACT IMAGE (SECOND LAYER) -->
                    <img src="/assets/images/CONTACT.png" alt="Contact Illustration"
                        class="absolute right-2 bottom-120

                object-contain
                pointer-events-none">
                    <!-- CONTENT -->
                    <div class="relative z-10 max-w-lg">
                        <h2 class="text-4xl lg:text-5xl font-extrabold leading-tight mb-12"
                            style="font-family:'Montserrat Alternates', sans-serif;">
                            Let’s talk about<br>
                            your project.
                        </h2>

                        <p class="text-sm leading-relaxed opacity-90 font-inter max-w-md">
                            We’ll create high-quality linkable content and build at least
                            40 high-authority links to each asset. Bring the way for you
                            to grow your website & improve skills.
                        </p>
                    </div>

                </div>

                <!-- ================= RIGHT SIDE (40%) ================= -->
                <div class="bg-white p-12 lg:p-16">

                    <h3 class="text-4xl font-extrabold mb-2" style="font-family:'Montserrat Alternates', sans-serif;">
                        Get in <span class="text-blue-500">touch</span>
                    </h3>

                    <p class="text-sm text-gray-500 mb-10 font-inter">
                        Contact us for a quote, help or to join the team
                    </p>

                    {{-- SUCCESS MESSAGE --}}
                    @if (session('success'))
                        <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-700 text-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6 font-inter">
                        @csrf

                        <!-- Full Name -->
                        <div>
                            <label class="block text-sm mb-1">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Robert Sanchez"
                                class="w-full border-b border-gray-300 py-2
                                      focus:outline-none focus:border-blue-500">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Business Email -->
                        <div>
                            <label class="block text-sm mb-1">
                                Business Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                placeholder="SanchezRobert@gmail.com"
                                class="w-full border-b border-gray-300 py-2
                                      focus:outline-none focus:border-blue-500">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Mobile Number -->
                        <div>
                            <label class="block text-sm mb-1">
                                Mobile Number <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+91 - 9350243163"
                                class="w-full border-b border-gray-300 py-2
                                      focus:outline-none focus:border-blue-500">
                            @error('phone')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Services -->
                        <div>
                            <label class="block text-sm mb-1">Services</label>
                            <select name="service"
                                class="w-full border-b border-gray-300 py-2
                                       focus:outline-none focus:border-blue-500 bg-transparent">
                                <option value="">Select Service</option>

                                @php
                                    $services = [
                                        'Website Development',
                                        'Digital Marketing',
                                        'SEO Optimization',
                                        'Social Media Marketing',
                                        'LinkedIn Marketing',
                                        'Instagram Marketing',
                                        'Facebook Marketing',
                                        'Youtube Marketing',
                                        'Content Marketing',
                                        'Creative Designing',
                                        'Mobile App Marketing',
                                        'Paid & Search Social Media Marketing',
                                        'Others',
                                    ];
                                @endphp

                                @foreach ($services as $service)
                                    <option value="{{ $service }}"
                                        {{ old('service') == $service ? 'selected' : '' }}>
                                        {{ $service }}
                                    </option>
                                @endforeach
                            </select>
                            @error('service')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-sm mb-1">Message</label>
                            <textarea name="message" rows="4" placeholder="Tell us your development vision..."
                                class="w-full border border-gray-200 rounded-xl p-4
                                         focus:outline-none focus:border-blue-500">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                            class="inline-flex items-center justify-center
                                   px-8 py-3
                                   border border-blue-500 text-blue-500
                                   rounded-xl
                                   text-sm font-semibold
                                   transition-all duration-300
                                   hover:bg-blue-500 hover:text-white">
                            Get a free Strategy call in 24 hours !
                        </button>

                    </form>

                </div>

            </div>
        </div>
    </section>

    <!-- ================= FAQ SECTION ================= -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- LEFT CARD (UNCHANGED) -->
                <div data-aos="fade-right" class="rounded-3xl overflow-hidden shadow-xl">

                    <div class="bg-blue-400 text-white p-10 text-center">
                        <h3 class="text-2xl font-bold mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                            Ask the Help Community<br>Write Now!
                        </h3>
                        <div class="text-4xl mb-3">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <p class="text-sm opacity-90" style="font-family:'Inter', sans-serif;">
                            Get Answers<br>
                            <a href="mailto:sarfraz.khan@devobyte.com">sarfraz.khan@devobyte.com</a>
                        </p>
                    </div>

                    <div class="bg-gray-100 p-10 text-center">
                        <h4 class="text-xl font-bold mb-4" style="font-family:'Montserrat Alternates', sans-serif;">
                            Still have Questions?<br>Call Now!
                        </h4>
                        <div class="text-blue-500 text-3xl mb-2">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <p class="text-gray-600 text-sm mb-1">Call Anytime</p>
                        <p class="font-bold text-lg">+91 95821 18311</p>
                    </div>

                </div>

                <!-- RIGHT FAQ ACCORDION -->
                <div class="lg:col-span-2 space-y-5" data-aos="fade-left">

                    @php
                        $faqs = [
                            [
                                'q' => 'How soon will someone from Devobyte contact me after I submit the form?',
                                'a' =>
                                    'Once you submit the contact form, our team usually reaches out within 24 business hours via call or email to understand your requirements and take the discussion forward.',
                            ],
                            [
                                'q' => 'What details should I share to get an accurate quote or proposal?',
                                'a' => 'To give you the best solution and pricing, it helps if you share your business goals, required services, timelines, and budget range. Don’t worry—if you’re unsure, we’ll guide you during the first call.
',
                            ],
                            [
                                'q' => 'Do you work with startups, small businesses, or large enterprises?',
                                'a' =>
                                    'Yes, we work with startups, SMEs, and growing enterprises. Our solutions are scalable and customized based on your stage, industry, and growth objectives.',
                            ],
                            [
                                'q' => 'Can I book a consultation call before starting the project?',
                                'a' =>
                                    'Absolutely. We offer a free initial consultation call where we understand your needs, suggest the right approach, and answer all your questions—no commitment required.',
                            ],
                            [
                                'q' => 'What services can be discussed during the first call with Devobyte?',
                                'a' =>
                                    'In the first call, we can discuss IT services (website/app development, custom solutions, AI automation) as well as marketing services (SEO, social media, lead generation, performance marketing, LinkedIn marketing)—based on what your business needs most.',
                            ],
                        ];
                    @endphp

                    @foreach ($faqs as $faq)
                        <div class="faq-item bg-white border rounded-xl shadow-sm overflow-hidden">

                            <!-- QUESTION -->
                            <button type="button"
                                class="faq-toggle w-full flex justify-between items-center
                               px-6 py-6 text-left
                               font-semibold text-[18px] md:text-[19px]
                               transition"
                                style="font-family:'Inter', sans-serif;">

                                {{ $faq['q'] }}

                                <span
                                    class="faq-icon
                                     w-9 h-9 flex items-center justify-center
                                     bg-gray-100 text-gray-700
                                     rounded-full text-xl transition">
                                    +
                                </span>
                            </button>

                            <!-- ANSWER -->
                            <div class="faq-content hidden px-6 pb-6
                                text-gray-600 text-[15px] md:text-[16px]
                                leading-relaxed"
                                style="font-family:'Inter', sans-serif;">
                                {{ $faq['a'] }}
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- ================= FAQ SCRIPT (SINGLE OPEN) ================= -->
    <script>
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', () => {

                const currentItem = button.closest('.faq-item');
                const currentContent = currentItem.querySelector('.faq-content');
                const currentIcon = currentItem.querySelector('.faq-icon');

                // Close all others
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== currentItem) {
                        item.querySelector('.faq-content').classList.add('hidden');
                        const icon = item.querySelector('.faq-icon');
                        icon.textContent = '+';
                        icon.classList.remove('bg-blue-500', 'text-white');
                        icon.classList.add('bg-gray-100', 'text-gray-700');
                    }
                });

                // Toggle current
                const isOpen = !currentContent.classList.contains('hidden');

                if (isOpen) {
                    currentContent.classList.add('hidden');
                    currentIcon.textContent = '+';
                    currentIcon.classList.remove('bg-blue-500', 'text-white');
                    currentIcon.classList.add('bg-gray-100', 'text-gray-700');
                } else {
                    currentContent.classList.remove('hidden');
                    currentIcon.textContent = '−';
                    currentIcon.classList.remove('bg-gray-100', 'text-gray-700');
                    currentIcon.classList.add('bg-blue-500', 'text-white');
                }
            });
        });
    </script>

    <!-- ================= GOOGLE MAP SECTION ================= -->
    <section class="w-full relative" data-aos="fade-up">

        <!-- Map Wrapper -->
        <div class="w-full h-[420px] md:h-[520px] lg:h-[600px] relative">

            <!-- Google Map -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56045.015264973066!2d77.35895950631964!3d28.605372629238214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee57ca9e1ca5%3A0xdc324bf9fd262212!2sNX-ONE!5e0!3m2!1sen!2sin!4v1767529108883!5m2!1sen!2sin"
                class="w-full h-full border-0" allowfullscreen loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

            <!-- Overlay Badge (RIGHT TOP) -->
            <div
                class="absolute top-6 right-6 bg-white/90 backdrop-blur-md
                    px-6 py-4 rounded-xl shadow-xl hidden md:block">

                <h4 class="font-bold text-lg mb-1" style="font-family:'Montserrat Alternates', sans-serif;">
                    Devobyte OPC Pvt. Ltd.
                </h4>

                <p class="text-sm text-gray-600" style="font-family:'Inter', sans-serif;">
                    NX One, Greater Noida West
                </p>
            </div>

        </div>
    </section>



@endsection

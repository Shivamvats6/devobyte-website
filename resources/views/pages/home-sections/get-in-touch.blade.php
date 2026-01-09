<!-- ================= GET IN TOUCH SECTION ================= -->

        <section class="py-24 bg-white overflow-hidden w-full">

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
                                <input type="text" name="name" value="{{ old('name') }}"
                                    placeholder="Robert Sanchez"
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
                                <input type="text" name="phone" value="{{ old('phone') }}"
                                    placeholder="+91 - 9350243163"
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

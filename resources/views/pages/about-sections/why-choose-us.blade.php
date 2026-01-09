<!-- ================= WHY CHOOSE US ================= -->
<section class="py-28 bg-[#F8FBFF] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <!-- ================= LEFT IMAGE ================= -->
        <div class="relative" data-aos="fade-right">

            <!-- Main Image -->
           <img src="/assets/images/chhose-us.png"
     alt="Why Choose Us"
     class=" w-full max-w-xl lg:max-w-[520px] xl:max-w-[580px]">


        </div>

        <!-- ================= RIGHT CONTENT ================= -->
        <div data-aos="fade-left">

            <!-- Heading -->
            <h2 class="text-4xl xl:text-5xl font-extrabold mb-6"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Why <span class="text-blue-500">Choose Us?</span>
            </h2>

            <!-- Description -->
            <p class="text-gray-500 leading-relaxed mb-10 max-w-xl font-inter">
                We keep things simple, organized, and stress-free—so you can focus on growing your business.
                We deliver fast, data-driven results without compromising on quality, constantly testing and optimizing for maximum impact.
            </p>

            <!-- ================= TOGGLE BUTTONS ================= -->
           <div class="inline-flex rounded-full bg-gray-100 p-1 shadow-inner mb-8">

    <!-- OUR MISSION -->
    <button id="missionBtn"
            onclick="showMission()"
            class="px-8 py-3 rounded-full
                   bg-blue-500 text-white
                   text-sm font-semibold
                   transition-all duration-300
                   hover:bg-blue-600 focus:outline-none">
        Our Mission
    </button>

    <!-- OUR VISION -->
    <button id="visionBtn"
            onclick="showVision()"
            class="px-8 py-3 rounded-full
                   bg-transparent text-gray-800
                   text-sm font-semibold
                   transition-all duration-300
                   hover:bg-gray-200 focus:outline-none">
        Our Vision
    </button>

</div>


            <!-- ================= TOGGLE CONTENT ================= -->
            <div id="missionContent" class="text-gray-600 leading-relaxed mb-12 font-inter transition-all duration-300">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                by injected humour, or randomised words which don't look even slightly believable.
            </div>

            <div id="visionContent" class="text-gray-600 leading-relaxed mb-12 font-inter hidden transition-all duration-300">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,

            </div>

            <!-- ================= ICON FEATURES ================= -->
            <div class="flex flex-wrap gap-10">

                <!-- Item 1 -->
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center">
                        <img src="/assets/images/social-media 1.png" alt="Social Media Marketing" class="w-8 h-8">
                    </div>
                    <p class="font-semibold text-gray-800 font-inter">
                        Social Media<br>Marketing
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center">
                        <img src="/assets/images/Group (3).png" alt="Lead Generation Process" class="w-8 h-8">
                    </div>
                    <p class="font-semibold text-gray-800 font-inter">
                        Lead Generation<br>Process
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ================= TOGGLE SCRIPT ================= -->
<script>
    function showMission() {
        document.getElementById('missionBtn').classList.add('bg-blue-500','text-white');
        document.getElementById('missionBtn').classList.remove('bg-transparent','text-gray-800');

        document.getElementById('visionBtn').classList.remove('bg-blue-500','text-white');
        document.getElementById('visionBtn').classList.add('bg-transparent','text-gray-800');

        document.getElementById('missionContent').classList.remove('hidden');
        document.getElementById('visionContent').classList.add('hidden');
    }

    function showVision() {
        document.getElementById('visionBtn').classList.add('bg-blue-500','text-white');
        document.getElementById('visionBtn').classList.remove('bg-transparent','text-gray-800');

        document.getElementById('missionBtn').classList.remove('bg-blue-500','text-white');
        document.getElementById('missionBtn').classList.add('bg-transparent','text-gray-800');

        document.getElementById('visionContent').classList.remove('hidden');
        document.getElementById('missionContent').classList.add('hidden');
    }
</script>

<!-- ================= OUR CORE VALUES SECTION ================= -->
<section class="relative py-28 bg-white overflow-hidden">

    <!-- Soft Pattern Background -->
    <div class="absolute inset-0 opacity-[0.04] bg-[url('/assets/images/pattern-bg.png')] bg-repeat"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- ================= HEADING ================= -->
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-extrabold"
                style="font-family:'Montserrat Alternates', sans-serif;">
                Our <span class="text-blue-500">Core Values</span>
            </h2>
        </div>

        <!-- ================= VALUES GRID ================= -->
        <div class="grid md:grid-cols-3 gap-16">

            <!-- CARD 1 -->
            <div class="core-card text-center">
                <div class="icon-wrap bg-blue-50">
                    <img src="/assets/images/innovation.png" class="w-8" alt="Innovation">
                </div>
                <h4>Innovation</h4>
                <p>
                    Building an enterprise doesn't need nightmare or cost your thousands.
                    Devobyte is purpose built.
                </p>
            </div>

            <!-- CARD 2 -->
            <div class="core-card text-center translate-y-10">
                <div class="icon-wrap bg-cyan-50">
                    <img src="/assets/images/growth.png" class="w-8" alt="Growth">
                </div>
                <h4>Growth</h4>
                <p>
                    Building an enterprise doesn't need nightmare or cost your thousands.
                    Devobyte is purpose built.
                </p>
            </div>

            <!-- CARD 3 -->
            <div class="core-card text-center">
                <div class="icon-wrap bg-pink-50">
                    <img src="/assets/images/ownership.png" class="w-8" alt="Ownership">
                </div>
                <h4>Ownership</h4>
                <p>
                    Building an enterprise doesn't need nightmare or cost your thousands.
                    Devobyte is purpose built.
                </p>
            </div>

            <!-- CARD 4 -->
            <div class="core-card text-center">
                <div class="icon-wrap bg-orange-50">
                    <img src="/assets/images/team-work.png" class="w-8" alt="Team Work">
                </div>
                <h4>Team Work</h4>
                <p>
                    Building an enterprise doesn't need nightmare or cost your thousands.
                    Devobyte is purpose built.
                </p>
            </div>

            <!-- CARD 5 -->
            <div class="core-card text-center translate-y-10">
                <div class="icon-wrap bg-red-50">
                    <img src="/assets/images/commitment.png" class="w-8" alt="Commitment">
                </div>
                <h4>Commitment</h4>
                <p>
                    Building an enterprise doesn't need nightmare or cost your thousands.
                    Devobyte is purpose built.
                </p>
            </div>

            <!-- CARD 6 -->
            <div class="core-card text-center">
                <div class="icon-wrap bg-green-50">
                    <img src="/assets/images/positivity.png" class="w-8" alt="Positivity">
                </div>
                <h4>Positivity</h4>
                <p>
                    Building an enterprise doesn't need nightmare or cost your thousands.
                    Devobyte is purpose built.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ================= CORE VALUES STYLES ================= -->
<style>
    .core-card {
        padding: 32px 26px;
        border-radius: 20px;
        transition: all .35s ease;
        position: relative;
    }

    .core-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(37,99,235,0.12);
        background: #ffffff;
    }

    .core-card h4 {
        font-size: 20px;
        font-weight: 700;
        margin-top: 18px;
        margin-bottom: 10px;
        color: #0f172a;
        font-family: 'Montserrat Alternates', sans-serif;
    }

    .core-card p {
        font-size: 14px;
        color: #64748b;
        line-height: 1.7;
        max-width: 260px;
        margin: 0 auto;
        font-family: 'Inter', sans-serif;
    }

    .icon-wrap {
        width: 64px;
        height: 64px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        transition: all .35s ease;
    }

    .core-card:hover .icon-wrap {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 15px 35px rgba(37,99,235,0.25);
    }

    @media(max-width:768px){
        .translate-y-10{
            transform:none !important;
        }
    }
</style>

{{-- ================= SIDEBAR + MOBILE TOGGLE ================= --}}
<div x-data="{ open:false, careerOpen:false }">

    {{-- ================= MOBILE TOP BAR ================= --}}
    <div class="lg:hidden flex items-center justify-between bg-[#0B3C8A] shadow px-4 py-3">
        <button @click="open = !open" class="text-white text-2xl">
            <i class="fa-solid fa-bars"></i>
        </button>

        {{-- Mobile Logo --}}
        <img src="{{ asset('assets/images/favicon.webp') }}"
             alt="Devobyte"
             class="h-8">
    </div>

    {{-- ================= MOBILE OVERLAY ================= --}}
    <div x-show="open"
         @click="open=false"
         class="fixed inset-0 bg-black/50 z-40 lg:hidden"
         x-transition.opacity></div>

    {{-- ================= SIDEBAR ================= --}}
    <aside
        :class="open ? 'translate-x-0' : '-translate-x-full'"
        class="fixed lg:static z-50 top-0 left-0 h-screen w-64
               bg-[#0B3C8A] text-white
               transform lg:translate-x-0 transition-transform duration-300
               overflow-y-auto"
        data-aos="fade-right">

        {{-- ================= LOGO ================= --}}
        <div class="px-6 py-6 border-b border-white/10 flex items-center gap-3">
            <img src="{{ asset('assets/images/logo 1.png') }}"
                 alt="Devobyte Admin"
                 class="h-10">
        </div>

        {{-- ================= NAVIGATION ================= --}}
        <nav class="mt-6 space-y-1 font-inter">

            {{-- Dashboard --}}
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-4 px-6 py-3
                      text-base lg:text-lg
                      transition rounded-r-full
                      {{ request()->routeIs('admin.dashboard')
                         ? 'bg-white/15 font-semibold'
                         : 'text-blue-100 hover:bg-white/10' }}">
                <i class="fa-solid fa-gauge-high text-lg lg:text-xl w-5"></i>
                Dashboard
            </a>

            {{-- Leads --}}
            <a href="{{ route('admin.leads') }}"
               class="flex items-center gap-4 px-6 py-3
                      text-base lg:text-lg
                      transition rounded-r-full
                      {{ request()->routeIs('admin.leads*')
                         ? 'bg-white/15 font-semibold'
                         : 'text-blue-100 hover:bg-white/10' }}">
                <i class="fa-solid fa-address-book text-lg lg:text-xl w-5"></i>
                Leads
            </a>

            {{-- ================= CAREERS (SUBMENU) ================= --}}
            <button
                @click="careerOpen = !careerOpen"
                class="w-full flex items-center justify-between px-6 py-3
                       text-base lg:text-lg
                       transition rounded-r-full
                       {{ request()->routeIs('admin.careers*')
                          ? 'bg-white/15 font-semibold'
                          : 'text-blue-100 hover:bg-white/10' }}">

                <span class="flex items-center gap-4">
                    <i class="fa-solid fa-user-tie text-lg lg:text-xl w-5"></i>
                    Careers
                </span>

                <i class="fa-solid fa-chevron-down text-sm transition"
                   :class="careerOpen ? 'rotate-180' : ''"></i>
            </button>

            {{-- Careers Submenu --}}
            <div x-show="careerOpen"
                 x-transition
                 class="ml-6 mt-1 space-y-1">

                {{-- Applications --}}
                <a href="{{ route('admin.careers') }}"
                   class="flex items-center gap-3 px-6 py-2
                          text-sm lg:text-base
                          transition rounded-r-full
                          {{ request()->routeIs('admin.careers')
                             ? 'bg-white/20 text-white font-semibold'
                             : 'text-blue-200 hover:bg-white/10' }}">
                    <i class="fa-solid fa-file-lines w-4"></i>
                    Applications
                </a>

                {{-- Vacancies --}}
                <a href="{{ route('admin.careers.vacancies') }}"
                   class="flex items-center gap-3 px-6 py-2
                          text-sm lg:text-base
                          transition rounded-r-full
                          {{ request()->routeIs('admin.careers.vacancies*')
                             ? 'bg-white/20 text-white font-semibold'
                             : 'text-blue-200 hover:bg-white/10' }}">
                    <i class="fa-solid fa-briefcase w-4"></i>
                    Vacancies
                </a>
            </div>

            {{-- Blogs --}}
            <a href="{{ route('admin.blogs.index') }}"
               class="flex items-center gap-4 px-6 py-3
                      text-base lg:text-lg
                      text-blue-100
                      hover:bg-white/10 transition rounded-r-full">
                <i class="fa-solid fa-blog text-lg lg:text-xl w-5"></i>
                Blogs
            </a>

            {{-- Settings --}}
            <a href="#"
               class="flex items-center gap-4 px-6 py-3
                      text-base lg:text-lg
                      text-blue-100
                      hover:bg-white/10 transition rounded-r-full">
                <i class="fa-solid fa-gear text-lg lg:text-xl w-5"></i>
                Settings
            </a>

        </nav>

    </aside>
</div>

<header class="bg-white shadow px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-semibold text-gray-800">
        @yield('page-title')
    </h1>

    <div class="flex items-center gap-4">
        <span class="text-gray-600 text-sm">
            Admin
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="text-red-500 text-sm hover:underline">
                Logout
            </button>
        </form>
    </div>
</header>

@extends('admin.layout.app')

@section('title','Dashboard')
@section('page-title','Dashboard')

@section('content')

{{-- ================= STATS CARDS ================= --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 font-inter">

    {{-- Total Leads --}}
    <a href="{{ route('admin.leads') }}"
       data-aos="fade-up"
       class="bg-white p-6 rounded-xl shadow border-l-4 border-[#0D47A1]
              hover:shadow-lg transition group">

        <div class="flex justify-between items-center">
            <div>
                <h4 class="text-gray-500 text-sm">Total Leads</h4>
                <p class="text-3xl font-bold mt-2 text-[#0D47A1]">
                    {{ $totalLeads }}
                </p>
            </div>

            <div class="text-[#0D47A1] text-3xl group-hover:scale-110 transition">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>
    </a>

    {{-- Career Applications --}}
    <a href="{{ route('admin.careers') }}"
       data-aos="fade-up"
       data-aos-delay="100"
       class="bg-white p-6 rounded-xl shadow border-l-4 border-[#FFC107]
              hover:shadow-lg transition group">

        <div class="flex justify-between items-center">
            <div>
                <h4 class="text-gray-500 text-sm">Career Applications</h4>
                <p class="text-3xl font-bold mt-2 text-gray-800">
                    {{ $totalCareers ?? 0 }}
                </p>
            </div>

            <div class="text-[#FFC107] text-3xl group-hover:scale-110 transition">
                <i class="fa-solid fa-briefcase"></i>
            </div>
        </div>
    </a>

    {{-- Blogs --}}
    <div data-aos="fade-up"
         data-aos-delay="200"
         class="bg-white p-6 rounded-xl shadow border-l-4 border-green-500">

        <div class="flex justify-between items-center">
            <div>
                <h4 class="text-gray-500 text-sm">Blogs</h4>
                <p class="text-3xl font-bold mt-2 text-gray-800">
                    {{ $totalBlogs ?? 0 }}
                </p>
            </div>

            <div class="text-green-500 text-3xl">
                <i class="fa-solid fa-blog"></i>
            </div>
        </div>
    </div>

    {{-- Pages --}}
    <div data-aos="fade-up"
         data-aos-delay="300"
         class="bg-white p-6 rounded-xl shadow border-l-4 border-purple-500">

        <div class="flex justify-between items-center">
            <div>
                <h4 class="text-gray-500 text-sm">Pages</h4>
                <p class="text-3xl font-bold mt-2 text-gray-800">
                    {{ $totalPages ?? 0 }}
                </p>
            </div>

            <div class="text-purple-500 text-3xl">
                <i class="fa-solid fa-file-lines"></i>
            </div>
        </div>
    </div>

</div>

{{-- ================= LATEST DATA ================= --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 font-inter">

    {{-- Latest Leads --}}
    <div class="bg-white rounded-xl shadow p-6"
         data-aos="fade-right">

        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-gray-800 font-['Montserrat_Alternates']">
                Latest Leads
            </h3>

            <a href="{{ route('admin.leads') }}"
               class="text-sm text-[#0D47A1] hover:underline">
                View All
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                <tr class="bg-gray-100 text-gray-600">
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Date</th>
                </tr>
                </thead>
                <tbody>
                @forelse($latestLeads as $lead)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-3">{{ $lead->name }}</td>
                        <td class="p-3">{{ $lead->email }}</td>
                        <td class="p-3">
                            {{ $lead->created_at->format('d M Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3"
                            class="p-4 text-center text-gray-500">
                            No leads found
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Latest Career Applications --}}
    <div class="bg-white rounded-xl shadow p-6"
         data-aos="fade-left">

        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-gray-800 font-['Montserrat_Alternates']">
                Latest Career Applications
            </h3>

            <a href="{{ route('admin.careers') }}"
               class="text-sm text-[#FFC107] hover:underline">
                View All
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                <tr class="bg-gray-100 text-gray-600">
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Profile</th>
                    <th class="p-3 text-left">Date</th>
                </tr>
                </thead>
                <tbody>
                @forelse($latestCareers as $career)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-3">{{ $career->name }}</td>
                        <td class="p-3">{{ $career->profile }}</td>
                        <td class="p-3">
                            {{ $career->created_at->format('d M Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3"
                            class="p-4 text-center text-gray-500">
                            No applications found
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection

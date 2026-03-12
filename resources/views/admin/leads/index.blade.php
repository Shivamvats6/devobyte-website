@extends('admin.layout.app')

@section('title','Leads')
@section('page-title','Leads')

@section('content')

{{-- ✅ Success Message --}}
@if(session('success'))
<div class="bg-green-100 text-green-700 p-3 rounded mb-4 font-inter"
     data-aos="fade-down">
    {{ session('success') }}
</div>
@endif

{{-- 🔍 Filters --}}
<form method="GET"
      data-aos="fade-up"
      class="bg-white rounded-xl shadow p-4 mb-6 grid grid-cols-1 md:grid-cols-4 gap-4 font-inter">

    <input type="text"
           name="search"
           value="{{ request('search') }}"
           placeholder="Search name, email, phone..."
           class="border rounded px-3 py-2 w-full focus:ring-2 focus:ring-blue-500">

    <input type="date"
           name="from_date"
           value="{{ request('from_date') }}"
           class="border rounded px-3 py-2 w-full">

    <input type="date"
           name="to_date"
           value="{{ request('to_date') }}"
           class="border rounded px-3 py-2 w-full">

    <button
        class="bg-[#0D47A1] text-white rounded px-4 py-2 hover:bg-blue-800 transition font-medium">
        Filter
    </button>
</form>

{{-- 📋 Leads Table --}}
<div class="bg-white rounded-xl shadow p-6 overflow-x-auto"
     data-aos="zoom-in">

<table class="w-full text-sm border font-inter">
    <thead>
    <tr class="bg-gray-100 text-left">
        <th class="p-3 border">Sr. No.</th>
        <th class="p-3 border">Name</th>
        <th class="p-3 border">Email</th>
        <th class="p-3 border">Phone</th>
        <th class="p-3 border">Service</th>
        <th class="p-3 border">Message</th>
        <th class="p-3 border">Date</th>
        <th class="p-3 border">Action</th>
    </tr>
    </thead>

    <tbody>
    @forelse($leads as $lead)
    <tr data-aos="fade-up"
        data-aos-delay="{{ $loop->index * 40 }}"
        class="hover:bg-gray-50 {{ $lead->is_important ? 'bg-yellow-50' : '' }}">

        {{-- Sr No --}}
        <td class="p-3 border">{{ $loop->iteration }}</td>

        {{-- Name --}}
        <td class="p-3 border font-medium">{{ $lead->name }}</td>

        {{-- Email --}}
        <td class="p-3 border">
            <a href="mailto:{{ $lead->email }}"
               class="text-blue-600 hover:underline flex items-center gap-1">
                <i class="fa-solid fa-envelope"></i>
                {{ $lead->email }}
            </a>
        </td>

        {{-- Phone --}}
        <td class="p-3 border">
            <div class="flex gap-2 items-center">
                <a href="tel:{{ $lead->phone }}"
                   class="text-green-600 hover:underline flex items-center gap-1">
                    <i class="fa-solid fa-phone"></i>
                    {{ $lead->phone ?? '-' }}
                </a>

                @if($lead->phone)
                <button onclick="copyText('{{ $lead->phone }}')"
                        title="Copy number"
                        class="text-gray-500 hover:text-black">
                    <i class="fa-solid fa-copy"></i>
                </button>
                @endif
            </div>
        </td>

        {{-- Service --}}
        <td class="p-3 border">{{ $lead->service ?? '-' }}</td>

        {{-- Message --}}
        <td class="p-3 border">
            @if($lead->message)
            <button onclick="openMessageModal({{ json_encode($lead->message) }})"
                    class="text-indigo-600 hover:underline flex items-center gap-1">
                <i class="fa-solid fa-eye"></i>
                View
            </button>
            @else
            -
            @endif
        </td>

        {{-- Date --}}
        <td class="p-3 border">
            {{ $lead->created_at->format('d M Y') }}
        </td>

        {{-- Actions --}}
        <td class="p-3 border">
            <div class="flex items-center gap-3">

                {{-- 📌 Pin --}}
                <form method="POST"
                      action="{{ route('admin.leads.important',$lead->id) }}">
                    @csrf
                    @method('PATCH')
                    <button title="Mark Important"
                            class="{{ $lead->is_important ? 'text-yellow-500' : 'text-gray-400 hover:text-yellow-500' }}">
                        <i class="fa-solid fa-thumbtack"></i>
                    </button>
                </form>

                {{-- 🗑 Delete --}}
                <form method="POST"
                      action="{{ route('admin.leads.delete',$lead->id) }}"
                      onsubmit="return confirm('Delete this lead?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500 hover:text-red-700">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>

            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="8" class="p-4 text-center text-gray-500">
            No leads found
        </td>
    </tr>
    @endforelse
    </tbody>
</table>

<div class="mt-6">
    {{ $leads->links() }}
</div>
</div>

{{-- 📨 MESSAGE MODAL --}}
<div id="messageModal"
     class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50"
     data-aos="fade-in">

    <div class="bg-white max-w-lg w-full rounded-xl shadow-lg p-6 relative font-inter">
        <h3 class="text-lg font-semibold mb-3 font-['Montserrat_Alternates']">
            Lead Message
        </h3>

        <div id="modalMessage"
             class="text-sm text-gray-700 whitespace-pre-line max-h-80 overflow-y-auto">
        </div>

        <button onclick="closeMessageModal()"
                class="absolute top-3 right-3 text-gray-400 hover:text-black">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
</div>

{{-- JS --}}
<script>
    function openMessageModal(message) {
        document.getElementById('modalMessage').innerText = message;
        document.getElementById('messageModal').classList.remove('hidden');
        document.getElementById('messageModal').classList.add('flex');
    }

    function closeMessageModal() {
        document.getElementById('messageModal').classList.add('hidden');
    }

    function copyText(text) {
        navigator.clipboard.writeText(text);
        alert('Phone number copied!');
    }
</script>

@endsection

@extends('admin.layout.app')

@section('title','Careers')
@section('page-title','Career Applications')

@section('content')

@if(session('success'))
<div class="bg-green-100 text-green-700 p-3 rounded mb-4" data-aos="fade-down">
    {{ session('success') }}
</div>
@endif

<form method="GET"
      class="bg-white rounded-xl shadow p-4 mb-6 grid grid-cols-1 md:grid-cols-4 gap-4"
      data-aos="fade-up">

    <input type="text" name="search" value="{{ request('search') }}"
           placeholder="Search name, email, profile..."
           class="border rounded px-3 py-2">

    <input type="date" name="from_date" value="{{ request('from_date') }}"
           class="border rounded px-3 py-2">

    <input type="date" name="to_date" value="{{ request('to_date') }}"
           class="border rounded px-3 py-2">

    <button class="bg-[#0D47A1] text-white rounded px-4 py-2">
        Filter
    </button>
</form>

<div class="bg-white rounded-xl shadow p-6 overflow-x-auto" data-aos="zoom-in">

<table class="w-full text-sm border">
<thead class="bg-gray-100">
<tr>
    <th class="p-3 border">#</th>
    <th class="p-3 border">Name</th>
    <th class="p-3 border">Profile</th>
    <th class="p-3 border">Email</th>
    <th class="p-3 border">Phone</th>
    <th class="p-3 border">Resume</th>
    <th class="p-3 border">Date</th>
    <th class="p-3 border">Action</th>
</tr>
</thead>

<tbody>
@forelse($careers as $career)
<tr class="{{ $career->is_important ? 'bg-yellow-50' : '' }}"
    data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">

<td class="p-3 border">{{ $loop->iteration }}</td>
<td class="p-3 border font-medium">{{ $career->name }}</td>
<td class="p-3 border">{{ $career->profile }}</td>

<td class="p-3 border">
<a href="mailto:{{ $career->email }}" class="text-blue-600">
<i class="fa-solid fa-envelope"></i> {{ $career->email }}
</a>
</td>

<td class="p-3 border">
<a href="tel:{{ $career->phone }}" class="text-green-600">
<i class="fa-solid fa-phone"></i> {{ $career->phone }}
</a>
</td>

<td class="p-3 border">
<a href="{{ asset('storage/'.$career->resume) }}"
   target="_blank"
   class="text-indigo-600 underline">
<i class="fa-solid fa-file-pdf"></i> View
</a>
</td>

<td class="p-3 border">
{{ $career->created_at->format('d M Y') }}
</td>

<td class="p-3 border">
<div class="flex gap-3">

<form method="POST"
      action="{{ route('admin.careers.important',$career->id) }}">
@csrf
@method('PATCH')
<button class="{{ $career->is_important ? 'text-yellow-500' : 'text-gray-400' }}">
<i class="fa-solid fa-thumbtack"></i>
</button>
</form>

<form method="POST"
      action="{{ route('admin.careers.delete',$career->id) }}"
      onsubmit="return confirm('Delete application?')">
@csrf
@method('DELETE')
<button class="text-red-500">
<i class="fa-solid fa-trash"></i>
</button>
</form>

</div>
</td>

</tr>
@empty
<tr>
<td colspan="8" class="p-4 text-center text-gray-500">
No applications found
</td>
</tr>
@endforelse
</tbody>
</table>

<div class="mt-6">
{{ $careers->links() }}
</div>

</div>

@endsection

@extends('admin.layout.app')

@section('title','Career Vacancies')
@section('page-title','Career Vacancies')

@section('content')

{{-- Success Message --}}
@if(session('success'))
<div class="bg-green-100 text-green-700 p-3 rounded mb-4"
     data-aos="fade-down">
    {{ session('success') }}
</div>
@endif

<div class="flex justify-end mb-4">
    <a href="{{ route('admin.careers.vacancies.create') }}"
       class="bg-[#0D47A1] text-white px-5 py-2 rounded-lg
              hover:bg-blue-800 transition flex items-center gap-2">
        <i class="fa-solid fa-plus"></i>
        Add Vacancy
    </a>
</div>

<div class="bg-white rounded-xl shadow overflow-x-auto"
     data-aos="fade-up">

    <table class="w-full text-sm border">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-3 border">#</th>
                <th class="p-3 border">Title</th>
                <th class="p-3 border">Experience</th>
                <th class="p-3 border">Deadline</th>
                <th class="p-3 border">Status</th>
                <th class="p-3 border">Actions</th>
            </tr>
        </thead>

        <tbody>
        @forelse($vacancies as $vacancy)
            <tr class="hover:bg-gray-50"
                data-aos="fade-up"
                data-aos-delay="{{ $loop->index * 40 }}">

                <td class="p-3 border">{{ $loop->iteration }}</td>

                <td class="p-3 border font-semibold">
                    {{ $vacancy->title }}
                </td>

                <td class="p-3 border">
                    {{ $vacancy->experience }}
                </td>

                <td class="p-3 border">
                    {{ $vacancy->deadline->format('d M Y') }}
                </td>

                <td class="p-3 border">
                    @if($vacancy->is_active)
                        <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-700">
                            Active
                        </span>
                    @else
                        <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-700">
                            Inactive
                        </span>
                    @endif
                </td>

                <td class="p-3 border">
                    <div class="flex items-center gap-3">

                        {{-- Toggle Status --}}
                        <form method="POST"
                              action="{{ route('admin.careers.vacancies.toggle',$vacancy->id) }}">
                            @csrf
                            @method('PATCH')
                            <button title="Toggle Status"
                                    class="text-yellow-500 hover:text-yellow-600">
                                <i class="fa-solid fa-thumbtack"></i>
                            </button>
                        </form>

                        {{-- Edit --}}
                        <a href="{{ route('admin.careers.vacancies.edit',$vacancy->id) }}"
                           class="text-blue-600 hover:text-blue-800">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        {{-- Delete --}}
                        <form method="POST"
                              action="{{ route('admin.careers.vacancies.delete',$vacancy->id) }}"
                              onsubmit="return confirm('Delete this vacancy?')">
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
                <td colspan="6"
                    class="p-6 text-center text-gray-500">
                    No vacancies found
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $vacancies->links() }}
</div>

@endsection

@extends('admin.layout.app')

@section('title', 'Edit Vacancy')
@section('page-title', 'Edit Career Vacancy')

@section('content')

    <form method="POST" action="{{ route('admin.careers.vacancies.update', $vacancy->id) }}"
        class="bg-white rounded-xl shadow p-6 max-w-3xl" data-aos="fade-up">

        @csrf
        @method('PUT')

        {{-- Title --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Job Title</label>
            <input type="text" name="title" value="{{ $vacancy->title }}" class="w-full border rounded px-3 py-2 mt-1"
                required>
        </div>

        {{-- Experience --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Experience</label>
            <input type="text" name="experience" value="{{ $vacancy->experience }}"
                class="w-full border rounded px-3 py-2 mt-1" required>
        </div>

        {{-- Deadline --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Deadline</label>
            <input type="date" name="deadline" value="{{ $vacancy->deadline->format('Y-m-d') }}"
                class="w-full border rounded px-3 py-2 mt-1" required>
        </div>

        {{-- Summary --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Summary</label>
            <textarea name="summary" rows="3" class="w-full border rounded px-3 py-2 mt-1" required>{{ $vacancy->summary }}</textarea>
        </div>

        {{-- Responsibilities --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Responsibilities</label>
            <textarea name="responsibilities" rows="4" class="w-full border rounded px-3 py-2 mt-1" required>{{ is_array($vacancy->responsibilities) ? implode("\n", $vacancy->responsibilities) : $vacancy->responsibilities }}
</textarea>
        </div>

        {{-- Requirements --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Requirements</label>
            <textarea name="requirements" rows="4" class="w-full border rounded px-3 py-2 mt-1" required>{{ is_array($vacancy->requirements) ? implode("\n", $vacancy->requirements) : $vacancy->requirements }}
</textarea>
        </div>

        {{-- Active --}}
        <div class="flex items-center gap-2 mb-6">
            <input type="checkbox" name="is_active" {{ $vacancy->is_active ? 'checked' : '' }}>
            <span class="text-sm">Active Vacancy</span>
        </div>

        <div class="flex gap-4">
            <button class="bg-[#0D47A1] text-white px-6 py-2 rounded-lg">
                Update Vacancy
            </button>

            <a href="{{ route('admin.careers.vacancies') }}" class="px-6 py-2 border rounded-lg">
                Cancel
            </a>
        </div>

    </form>

@endsection

@extends('admin.layout.app')

@section('title','Add Vacancy')
@section('page-title','Add Career Vacancy')

@section('content')

<form method="POST"
      action="{{ route('admin.careers.vacancies.store') }}"
      class="bg-white rounded-xl shadow p-6 max-w-3xl"
      data-aos="fade-up">

    @csrf

    {{-- Title --}}
    <div class="mb-4">
        <label class="font-semibold text-sm">Job Title</label>
        <input type="text" name="title"
               class="w-full border rounded px-3 py-2 mt-1"
               required>
    </div>

    {{-- Experience --}}
    <div class="mb-4">
        <label class="font-semibold text-sm">Experience</label>
        <input type="text" name="experience"
               placeholder="0-2 Years"
               class="w-full border rounded px-3 py-2 mt-1"
               required>
    </div>

    {{-- Deadline --}}
    <div class="mb-4">
        <label class="font-semibold text-sm">Deadline</label>
        <input type="date" name="deadline"
               class="w-full border rounded px-3 py-2 mt-1"
               required>
    </div>

    {{-- Summary --}}
    <div class="mb-4">
        <label class="font-semibold text-sm">Summary</label>
        <textarea name="summary" rows="3"
                  class="w-full border rounded px-3 py-2 mt-1"
                  required></textarea>
    </div>

    {{-- Responsibilities --}}
    <div class="mb-4">
        <label class="font-semibold text-sm">
            Key Responsibilities (one per line)
        </label>
        <textarea name="responsibilities" rows="4"
                  class="w-full border rounded px-3 py-2 mt-1"
                  required></textarea>
    </div>

    {{-- Requirements --}}
    <div class="mb-4">
        <label class="font-semibold text-sm">
            Requirements (one per line)
        </label>
        <textarea name="requirements" rows="4"
                  class="w-full border rounded px-3 py-2 mt-1"
                  required></textarea>
    </div>

    {{-- Active --}}
    <div class="flex items-center gap-2 mb-6">
        <input type="checkbox" name="is_active" checked>
        <span class="text-sm">Active Vacancy</span>
    </div>

    <div class="flex gap-4">
        <button class="bg-[#0D47A1] text-white px-6 py-2 rounded-lg">
            Save Vacancy
        </button>

        <a href="{{ route('admin.careers.vacancies') }}"
           class="px-6 py-2 border rounded-lg">
            Cancel
        </a>
    </div>

</form>

@endsection

@extends('admin.layout.app')

@section('title','Edit Blog')
@section('page-title','Edit Blog')

@section('content')

<div class="max-w-5xl">

<form method="POST"
      action="{{ route('admin.blogs.update',$blog->id) }}"
      enctype="multipart/form-data"
      class="bg-white rounded-xl shadow p-8 space-y-6">

    @csrf
    @method('PUT')


    {{-- ================= ERROR ALERT ================= --}}
    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded-lg">
            <ul class="list-disc pl-5 text-sm">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    {{-- ================= BASIC INFO ================= --}}
    <div>
        <h2 class="text-xl font-bold mb-4 text-gray-800">
            Blog Information
        </h2>

        {{-- TITLE --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Blog Title</label>

            <input type="text"
                   name="title"
                   id="title"
                   value="{{ old('title',$blog->title) }}"
                   class="w-full border rounded px-3 py-2 mt-1"
                   required>
        </div>


        {{-- SLUG --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Slug</label>

            <input type="text"
                   name="slug"
                   id="slug"
                   value="{{ old('slug',$blog->slug) }}"
                   class="w-full border rounded px-3 py-2 mt-1 bg-gray-50"
                   readonly>
        </div>


        {{-- CATEGORY --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Category</label>

            <select name="blog_category_id"
                    class="w-full border rounded px-3 py-2 mt-1">

                <option value="">Select Category</option>

                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}"
                        {{ old('blog_category_id',$blog->blog_category_id) == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach

            </select>
        </div>


        {{-- AUTHOR --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Author Name</label>

            <input type="text"
                   name="author"
                   value="{{ old('author',$blog->author) }}"
                   class="w-full border rounded px-3 py-2 mt-1">
        </div>


        {{-- PUBLISH DATE --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Publish Date</label>

            <input type="datetime-local"
                   name="published_at"
                   value="{{ old('published_at', optional($blog->published_at)->format('Y-m-d\TH:i')) }}"
                   class="w-full border rounded px-3 py-2 mt-1">
        </div>


        {{-- EXCERPT --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Short Excerpt</label>

            <textarea name="excerpt"
                      rows="3"
                      class="w-full border rounded px-3 py-2 mt-1"
                      placeholder="Short blog summary">{{ old('excerpt',$blog->excerpt) }}</textarea>
        </div>

    </div>



    {{-- ================= FEATURE IMAGE ================= --}}
    <div>
        <h2 class="text-xl font-bold mb-4 text-gray-800">
            Featured Image
        </h2>

        {{-- Existing Image --}}
        @if($blog->thumbnail)
        <img src="{{ asset('storage/'.$blog->thumbnail) }}"
             class="rounded-lg shadow max-h-48 mb-4">
        @endif

        {{-- Upload New --}}
        <input type="file"
               name="thumbnail"
               id="imageInput"
               accept="image/*"
               class="block w-full text-sm">

        <img id="imagePreview"
             class="mt-4 rounded-lg shadow max-h-64 hidden" />
    </div>



    {{-- ================= CONTENT ================= --}}
    <div>
        <h2 class="text-xl font-bold mb-4 text-gray-800">
            Blog Content
        </h2>

        <textarea name="content"
                  id="editor"
                  rows="10"
                  class="w-full border rounded px-3 py-2"
                  required>{{ old('content',$blog->content) }}</textarea>
    </div>



    {{-- ================= SEO SECTION ================= --}}
    <div class="bg-blue-50 p-5 rounded-lg">
        <h2 class="text-xl font-bold mb-4 text-blue-900">
            SEO Settings
        </h2>

        {{-- META TITLE --}}
        <div class="mb-4">
            <label class="font-semibold text-sm">Meta Title</label>

            <input type="text"
                   name="meta_title"
                   value="{{ old('meta_title',$blog->meta_title) }}"
                   class="w-full border rounded px-3 py-2 mt-1">
        </div>


        {{-- META DESCRIPTION --}}
        <div>
            <label class="font-semibold text-sm">Meta Description</label>

            <textarea name="meta_description"
                      rows="3"
                      class="w-full border rounded px-3 py-2 mt-1">{{ old('meta_description',$blog->meta_description) }}</textarea>
        </div>
    </div>



    {{-- ================= STATUS ================= --}}
    <div class="flex items-center gap-2">
        <input type="checkbox"
               name="is_active"
               {{ old('is_active',$blog->is_active) ? 'checked' : '' }}>

        <span class="text-sm font-medium">
            Publish Blog
        </span>
    </div>



    {{-- ================= BUTTONS ================= --}}
    <div class="flex gap-4 pt-4">

        <button class="bg-[#0D47A1] text-white px-8 py-3 rounded-lg font-semibold hover:scale-105 transition">
            Update Blog
        </button>

        <a href="{{ route('admin.blogs.index') }}"
           class="px-8 py-3 border rounded-lg hover:bg-gray-100 transition">
           Cancel
        </a>

    </div>

</form>

</div>



{{-- ================= CKEDITOR ================= --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
ClassicEditor.create(document.querySelector('#editor'))
.catch(error => console.error(error));
</script>



{{-- ================= IMAGE PREVIEW ================= --}}
<script>
document.getElementById('imageInput').addEventListener('change', function(e) {

    const file = e.target.files[0];
    if(!file) return;

    const reader = new FileReader();

    reader.onload = function(event){
        const img = document.getElementById('imagePreview');
        img.src = event.target.result;
        img.classList.remove('hidden');
    }

    reader.readAsDataURL(file);
});
</script>



{{-- ================= AUTO SLUG ================= --}}
<script>
document.getElementById('title').addEventListener('input', function() {

    let slug = this.value
        .toLowerCase()
        .replace(/[^a-z0-9\s-]/g,'')
        .replace(/\s+/g,'-');

    document.getElementById('slug').value = slug;
});
</script>

@endsection

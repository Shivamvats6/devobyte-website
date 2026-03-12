@extends('admin.layout.app')

@section('title','Blogs')
@section('page-title','Manage Blogs')

@section('content')

<div class="bg-white rounded-xl shadow p-6" data-aos="fade-up">

    {{-- HEADER --}}
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">
            All Blogs
        </h2>

        <a href="{{ route('admin.blogs.create') }}"
           class="bg-[#0D47A1] text-white px-5 py-2 rounded-lg shadow hover:scale-105 transition">
            + Add Blog
        </a>
    </div>


    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif


    {{-- TABLE --}}
    <div class="overflow-x-auto">

        <table class="w-full text-sm border rounded-lg overflow-hidden">

            {{-- TABLE HEAD --}}
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-3 text-left">Image</th>
                    <th class="p-3 text-left">Title</th>
                    <th class="p-3 text-left">Category</th>
                    <th class="p-3 text-left">Author</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Published</th>
                    <th class="p-3 text-left">Actions</th>
                </tr>
            </thead>


            {{-- TABLE BODY --}}
            <tbody>

            @forelse($blogs as $blog)

                <tr class="border-t hover:bg-gray-50 transition">

                    {{-- IMAGE --}}
                    <td class="p-3">
                        @if($blog->thumbnail)
                            <img src="{{ asset('storage/'.$blog->thumbnail) }}"
                                 class="w-16 h-12 object-cover rounded">
                        @else
                            <span class="text-gray-400 text-xs">
                                No Image
                            </span>
                        @endif
                    </td>


                    {{-- TITLE --}}
                    <td class="p-3 font-semibold text-gray-800 max-w-xs">
                        <div class="truncate">
                            {{ $blog->title }}
                        </div>
                    </td>


                    {{-- CATEGORY --}}
                    <td class="p-3">

                        @if($blog->category)
                            <span class="px-3 py-1 text-xs rounded-full
                                bg-blue-100 text-blue-700 font-semibold">
                                {{ $blog->category->name }}
                            </span>
                        @else
                            <span class="text-gray-400 text-xs">
                                No Category
                            </span>
                        @endif

                    </td>


                    {{-- AUTHOR --}}
                    <td class="p-3">
                        {{ $blog->author ?? 'Admin' }}
                    </td>


                    {{-- STATUS --}}
                    <td class="p-3">

                        <form action="{{ route('admin.blogs.toggle', $blog->id) }}"
                              method="POST">
                            @csrf
                            @method('PATCH')

                            <button type="submit"
                                class="px-3 py-1 rounded-full text-xs font-semibold transition
                                {{ $blog->is_active
                                    ? 'bg-green-100 text-green-700 hover:bg-green-200'
                                    : 'bg-red-100 text-red-600 hover:bg-red-200' }}">

                                {{ $blog->is_active ? 'Active' : 'Inactive' }}

                            </button>
                        </form>

                    </td>


                    {{-- PUBLISHED DATE --}}
                    <td class="p-3 text-gray-600">

                        @if($blog->published_at)
                            {{ $blog->published_at->format('d M Y') }}
                        @else
                            <span class="text-yellow-600 text-xs font-semibold">
                                Draft
                            </span>
                        @endif

                    </td>


                    {{-- ACTIONS --}}
                    <td class="p-3 flex gap-3">

                        {{-- EDIT --}}
                        <a href="{{ route('admin.blogs.edit',$blog->id) }}"
                           class="text-blue-600 hover:text-blue-800 text-lg transition">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        {{-- DELETE --}}
                        <form action="{{ route('admin.blogs.delete',$blog->id) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this blog?')">
                            @csrf
                            @method('DELETE')

                            <button class="text-red-600 hover:text-red-800 text-lg transition">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="7" class="text-center p-6 text-gray-500">
                        No blogs found
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>


    {{-- PAGINATION --}}
    <div class="mt-6">
        {{ $blogs->links() }}
    </div>

</div>

@endsection

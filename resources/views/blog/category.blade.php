@extends('layouts.app')

@section('title', $metaTitle)

@section('meta')
<meta name="description" content="{{ $metaDescription }}">
@endsection

@section('content')

<!-- HERO -->
<section class="relative h-[420px] flex items-center">

    <img src="{{ asset('assets/images/blog-service-banner.png') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 text-white">

        <h1 class="text-5xl font-bold">
            {{ $category->name }} Blogs
        </h1>

        <div class="flex gap-2 text-sm mt-3">
            <a href="{{ route('home') }}">Home</a>
            <span>›</span>
            <a href="{{ route('blog.index') }}">Blog</a>
            <span>›</span>
            <span>{{ $category->name }}</span>
        </div>

    </div>
</section>


<!-- BLOG LIST -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-6">

<div class="grid md:grid-cols-3 gap-10">

@forelse($blogs as $blog)

<div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

    <a href="{{ route('blog.show',$blog->slug) }}">

        <img src="{{ $blog->thumbnail
            ? asset('storage/'.$blog->thumbnail)
            : asset('assets/images/blogpost.png') }}"
             class="w-full h-52 object-cover">

    </a>

    <div class="p-6">

        <div class="text-xs text-blue-600 font-semibold mb-2">
            {{ $category->name }}
        </div>

        <h3 class="font-bold text-lg mb-2">
            <a href="{{ route('blog.show',$blog->slug) }}">
                {{ $blog->title }}
            </a>
        </h3>

        <p class="text-gray-500 text-sm mb-4">
            {{ Str::limit(strip_tags($blog->excerpt ?? $blog->content),120) }}
        </p>

        <a href="{{ route('blog.show',$blog->slug) }}"
           class="text-blue-600 font-semibold text-sm">
           Read More →
        </a>

    </div>

</div>

@empty

<p>No blogs found in this category.</p>

@endforelse

</div>


<!-- PAGINATION -->
<div class="mt-12">
    {{ $blogs->links() }}
</div>

</div>
</section>

@endsection

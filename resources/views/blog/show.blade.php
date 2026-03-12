@extends('layouts.app')

@section('title', ($blog->meta_title ?? $blog->title) . ' | Devobyte Blog')

@section('meta')
<meta name="description"
      content="{{ $blog->meta_description ?? ($blog->excerpt ?? Str::limit(strip_tags($blog->content),160)) }}">
<meta name="keywords" content="Devobyte Blog, Technology Blog, Digital Marketing">
@endsection


@section('content')

<!-- ================= HERO ================= -->
<section class="relative h-[520px] flex items-center">

    <img src="{{ asset('assets/images/blog-service-banner.png') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 text-white">

        <h1 class="text-6xl font-bold mb-4">
            Blog
        </h1>

        <div class="flex gap-2 text-sm">
            <a href="{{ route('home') }}">Home</a>
            <span>›</span>
            <a href="{{ route('blog.index') }}">Blog</a>

            @if($blog->category)
            <span>›</span>
            <a href="{{ route('blog.category',$blog->category->slug) }}">
                {{ $blog->category->name }}
            </a>
            @endif

            <span>›</span>
            <span>Article</span>
        </div>

    </div>

</section>



<!-- ================= MAIN ================= -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-6">

<div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">


<!-- ================= LEFT CONTENT ================= -->
<div class="md:col-span-8 space-y-6" data-aos="fade-up">

    <!-- CATEGORY BADGE -->
    @if($blog->category)
    <a href="{{ route('blog.category',$blog->category->slug) }}"
       class="inline-block bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full font-semibold">
       {{ $blog->category->name }}
    </a>
    @endif


    <!-- BLOG IMAGE -->
    <div class="relative rounded-2xl overflow-hidden">

        <img src="{{ $blog->thumbnail
            ? asset('storage/'.$blog->thumbnail)
            : asset('assets/images/blogpost.png') }}"
             class="w-full h-[360px] object-cover rounded-2xl"
             alt="{{ $blog->title }}">

        <div class="absolute bottom-5 right-5 bg-blue-600 text-white px-5 py-2 rounded-xl text-sm shadow">
            {{ $blog->published_at
                ? $blog->published_at->format('d M Y')
                : $blog->created_at->format('d M Y') }}
        </div>

    </div>


    <!-- META -->
    <div class="flex gap-6 text-gray-500 text-sm">

        <div class="flex items-center gap-2">
            <img src="{{ asset('assets/images/admin-icon.png') }}" class="w-4">
            By {{ $blog->author ?? 'Admin' }}
        </div>

        <div class="flex items-center gap-2">
            <img src="{{ asset('assets/images/comment-icon.png') }}" class="w-4">
            Devobyte Blog
        </div>

    </div>


    <!-- TITLE -->
    <h2 class="text-3xl font-bold leading-snug">
        {{ $blog->title }}
    </h2>


    <!-- CONTENT -->
    <div class="text-gray-600 leading-relaxed space-y-4">
        {!! $blog->content !!}
    </div>

</div>



<!-- ================= RIGHT SIDEBAR ================= -->
<aside class="md:col-span-4 space-y-8 sticky top-24" data-aos="fade-left">


<!-- ================= SEARCH ================= -->
<div class="bg-gray-100 p-6 rounded-xl">

    <form action="{{ route('blog.index') }}" method="GET">

        <div class="relative">

            <input type="text"
                   name="search"
                   placeholder="Search blogs..."
                   class="w-full pl-12 pr-4 py-3 rounded-lg border focus:ring-2 focus:ring-blue-500 outline-none bg-white">

            <!-- MODERN SEARCH ICON -->
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="absolute left-4 top-3.5 w-5 h-5 text-gray-400"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M21 21l-4.3-4.3m1.3-5.2a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>

        </div>

    </form>

</div>



<!-- ================= LATEST POSTS ================= -->
<div class="bg-white p-6 rounded-xl shadow">

<h3 class="font-bold text-lg mb-5">
Latest Post
</h3>

@forelse($latestBlogs ?? [] as $item)

<a href="{{ route('blog.show',$item->slug) }}"
   class="flex gap-4 mb-5 group">

    <img src="{{ $item->thumbnail
        ? asset('storage/'.$item->thumbnail)
        : asset('assets/images/blogpost.png') }}"
         class="w-16 h-16 object-cover rounded-lg">

    <div>

        <div class="text-xs text-gray-400">
            {{ $item->published_at
                ? $item->published_at->format('d M Y')
                : $item->created_at->format('d M Y') }}
        </div>

        <p class="font-semibold text-sm group-hover:text-blue-600">
            {{ $item->title }}
        </p>

    </div>

</a>

@empty
<p class="text-sm text-gray-400">No latest blogs</p>
@endforelse

</div>



<!-- ================= SERVICES ================= -->
<div class="bg-white p-6 rounded-xl shadow">

<h3 class="font-bold text-lg mb-5">
Our Services
</h3>

<ul class="space-y-3 text-gray-600 text-sm">
<li>› Website Development</li>
<li>› LinkedIn Marketing</li>
<li>› Lead Generation</li>
<li>› Influencer Marketing</li>
<li>› AI Chatbots</li>
</ul>

</div>

</aside>


</div>
</div>
</section>



<script>
AOS.init({
duration:900,
once:true
});
</script>

@endsection

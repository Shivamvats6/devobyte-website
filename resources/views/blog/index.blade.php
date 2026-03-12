@extends('layouts.app')

@section('title', 'Blog | Devobyte – Insights, Tips & Industry Updates')

@section('meta')
<meta name="description"
      content="Read Devobyte blogs for insights on technology, digital marketing, business growth, and innovation.">
<meta name="keywords"
      content="Devobyte Blog, Technology Blog, Digital Marketing Blog, Business Growth">
@endsection


@section('content')

<!-- ================= HERO ================= -->
<section class="relative min-h-[420px] flex items-center overflow-hidden">

    <img src="{{ asset('assets/images/blog-banner.png') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
        <h1 class="text-5xl font-extrabold text-white mb-4"
            style="font-family:'Montserrat Alternates', sans-serif;">
            Blog
        </h1>
    </div>

</section>



<!-- ================= BLOG LIST ================= -->
<section class="py-24 bg-white">
<div class="max-w-7xl mx-auto px-6">

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

@forelse($blogs as $index => $blog)

<!-- FULL CARD CLICKABLE -->
<a href="{{ route('blog.show',$blog->slug) }}"
   class="block group"
   data-aos="fade-up"
   data-aos-delay="{{ $index * 100 }}">

<article class="blog-card h-full">

    <!-- IMAGE -->
    <div class="blog-img relative">

        <img src="{{ $blog->thumbnail
            ? asset('storage/'.$blog->thumbnail)
            : asset('assets/images/blogpost.png') }}">

        <!-- CATEGORY BADGE -->
        @if($blog->category)
        <span class="absolute top-4 left-4 blog-tag">
            {{ $blog->category->name }}
        </span>
        @endif

    </div>


    <!-- CONTENT -->
    <div class="blog-content">

        <!-- META -->
        <div class="blog-meta">

            <span class="blog-date">
                {{ $blog->published_at
                    ? $blog->published_at->format('F d, Y')
                    : $blog->created_at->format('F d, Y') }}
            </span>

        </div>


        <!-- TITLE -->
        <h3 class="blog-title group-hover:text-blue-600 transition">
            {{ $blog->title }}
        </h3>


        <!-- FOOTER -->
        <div class="blog-footer">

            <div class="author">
                <img src="{{ asset('assets/images/author.png') }}">

                <div>
                    <span class="author-name">
                        {{ $blog->author ?? 'Admin' }}
                    </span>

                    <span class="author-role">
                        Devobyte Team
                    </span>
                </div>
            </div>

            <!-- ARROW BUTTON (Visual Only Now) -->
            <span class="arrow-btn group-hover:bg-blue-600 group-hover:text-white">
                →
            </span>

        </div>

    </div>

</article>
</a>

@empty
<p class="text-center text-gray-500 col-span-3">
No blogs available.
</p>
@endforelse

</div>


<!-- PAGINATION -->
<div class="mt-16">
{{ $blogs->links() }}
</div>

</div>
</section>



{{-- ================= STYLES ================= --}}
<style>

.blog-card {
background:#fff;
border-radius:18px;
box-shadow:0 14px 35px rgba(0,0,0,0.08);
overflow:hidden;
transition:.35s;
height:100%;
}

.blog-card:hover {
transform:translateY(-10px);
box-shadow:0 25px 55px rgba(0,0,0,0.15);
}

.blog-img img {
width:100%;
height:230px;
object-fit:cover;
}

.blog-content {
padding:22px;
}

.blog-meta {
display:flex;
gap:10px;
margin-bottom:10px;
}

.blog-tag {
font-size:12px;
font-weight:600;
color:#2563EB;
background:#EFF6FF;
padding:4px 10px;
border-radius:999px;
}

.blog-date {
font-size:12px;
color:#6B7280;
}

.blog-title {
font-size:18px;
font-weight:700;
color:#0A0F2C;
line-height:1.4;
margin-bottom:18px;
transition:.3s;
}

.blog-footer {
display:flex;
justify-content:space-between;
align-items:center;
}

.author {
display:flex;
gap:10px;
align-items:center;
}

.author img {
width:42px;
height:42px;
border-radius:50%;
}

.arrow-btn {
width:42px;
height:42px;
border-radius:10px;
background:#fff;
border:1px solid #E5E7EB;
display:flex;
align-items:center;
justify-content:center;
font-size:20px;
color:#2563EB;
transition:.3s;
}

.arrow-btn:hover {
transform:scale(1.1);
}

</style>



<script>
AOS.init({
duration:900,
once:true,
offset:120
});
</script>

@endsection

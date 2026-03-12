<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogPageController extends Controller
{
    /**
     * ===============================
     * BLOG LISTING PAGE
     * ===============================
     */
    public function index()
    {
        $blogs = Blog::where('is_active', 1)
            ->latest()
            ->paginate(9);

        return view('blog.index', compact('blogs'));
    }

    /**
     * ===============================
     * BLOG DETAIL PAGE (Slug Based)
     * ===============================
     */
    public function show($slug)
    {
        /*
        --------------------------------
        MAIN BLOG
        --------------------------------
        */
        $blog = Blog::where('slug', $slug)
            ->where('is_active', 1)
            ->firstOrFail();


        /*
        --------------------------------
        LATEST BLOGS (Sidebar)
        --------------------------------
        */
        $latestBlogs = Blog::where('is_active', 1)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(5)
            ->get();


        /*
        --------------------------------
        RELATED BLOGS (Future Use)
        --------------------------------
        */
        $relatedBlogs = Blog::where('is_active', 1)
            ->where('id', '!=', $blog->id)
            ->inRandomOrder()
            ->take(3)
            ->get();


        /*
        --------------------------------
        RETURN VIEW
        --------------------------------
        */
        return view('blog.show', compact(
            'blog',
            'latestBlogs',
            'relatedBlogs'
        ));
    }
}

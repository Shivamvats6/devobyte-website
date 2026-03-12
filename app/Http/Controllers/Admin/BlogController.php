<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | BLOG LIST
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $blogs = Blog::with('category')
            ->latest()
            ->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }



    /*
    |--------------------------------------------------------------------------
    | CREATE FORM
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        // 🔥 IMPORTANT → remove is_active filter for debug if needed
        $categories = BlogCategory::orderBy('name')->get();

        return view('admin.blogs.create', compact('categories'));
    }



    /*
    |--------------------------------------------------------------------------
    | STORE BLOG
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'thumbnail'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'excerpt'          => 'nullable|string|max:500',
            'content'          => 'required|string',
            'author'           => 'nullable|string|max:100',
            'published_at'     => 'nullable|date',
            'blog_category_id' => 'nullable|exists:blog_categories,id',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG GENERATION
        |--------------------------------------------------------------------------
        */
        $slug = Str::slug($request->title);

        if (Blog::where('slug', $slug)->exists()) {
            $slug .= '-' . time();
        }


        /*
        |--------------------------------------------------------------------------
        | IMAGE UPLOAD
        |--------------------------------------------------------------------------
        */
        $thumbnailPath = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')
                ->store('blogs', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | SAVE BLOG
        |--------------------------------------------------------------------------
        */
        Blog::create([
            'title'            => $request->title,
            'slug'             => $slug,
            'thumbnail'        => $thumbnailPath,
            'excerpt'          => $request->excerpt,
            'content'          => $request->content,
            'author'           => $request->author ?? 'Admin',
            'is_active'        => $request->has('is_active'),
            'published_at'     => $request->published_at,
            'blog_category_id' => $request->blog_category_id,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog created successfully');
    }



    /*
    |--------------------------------------------------------------------------
    | EDIT FORM
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        $categories = BlogCategory::orderBy('name')->get();

        return view('admin.blogs.edit', compact('blog','categories'));
    }



    /*
    |--------------------------------------------------------------------------
    | UPDATE BLOG
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title'            => 'required|string|max:255',
            'thumbnail'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'excerpt'          => 'nullable|string|max:500',
            'content'          => 'required|string',
            'author'           => 'nullable|string|max:100',
            'published_at'     => 'nullable|date',
            'blog_category_id' => 'nullable|exists:blog_categories,id',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);


        /*
        |--------------------------------------------------------------------------
        | SLUG UPDATE IF TITLE CHANGED
        |--------------------------------------------------------------------------
        */
        $slug = $blog->slug;

        if ($blog->title !== $request->title) {

            $slug = Str::slug($request->title);

            if (Blog::where('slug', $slug)
                ->where('id','!=',$blog->id)
                ->exists()) {

                $slug .= '-' . time();
            }
        }


        /*
        |--------------------------------------------------------------------------
        | IMAGE UPDATE
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('thumbnail')) {

            if ($blog->thumbnail) {
                Storage::disk('public')->delete($blog->thumbnail);
            }

            $blog->thumbnail = $request->file('thumbnail')
                ->store('blogs', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE BLOG
        |--------------------------------------------------------------------------
        */
        $blog->update([
            'title'            => $request->title,
            'slug'             => $slug,
            'excerpt'          => $request->excerpt,
            'content'          => $request->content,
            'author'           => $request->author ?? 'Admin',
            'is_active'        => $request->has('is_active'),
            'published_at'     => $request->published_at,
            'blog_category_id' => $request->blog_category_id,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog updated successfully');
    }



    /*
    |--------------------------------------------------------------------------
    | DELETE BLOG
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->thumbnail) {
            Storage::disk('public')->delete($blog->thumbnail);
        }

        $blog->delete();

        return back()->with('success','Blog deleted successfully');
    }



    /*
    |--------------------------------------------------------------------------
    | TOGGLE STATUS
    |--------------------------------------------------------------------------
    */
    public function toggleStatus($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->update([
            'is_active' => !$blog->is_active
        ]);

        return back();
    }

}

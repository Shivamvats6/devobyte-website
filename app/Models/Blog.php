<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /*
    |--------------------------------------------------------------------------
    | FILLABLE
    |--------------------------------------------------------------------------
    */
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'excerpt',
        'content',
        'author',
        'is_active',
        'published_at',
        'meta_title',
        'meta_description',
        'blog_category_id' // ✅ Category FK Added
    ];


    /*
    |--------------------------------------------------------------------------
    | CASTS
    |--------------------------------------------------------------------------
    */
    protected $casts = [
        'published_at' => 'datetime',
        'is_active' => 'boolean',
    ];


    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Blog Belongs To Category
     */
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /**
     * Active Blogs Scope
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }


    /*
    |--------------------------------------------------------------------------
    | ROUTE MODEL BINDING (SEO Friendly)
    |--------------------------------------------------------------------------
    */

    /**
     * Use slug instead of ID in routes (Future Ready)
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

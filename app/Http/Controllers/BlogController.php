<?php

namespace App\Http\Controllers;

use App\Models\Blog; // Make sure to import your Blog model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    /**
     * Display the specified blog post.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show(Blog $blog)
    {
        // The framework automatically fetches the blog post based on the route wildcard.
        // It returns a 404 if not found.
        // Fetch the last 4 latest blogs
        $latestBlogs = Blog::get();
        
        return view('pages.blogs.blogs_details', compact('blog', 'latestBlogs'));
    }
}

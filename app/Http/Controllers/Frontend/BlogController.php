<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['media'])->orderBy('id', 'desc')->paginate(8);

        $categories = Category::all();

        return view('frontend.blogs', compact('blogs', 'categories'));
    }

    public function show($slug)
    {
        $blog = Blog::with(['media'])->where('slug', $slug)->firstOrFail();
        $recentBlogs = Blog::with(['media'])->where('id', '!=', $blog->id)->orderBy('id', 'desc')->take(4)->get();
        
        return view('frontend.blogs-details', compact('blog', 'recentBlogs'));
    }
}

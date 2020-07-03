<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $blogs = collect();
        if ($categories->first()) {
            $blogs = Blog::where('category_id', $categories->first()->id)->where('status', true)->get();
        }
        $hotBlogs = Blog::where('status', true)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.blog', compact('blogs', 'categories', 'hotBlogs'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $blogs = Blog::where('category_id', $id)->where('status', true)->get();
        $hotBlogs = Blog::where('status', true)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.blog', compact('blogs', 'categories', 'hotBlogs'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
            ->where('status', true)
            ->orderBy('id', 'DESC')
            ->take(4)
            ->get();
        $categories = Category::all();
        $hotBlogs = Blog::where('status', true)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.detail', compact('blog', 'relatedBlogs', 'categories', 'hotBlogs'));
    }

    public function knowledge()
    {
        $categories = Category::all();
        $hotBlogs = Blog::where('status', true)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.knowledge_info', compact('categories', 'hotBlogs'));
    }
}

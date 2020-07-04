<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    const BLOG = 0;
    const BAI_VIET = 1;
    public function index()
    {
        $categories = Category::where('type',self::BLOG)->orderBy('id', 'DESC')->get();
        $blogs = collect();
        if ($categories->first()) {
            $blogs = Blog::where('category_id', $categories->first()->id)->where('status', true)->get();
        }
        $hotBlogs = Blog::where('status', true)->where('type', self::BLOG)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.blog', compact('blogs', 'categories', 'hotBlogs'));
    }

    public function category($id)
    {
        $categories = Category::where('type',self::BLOG)->orderBy('id', 'DESC')->get();
        $blogs = Blog::where('category_id', $id)->where('status', true)->get();
        $hotBlogs = Blog::where('status', true)->where('type', self::BLOG)->orderBy('id', 'DESC')->take(8)->get();

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
        $categories = Category::where('type',self::BLOG)->orderBy('id', 'DESC')->get();
        $hotBlogs = Blog::where('status', true)->where('type', self::BLOG)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.detail', compact('blog', 'relatedBlogs', 'categories', 'hotBlogs'));
    }

    public function knowledge()
    {
        $categories = Category::where('type',self::BLOG)->orderBy('id', 'DESC')->get();
        $hotBlogs = Blog::where('status', true)->where('type', self::BLOG)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.knowledge_info', compact('categories', 'hotBlogs'));
    }

    public function power()
    {
        $categories = Category::where('type',self::BLOG)->orderBy('id', 'DESC')->get();
        $hotBlogs = Blog::where('status', true)->where('type', self::BLOG)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.knowledge_power', compact('categories', 'hotBlogs'));
    }

    public function event()
    {
        $categories = Category::where('type',self::BAI_VIET)->orderBy('id', 'DESC')->get();
        $blogs = collect();
        if ($categories->first()) {
            $blogs = Blog::where('category_id', $categories->first()->id)->where('status', true)->get();
        }
        $hotBlogs = Blog::where('status', true)->where('type', self::BAI_VIET)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.blog', compact('blogs', 'categories', 'hotBlogs'));
    }

    public function main()
    {
        $firstBlogs = Blog::where('status', true)->orderBy('id', 'DESC')->take(3)->get();
        $otherBlogs = Blog::where('status', true)->orderBy('id', 'DESC')->skip(3)->take(6)->get();

        return view('front.index', compact('firstBlogs', 'otherBlogs'));
    }
}

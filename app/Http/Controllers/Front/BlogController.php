<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Question;
use App\Models\Result;
use App\Models\UserExam;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class BlogController extends Controller
{
    const BLOG = 0;
    const BAI_VIET = 1;
    public function index(Request $request)
    {
        $blogs = Blog::where('status', true)->where('type', self::BLOG)->orderBy('id', 'DESC')->get();
        $hotBlogs = Blog::where('status', true)->where('type', self::BLOG)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.blog', compact('blogs', 'hotBlogs'));
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
        try {
            Cookie::queue('blog_id', $id, 60);
            $blog = Blog::find($id);
            $relatedBlogs = Blog::where('category_id', $blog->category_id)
                ->where('status', true)
                ->orderBy('id', 'DESC')
                ->take(4)
                ->get();
            $categories = Category::where('type',self::BLOG)->orderBy('id', 'DESC')->get();
            $hotBlogs = Blog::where('status', true)->where('type', self::BLOG)->orderBy('id', 'DESC')->take(8)->get();

            return view('front.detail', compact('blog', 'relatedBlogs', 'categories', 'hotBlogs'));
        } catch (\Exception $exception) {
            throw $exception;
        }

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

    public function saveComment(Request $request)
    {
        Comment::create([
            'content' => $request->des,
            'blog_id' => $request->blog_id,
            'user_id' => Auth::user()->id
        ]);

        return true;
    }

    public function quiz()
    {
        $questions = Question::all();

        return view('front.quiz', compact('questions'));
    }

    public function storeQuiz(ExamRequest $request)
    {
        $total = array_sum($request->answer);
        UserExam::create([
            'name' => $request->name_customer,
            'job' => $request->job_customer,
            'email' => $request->email_customer,
            'point' => $total
        ]);

        $result = Result::where('under', '<=', $total)->where('upper', '>=', $total)->first();

        return view('front.total', compact('result', 'total'));
    }

    public function detailQuiz()
    {
        $questions = Question::all();

        return view('front.quiz_detail', compact('questions'));
    }
}

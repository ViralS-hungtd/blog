<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Validator,Redirect,Response,File;
use Laravel\Socialite\Facades\Socialite;
use App\User;
class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback(Request $request, $provider)
    {
        $request->session()->put('state', $state = $request->state);
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo,$provider);
        auth()->login($user);
        $blogId = Cookie::get('blog_id') ?? Category::orderBy('id', 'DESC')->first()->id;
        Cookie::queue('blog_id', $blogId, 60);
        $blog = Blog::find($blogId);
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
            ->where('status', true)
            ->orderBy('id', 'DESC')
            ->take(4)
            ->get();
        $categories = Category::where('type',0)->orderBy('id', 'DESC')->get();
        $hotBlogs = Blog::where('status', true)->where('type', 0)->orderBy('id', 'DESC')->take(8)->get();

        return view('front.detail', compact('blog', 'relatedBlogs', 'categories', 'hotBlogs'));
    }
    function createUser($getInfo,$provider){
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'password' => bcrypt(rand(1, 9999999999)),
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}

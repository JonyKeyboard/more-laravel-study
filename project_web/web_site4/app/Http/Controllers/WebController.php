<?php

namespace App\Http\Controllers;

use App\Models\Post;

class WebController extends Controller
{
    public function home()
    {

        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        // dd($posts);

        return view('front.home', [
            'posts' => $posts
        ]);
    }

    public function course()
    {
        return view('front.course');
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('front.blog', [
            'posts' => $posts
        ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        return view('front.article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('front.contact');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;

class WebController extends Controller
{
    public function home(){

        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        // dd($posts);

        return view('front.home', [
            'posts' => $posts
        ]);
    }

    public function course(){
        return view('front.course');
    }

    public function blog(){
        return view('front.blog');
    }

    public function contact(){
        return view('front.contact');
    }
}

<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function home(){
        return view('front.home');
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

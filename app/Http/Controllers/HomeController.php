<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['metaTitle' => 'Home']);
    }

    public function rooms()
    {
        return view('rooms', ['metaTitle' =>'Rooms']);
    }
    public function about()
    {
        return view('about', ['metaTitle' => 'About']);
    }

    public function contact()
    {
        return view('contact', ['metaTitle' => 'Contact']);
    }

    public function elements()
    {
        return view('elements', ['metaTitle' => 'Room list']);
    }
    public function singleList()
    {
        return view('singleList', ['metaTitle' => 'Maxsus Ro\'yxat']);
    }
    public function blog()
    {
        return view('blog', ['metaTitle' => 'About Rooms']);
    }
    public function singleBlog()
    {
        return view('singleBlog', ['metaTitle' => 'Room Commits']);
    }
}

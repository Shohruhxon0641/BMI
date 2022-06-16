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
        return view('home', ['metaTitle' => 'Asosiy sahifa']);
    }
    public function rooms()
    {
        return view('rooms', ['metaTitle' =>'Xonalar']);
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
        return view('elements', ['metaTitle' => 'Elementlar']);
    }
    public function singleList()
    {
        return view('singleList', ['metaTitle' => 'Maxsus Ro\'yxat']);
    }
    public function blog()
    {
        return view('blog', ['metaTitle' => 'Xona haqida']);
    }
    public function singleBlog()
    {
        return view('singleBlog', ['metaTitle' => 'Fikrlar']);
    }
}

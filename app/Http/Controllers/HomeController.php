<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Commit;
use App\Models\BronRoom;

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
        $rooms = Room::orderByDesc('created_at')->paginate(6);
        // dd($rooms);
        return view('welcome', [
            'metaTitle' => 'Asosiy sahifa',
            'rooms' => $rooms
        ]);
    }
    public function rooms()
    {
        $rooms = Room::orderByDesc('created_at')->paginate(10);
        return view('rooms', [
            'metaTitle' =>'Xonalar',
            'rooms' =>$rooms
        ]);
    }
    public function about()
    {
        return view('about', ['metaTitle' => 'About']);
    }
    public function contact()
    {
        return view('contact', ['metaTitle' => 'Contact']);
    }

    public function blog()
    {
        return view('blog', ['metaTitle' => 'Xona haqida']);
    }
    public function singleBlog($id)
    {
        $room = Room::findOrFail($id);

        return view('singleBlog', [
            'metaTitle' => 'Fikrlar',
            'room' => $room
        ]);
    }
}

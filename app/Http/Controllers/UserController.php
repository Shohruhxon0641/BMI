<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Commit;
use App\Models\BronRoom;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $companies = Company::orderByDesc('created_at')->paginate(20);
        $rooms = Room::orderByDesc('created_at')->paginate(10);

        return view('users.index',[
            'metaTitle' => "User xonalar ro'yhati",
            'rooms' => $rooms
        ]);

        // dd($rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', [
            'metaTitle' => "Xona qo'shish"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = $request->All();

        $fileUpload = $request->file('image');
        if($request -> has('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $fileUpload->getClientOriginalExtension();
            $fileUpload->move($destinationPath, $profileImage);
            $room['image'] = "/"."$destinationPath"."$profileImage";
        }


        Room::create($room);

        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
        // return view('users.show', compact('id'));
        return view('users.show', [
            'room' => $room
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('users.edit', [
            'room' => $room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = $request->All();

        $fileUpload = $request->file('image');
        if($request -> has('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $fileUpload->getClientOriginalName();
            $fileUpload->move($destinationPath, $profileImage);
            $room['image'] = "$profileImage";
        } else {
            unset($room['image']);
        }


        $id->update($room);
        // Room::update($room);
        // $room->save;

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();

        return redirect()->route('users.index');
    }
}

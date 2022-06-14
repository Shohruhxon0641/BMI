<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

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
        $rooms = Room::orderByDesc('created_at')->paginate(20);

        return view('users.index',[
            'metaTitle' => 'Users Room List',
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
            'metaTitle' => 'Room create'
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
        // dd($request->All());

        $room = new Room;

        $room->user_id = 0;
        $room->bino_name = $request['bino_name'];
        $room->turi = $request['tur'];
        $room->urindiq_son = $request['u_son'];
        $room->narx = $request['narx'];
        $room->viloyat = $request['viloyat'];
        $room->address = $request['address'];
        $room->phone_number = $request['phoneNumber'];
        $room->email = $request['email'];
        $room->cofe_tea = $request['cofe']? true : false;
        $room->sovutish = $request['sovutish'] ? true : false;
        $room->wi_fi = $request['wi_fi']? true : false;
        $room->hojatxona = $request['hojathona']? true : false;
        $room->proyektr = $request['proyektr']? true : false;
        $room->ovoz_kuch = $request['o_kuch']? true : false;
        $room->kompyuter = $request['computer']? true : false;
        $room->ovqatlanish = $request['ovqat']? true : false;
        $room->image = $request['image'];
        $room->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

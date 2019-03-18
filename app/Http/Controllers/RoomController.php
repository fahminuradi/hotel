<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms = Room::all();
        return view('/room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room = new Room();
        return view('/room.create', compact('room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the form
         $request->validate([
            'nomor' => 'required',
            'lantai' => 'required',
            'kelas' => 'required',
            'kasur' => 'required',
        ]);

        // Store into Database
        // Check if there is any file
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move("rooms", $image->getClientOriginalName());
        }

        // Store into Database
        Room::create([
            'nomor' => $request->nomor,
            'lantai' => $request->lantai,
            'kelas' => $request->kelas,
            'kasur' => $request->kasur,
            'harga' => $request->harga,
            'image' => $request->image->getClientOriginalName()
        ]);

        // Stored a Message in session
        $request->session()->flash('msg', 'Kamar berhasil ditambahkan');

        // Redirect back to Clients
        return redirect('/room');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        $room = Room::find($room->id);
        return view('room.detail', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $room = Room::find($id);
        return view('room.edit', compact('room'));
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
        $request->validate([
            'nomor' => 'required',
            'lantai' => 'required',
            'kelas' => 'required',
            'kasur' => 'required',
        ]);

         // Check if there is any file
         if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move("rooms", $image->getClientOriginalName());
        }

        $room = Room::find($id);
        $room->update($request->all());
        $request->session()->flash('msg', 'kamar berhasil diubah');
        return redirect('/room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::destroy($id);
        request()->session()->flash('msg', 'Kamar berhasil dihapus');
        return redirect('room');
    }
}

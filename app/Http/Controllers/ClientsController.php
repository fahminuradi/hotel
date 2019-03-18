<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
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
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('clients.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ktp' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
           
        ]);
        Client::create([
            'nama' => $request->nama,
            'ktp'=> $request->ktp,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);
            $request->session()->flash('msg', 'Client Telah ditambahkan');
            return redirect('/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        $bookings = Booking::where('client_id', $id)->get()->all();
        return view('clients.detail', compact('client', 'bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
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

        // Updating Clients
        $client->update([
            'name' => $request->name,
            'ktp' => $request->ktp,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // Store a message in session
        request()->session()->flash('msg', 'Client telah diubah');

        // Redirect to Clients
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        request()->session()->flash('msg', 'client dihapus');
        return redirect('clients');
    }
}

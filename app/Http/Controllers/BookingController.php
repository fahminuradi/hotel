<?php

namespace App\Http\Controllers;

use App\Booking;
use App\CanceledBooking;
use App\Client;
use App\Room;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = new Booking();
        $clients = Client::all();
        $rooms = Room::where('status',1)->get();
        return view('bookings.create', compact('clients', 'rooms', 'booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // form validasi
        $request->validate([
        'client_id' => 'required',
        'room_id' => 'required',
        'checkin' => 'required',
        'checkout' => 'required',
        ]);
        
        // simpan ke database
        Booking::create([
            'client_id' => $request->client_id,
            'room_id' => $request->room_id,
            'user_id' => auth()->user()->id,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
        ]);

        // ubahh status kamar
        $room = Room::find($request->room_id);
        $room->status = 0;
        $room->save();

        session()->flash('msg', 'kamar telah di booking');

        return redirect('/booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('bookings.detail', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $booking = Booking::find($booking->id);
        $rooms = Room::all();
        $clients = Client::all();
        return view('bookings.edit', compact('booking', 'clients', 'rooms'));
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
        $booking = Booking::find($id);
        $booking->update($request->all());
        $request->session()->flash('msg', 'data telah diubah telah di ubah');
        return redirect('bookings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // untuk menghapus data
    public function destroy($id)
    {
        Booking::destroy($booking->id);
        $request->session()->flash('msg', 'Booking has been deleted');
        return redirect('booking');
    }
    // untuk mengcancel booking
    public function cancel($room_id, $booking_id) {
        $booking = Booking::find($booking_id);
        $room = Room::find($room_id);
        $booking->status = 0;
        $booking->user_id = auth()->id();
        $booking->save();
        $room->status = 1;
        $room->save();
        session()->flash('msg','Booking has been canceled');
        return redirect('/booking');
    }
    public function canceledBookings() {
        $canceledBookings = Booking::where('status', 0)->get();
        return view('bookings.canceled', compact('canceledBookings'));
    }
    public function prnpriview()
      {
            $booking = Booking::all();
            return view('bookings.detail', compact('booking'))->with('booking', $booking);;
      }
}
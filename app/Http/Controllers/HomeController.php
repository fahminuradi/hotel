<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Dashboard;
use App\Room;
use Carbon\carbon;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client = new Client();
        $room = new Room();
        $booking  = new Booking();
        return view('home', compact('client','room','booking'));
    }
}

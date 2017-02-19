<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Room;
use App\RoomType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function showRoom($id)
    {
        return view('room');
    }

    public function reservation()
    {
        $rooms = Room::all();

        return view('reservation', compact('rooms'));
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function search(Request $request)
    {
        $reservations = Reservation::where('arrival_date', '<=', $request->get('departure_date'))
            ->where('departure_date', '>=', $request->get('arrival_date'))
            ->pluck('room_id');
        $rooms = Room::with('roomType')->whereNotIn('_id', $reservations)->get();

        return view('reservation', compact('rooms'));
    }
}

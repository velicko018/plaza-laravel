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
        $rooms = Room::paginate(15);

        return view('rooms', compact('rooms'));
    }

    public function showRoom($id)
    {
        $room = Room::find($id);

        return view('room', compact('room'));
    }

    public function reservationPost(Request $request)
    {
        $this->validate($request, [
            'number_of_guests' => 'required',
            'arrival_date' => 'required',
            'departure_date' => 'required',
            'room_id' => 'required'
        ]);

        $request->merge([ 'status' => 1]);

        $reservation = Reservation::create($request->all());

        Auth::user()->reservations()->associate($reservation);
        Auth::user()->save();

        $reservation->user()->associate(Auth::user());
        $reservation->save();

        $room = Room::find($request->get('room_id'));
        $room->reservations()->associate($reservation);
        $room->save();

        $reservation->room()->associate($room);
        $reservation->save();

        return response()->json(200);
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
        $options = [
            'arrival_date' => $request->get('arrival_date'),
            'departure_date' => $request->get('departure_date'),
            'number_of_guests' => $request->get('number_of_guests')
        ];

        return view('reservation', compact('rooms', 'options'));
    }

}

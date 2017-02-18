<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::paginate(15);

        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::pluck('number', '_id');

        return view('admin.reservations.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $reservation = Reservation::create($request->all());

        $room = Room::find($request->get('room_id'));
        $room->reservations()->associate($reservation);
        $room->save();

        $reservation->room()->associate($room);
        $reservation->save();

        return redirect()->route('admin.reservations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $rooms = Room::pluck('number', '_id');

        return view('admin.reservations.edit', compact('reservation', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $this->validate($request, $this->rules);
        DB::collection('reservations')->where('_id', $reservation->id)
            ->update($request->all(), ['upsert' => true]);
        //zavrsi ovo
        return redirect()->route('admin.reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        Reservation::destroy($reservation->id);

        return response()->json('success', 200);
    }

    private $rules = [
        'number_of_guests' => 'required',
        'arrival_date' => 'required',
        'departure_date' => 'required',
        'status' => 'required',
        'room_id' => 'required'
    ];
}

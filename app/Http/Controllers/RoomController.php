<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomMetas;
use App\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::paginate(10);

        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomTypes = RoomType::pluck('name', '_id');

        return view('admin.rooms.create', compact('roomTypes'));
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
        $room = Room::create($request->all());

        $roomMetas = RoomMetas::create([
            'breakfast' => $request->has('breakfast') ? 1 : 0,
            'air_condition' => $request->has('air_condition') ? 1 : 0,
            'free_parking' => $request->has('free_parking') ? 1 : 0,
            'room_service' => $request->has('room_service') ? 1 : 0,
            'gym' => $request->has('gym') ? 1 : 0,
            'tv' => $request->has('tv') ? 1 : 0,
            'wi-fi' => $request->has('wi-fi') ? 1 : 0,
            'elevator' => $request->has('elevator') ? 1 : 0
        ]);

        $roomType = RoomType::find($request->get('room_type_id'));

        $room->roomType()->associate($roomType);
        $room->metas()->associate($roomMetas);
        $room->save();

        $roomType->rooms()->associate($room);
        $roomType->save();

        return redirect()->route('admin.rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $roomTypes = RoomType::pluck('name', '_id');
        $roomMetas = $room->metas;

        return view('admin.rooms.edit', compact('room', 'roomTypes', 'roomMetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $this->validate($request, $this->rules);
        DB::collection('rooms')->where('_id', $room->id)
            ->update($request->all(), ['upsert' => true]);

        $roomMetas = new RoomMetas([
            'breakfast' => $request->has('breakfast') ? 1 : 0,
            'air_condition' => $request->has('air_condition') ? 1 : 0,
            'free_parking' => $request->has('free_parking') ? 1 : 0,
            'room_service' => $request->has('room_service') ? 1 : 0,
            'gym' => $request->has('gym') ? 1 : 0,
            'tv' => $request->has('tv') ? 1 : 0,
            'wi-fi' => $request->has('wi-fi') ? 1 : 0,
            'elevator' => $request->has('elevator') ? 1 : 0
        ]);
        $room->metas()->associate($roomMetas);
        $room->save();

        return redirect()->route('admin.rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        Room::destroy($room->id);

        return response()->json('success', 200);
    }

    private $rules = [
        'number' => 'required|integer',
        'floor' => 'required|integer',
        'room_type_id' => 'required'
    ];
}

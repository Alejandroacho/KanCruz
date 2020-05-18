<?php

namespace App\Http\Controllers;

use App\Room;
use App\Booking;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms=Room::all();
        return view('room.index',['rooms'=>$rooms]);
    }

    public function create()
    {
        return view ('room.create');
    }

    public function store(Request $request)
    {
        Room::create($request->all());
        return redirect(route('room.index'));
    }


    public function show(Room $room)
    {
        $bookings = Booking::all();
        return view('room.show', compact ('bookings','room'));
    }

    public function edit(Room $room)
    {
        return view('room.edit',['room'=>$room]);
    }

    public function update(Request $request, Room $room)
    {
        $room->update($request->all());
        return redirect (route('room.index'));
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect (route('room.index'))->with('success', 'Habitación eliminada satisfactoriamente');;
    }
}

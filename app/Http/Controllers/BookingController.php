<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Room;
use App\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $bookings = Booking::all();
        return view ('booking.index', compact('bookings', 'rooms'));
    }

    public function create()
    {    
        $rooms = Room::all();
        return view('booking.create', compact('rooms'))->with('success', 'Reserva creada satisfactoriamente');
    }

    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect (route('booking.index'));
    }

    public function show(Booking $booking)
    {   
        $user = User::all();
        return view('booking.show', compact ('booking', 'user'));

    }

    public function edit(Booking $booking)
    {   
        $rooms = Room::all();
        return view('booking.edit', compact('booking', 'rooms'));

    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect(route('booking.index'))->with('success', 'Reserva medificada satisfactoriamente');

    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect(route('booking.index'))->with('success', 'Reserva eliminada satisfactoriamente');

    }

}

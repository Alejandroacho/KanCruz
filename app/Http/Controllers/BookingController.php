<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view ('booking.index', compact('bookings'));
    }

    public function create()
    {
        return view('booking.create')->with('success', 'Reserva creada satisfactoriamente');
        ;
    }

    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect (route('booking.index'));
    }

    public function show(Booking $booking)
    {
        return view('booking.show', compact ('booking'));

    }

    public function edit(Booking $booking)
    {   
        return view('booking.edit', compact('booking'));

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

<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Room;
use App\Booking;


use Illuminate\Http\Request;

class PanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth()->User();
        return view('panel.index', compact('user'));
    }

    public function view_users()
    {
        // Controle de URL
        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('panel.users.index', compact('user', 'uriActual'));
    }

    public function view_room()
    {
        $rooms=Room::all();

        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('room.index', compact('user', 'uriActual', 'rooms'));
    }

    public function view_booking()
    {
        $bookings= Booking::all();

        $user = Auth()->User();

        $uri = $this->request->route()->uri();

        $exploder = explode('/', $uri);

        $uriActual = $exploder[1];
        return view('booking.index', compact('user', 'uriActual', 'bookings'));
    }

}

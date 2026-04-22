<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        Booking::create([
            'nama_client' => $request->nama_client,
            'kampus' => $request->kampus,
            'tanggal' => $request->tanggal,
            'paket' => $request->paket,
            'no_hp' => $request->no_hp,
            'lokasi_foto' => $request->lokasi_foto,
        ]);

        return redirect()->route('booking.index');
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update([
            'nama_client' => $request->nama_client,
            'kampus' => $request->kampus,
            'tanggal' => $request->tanggal,
            'paket' => $request->paket,
            'no_hp' => $request->no_hp,
            'lokasi_foto' => $request->lokasi_foto,
        ]);

        return redirect()->route('booking.index');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('booking.index');
    }
}
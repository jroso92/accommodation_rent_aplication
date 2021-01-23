<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Accommodation;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with(['accommodation'])->paginate();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'reserved_at' => 'required|date',
            'reserved_until' => 'required|date',
            'adult_no' => 'required|numeric',
            'child_no' => 'required|numeric',
            'price' => 'required|numeric',
            'accommodation_id' => 'required|numeric'
        ]);
        $booking = Booking::create($validated);
        return view('bookings.show', compact('booking'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);

        $accommodations = Accommodation::pluck('name', 'id');
        return view('bookings.edit', compact('booking', 'accommodations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'reserved_at' => 'required|date',
            'reserved_until' => 'required|date',
            'adult_no' => 'required|numeric',
            'child_no' => 'required|numeric',
            'price' => 'required|numeric',
            'accommodation_id' => 'required|numeric'
        ]);
        $booking = Booking::findOrFail($id);
        $booking->fill($validated);
        $booking->save();

        return view('bookings.show', compact('booking'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);

        return redirect()->route('bookings.index');
    }
}

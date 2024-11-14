<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('booking.index',['bookings' => Booking::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "guest" => ['required','string'],
            "picture" => ['required','string'],
            "order_date" => ['required','date'],
            "check_in" => ['required','date'],
            "check_out" =>['required','date'],
            "decimal" => ['required','numeric'],
            "notes" => ['required','array'],
            "status" => ['required','string'],
            "room_id" => ['required',]
        ]);
        
        Booking::create([
            'guest' => $request->input('guest'),
            'picture' => $request->input('picture'),
            'order_date' => $request->input('order_date'),
            'check_in' => $request->input('check_in'),
            'check_out' => $request->input('check_out'),
            'discount' => $request->input('discount'),
            'notes' => json_encode($request->input('notes')), 
            'status' => $request->input('status'),
            'room_id' => $request->room()->id, 
        ]);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}

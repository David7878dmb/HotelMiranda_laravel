<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

    class RoomController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            return view("room.index", ['rooms' => Room::all()]);
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("room.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_type' => ['required', 'string'],
            'number' => ['required', 'numeric'],
            'bed_type' => ['required', 'string'],
            'room_floor' => ['required', 'string'],
            'status' => ['required', 'string'],
            'rate' => ['required', 'numeric'],
            'discount' => ['required', 'numeric']
        ]);
        
        Room::create([
            'room_type' => $request->input('room_type'),
            'number' => $request->input('number'),
            'bed_type' => $request->input('bed_type'),
            'room_floor' => $request->input('room_floor'),
            'status' => $request->input('status'),
            'rate' => $request->input('rate'),
            'discount' => $request->input('discount'),
            'picture' => 'asdasdasd',
            'facilities' => json_encode(['WIFI'])
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}

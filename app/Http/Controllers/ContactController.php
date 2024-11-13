<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("contact.index",['contacts' => Contact::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("contact.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => ['required', 'string'],
            "phone" => ['required', 'string'],
            "email" => ['required', 'string'],
            "subject" => ['required', 'string'],
            "text" => ['required', 'string'],
        ]);

        Contact::create([
           "name" => $request->input('name'), 
           "phone" => $request->input('phone'), 
           "email" => $request->input('email'), 
           "subject" => $request->input('subject'), 
           "text" => $request->input('text'), 
           "read" => false,
        ]);

        return redirect()->route('contact.index')->with('success', 'Contact Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

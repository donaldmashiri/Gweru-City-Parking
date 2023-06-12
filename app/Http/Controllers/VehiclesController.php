<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vehicles.index')->with('vehicles', Vehicle::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'make' => ['required', 'max:255'],
            'model' => ['required', 'max:255'],
            'year' => ['required', 'max:255'],
            'plate_number' => ['required', 'max:255'],
            'image' => 'required|file|mimes:png,jpg,jpeg',
        ]);

        $documentsPath = $request->file('image')->store('image');


        $statusOptions = ['approved', 'rejected'];

        Vehicle::create([
            "user_id" => auth()->user()->id,
            "make" => request('make'),
            "model" => request('model'),
            "year" => request('year'),
            "plate_number" => request('plate_number'),
            'image' => $documentsPath,
        ]);

        return redirect()->back()->with('success', 'Application was Successfully Created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

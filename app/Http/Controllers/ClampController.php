<?php

namespace App\Http\Controllers;

use App\Models\Clamp;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role === 'amdin'){
            $clamps = Clamp::all();
            return view('clamps.index', compact('clamps'));
        }else{
            $userId = Auth::user()->id;
            $clamps = Clamp::where('user_id', $userId)->get();
            return view('clamps.index', compact('clamps'));
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clamps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'latitude' => ['required', 'max:255'],
            'longitude' => ['required', 'max:255'],
            'image' => ['required', 'image', 'max:255', 'mimes:png,jpg,jpeg'],
            'reason' => ['required', 'max:255'],
        ]);

        $imageName = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('images', $imageName);

        $vehicle = Vehicle::where('image', 'images/'.$imageName)->first();

        if (!$vehicle) {
            return redirect()->back()->withErrors('Car not registered or found in the Database');
        }

        $clamp = Clamp::create([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'plate_number' => $vehicle->plate_number,
            'user_id' => $vehicle->user_id,
            'image' => $image,
            'reason' => $request->reason,
        ]);

        return redirect()->back()->with('success', 'Vehicle was Successfully Clamped.');
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

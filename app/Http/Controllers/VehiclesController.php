<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Auth;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role === "admin"){
            return view('vehicles.index')->with('vehicles', Vehicle::all());
        }else{
            $user = auth()->user();

            return view('vehicles.index')->with('vehicles', Vehicle::where('user_id', $user->id)->orderByDesc('id')->get());
        }
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
            'plate_number' => ['required', 'max:255', 'unique:vehicles'],
            'image' => 'required|file|mimes:png,jpg,jpeg',
        ]);

//        $documentsPath = $request->file('image')->store('image');
        $imageName = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('images', $imageName);


        $statusOptions = ['approved', 'rejected'];

        Vehicle::create([
            "user_id" => auth()->user()->id,
            "make" => request('make'),
            "model" => request('model'),
            "year" => request('year'),
            "plate_number" => request('plate_number'),
            'image' => $image,
        ]);

        return redirect()->back()->with('success', 'Vehicle was Successfully Added.');
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

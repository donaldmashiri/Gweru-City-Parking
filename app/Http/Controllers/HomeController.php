<?php

namespace App\Http\Controllers;

use App\Models\Clamp;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function notify()
    {
        return view('notify')->with('clamps', Clamp::all());
    }

    public function reports()
    {
        $usersTotal = User::count();
        $vehiclesTotal = Vehicle::count();

        return view('reports', compact('usersTotal', 'vehiclesTotal'));
    }
}

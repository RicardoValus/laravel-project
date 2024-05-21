<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    //
    public function index() {
        $flights = Flight::all();

        return view('flight', compact('flights'));
    }

    public function store(Request $request)
    {
        $flight = new Flight();
        $flight->name = 'Novidade';
        $flight->airline = "Novo";
        $flight->save();
    }
}

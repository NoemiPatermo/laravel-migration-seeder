<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;// è il Model, usi il namespace per trovarlo

class TripController extends Controller
{
    public function index() {

        $allTrips = Trip::all();//metodo col quale prendi tutto ciò che si trova nella tabella trips

        return view('trip', compact('allTrips'));
    }
}

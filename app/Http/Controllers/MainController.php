<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class MainController extends Controller
{
    public function home() {
        $trips = Trip::all();
        return view('home', compact('trips'));
    }
}

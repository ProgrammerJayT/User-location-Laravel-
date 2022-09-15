<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationControl extends Controller
{
    //
    public function location()
    {
        return view('location');
    }
}

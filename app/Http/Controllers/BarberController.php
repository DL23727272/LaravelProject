<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;

class BarberController extends Controller
{
    public function showBarbers()
    {
        $barbers = Barber::all();
        return view('booking', compact('barbers'));
    }

}

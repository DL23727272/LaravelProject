<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        // Logic for listing appointments
        return view('appointments.index');
    }

    public function show($id)
    {
        // Logic for showing a specific appointment
        return view('appointments.show', ['id' => $id]);
    }

    // Add other methods as needed...
}

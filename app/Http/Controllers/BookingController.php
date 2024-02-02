<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index(){
        return view('book');
    }

    public function bookAppointment(Request $request, $barber)
    {

        $request->validate([
            'fname' => 'required|string|max:255',
            'dateIn' => 'required|date',
            'timeIn' => 'required',
            'serviceType' => 'required|string',
            'phone' => 'required|string|max:12'
        ]);


        $barberTable = strtolower($barber);

        $checkResult = DB::table($barberTable)
            ->where('checkin_date', $request->input('dateIn'))
            ->where('checkin_time', $request->input('timeIn'))
            ->count();

        if ($checkResult > 0) {
            $response = [
                'status' => 'error',
                'message' => 'Time is already taken',
            ];
        } else {

            DB::table($barberTable)->insert([
                'checkin_date' => $request->input('dateIn'),
                'checkin_time' => $request->input('timeIn'),
                'name' => $request->input('fname'),
                'service_type' => $request->input('serviceType'),
                'phone' => $request->input('phone'),
            ]);

            $response = [
                'status' => 'success',
                'message' => "Booked to $barber successfully",
            ];
        }

        return response()->json($response);
    }
}

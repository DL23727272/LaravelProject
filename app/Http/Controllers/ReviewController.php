<?php
// app/Http/Controllers/ReviewController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'customerName' => 'required|string',
                'customerStatus' => 'required|string',
                'reviewContent' => 'required|string',
            ]);

            // Insert the review into the database
            DB::table('reviews')->insert($data);

            return response()->json(['message' => 'Review submitted successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Internal Server Error', 'error' => $e->getMessage()], 500);
        }
    }
}

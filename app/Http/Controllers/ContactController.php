<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        return view('home');
    }

    public function add(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $query = DB::table('messages')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        if ($query) {
            return back()->with('success', 'Message Sent na!!');
        } else {
            return back()->with('fail', 'May nangyaring masama XD');
        }
    }
}

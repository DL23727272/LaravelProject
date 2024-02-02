<?php

// app/Http/Controllers/MessageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function displayMessages()
    {
        $messages = DB::table('messages')->get();

        return view('messages.index', compact('messages'));
    }
}

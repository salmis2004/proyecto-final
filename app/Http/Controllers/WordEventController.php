<?php

namespace App\Http\Controllers;

use App\Models\WordEvent;
use Illuminate\Http\Request;

class WordEventController extends Controller
{
    public function registrerEvent()
    {
    $user = Auth::user();

    $events = WordEvent::with('word')
                ->where('user_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->get();

    return response()->json([
        'user' => $user->name,
        'events' => $events
    ]);
    }
}

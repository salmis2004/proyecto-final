<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PlayerWord;

class PlayerWordController extends Controller
{
        //Se optiene las palabras que ya fuerion asignadas al jugador 
        public function getPlayerWord()
        {
            $user = Auth::user();
    
            $words=$user->words()->with('category')->get();
            return response()->json([
                'user'=>$user->name,
                'word'=>$words
    
            ]);
        }
}

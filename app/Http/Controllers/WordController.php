<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PlayerWord;
use App\Models\Word;
use App\Models\Category; 

class WordController extends Controller
{
    public function getRandomWord(Request $request,$categoryId)
    {
        if (!Auth::check()) {
            return response()->json([
                'message' => 'Usuario no autenticado.'
            ], 401);
        }
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Obtener las palabras que el usuario ya ha visto (con ID)
        $seenWordId = $user->words->pluck('id')->toArray();

        //Limite de palabras 
        $limit = (int)$request->query('limit',1);
        

        // Obtener una palabra aleatoria que no haya sido vista por el usuario en la categoría seleccionada
        $words = Word::with(['options'=> function($query){
            $query->inRandomOrder();
        }, 'category'])
            ->where('category_id', $categoryId)
            ->whereNotIn('id', $seenWordId)
            ->inRandomOrder()
            ->limit($limit)
            ->get();

        // Si no hay más palabras en esa categoría
        if ($words -> isEmpty()) {
            return response()->json([
                'message' => 'Ya no hay más palabras nuevas en esta categoría 😅 '
            ]);
        }

        // Registrar que el usuario ya vio la palabra
        foreach($words as $word){
            if (!PlayerWord::where('user_id', $user->id)->where('word_id', $word->id)->exists()) {
                PlayerWord::create([
                    'user_id' => $user->id,
                    'word_id' => $word->id
                ]);
            }
        }
        
        return response()->json([
            'category' => $words->first()->category->name ?? 'Sin categoría',
            'words' => $words,
        ]);
    }

    public function getCategory()
    {
        $category=Category::all();

        return response ()->json([
            'categories'=>$category
        ]);
    } 

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

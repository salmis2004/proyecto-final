<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PlayerWord;
use App\Models\Word;

class WordController extends Controller
{
    public function getRandomWord($categoryId)
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

        // Obtener una palabra aleatoria que no haya sido vista por el usuario en la categoría seleccionada
        $word = Word::with(['options', 'category'])
            ->where('category_id', $categoryId)
            ->whereNotIn('id', $seenWordId)
            ->inRandomOrder()
            ->first();

        // Si no hay más palabras en esa categoría
        if (!$word) {
            return response()->json([
                'message' => 'Ya no hay más palabras nuevas en esta categoría 😅 '
            ]);
        }

        // Registrar que el usuario ya vio la palabra
        if (!PlayerWord::where('user_id', $user->id)->where('word_id', $word->id)->exists()) {
            PlayerWord::create([
                'user_id' => $user->id,
                'word_id' => $word->id
            ]);
        }
        

        // Opciones mezcladas
        $options = $word->options->shuffle();

        // Devolver la respuesta con la categoría, palabra y opciones
        return response()->json([
            'category' => $word->category->name,
            'word' => $word->word,
            'options' => $options
        ]);
    }
}

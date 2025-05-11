<?php

namespace App\Http\Controllers;
use App\Models\PlayerWord;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Word;


class WordController extends Controller
{
    public function getRandomWord(Request $request,$categoryId)
    {
        if (!Auth::check()) {
            return response()->json([
                'message' => 'Usuario no autenticado.'
            ], 401);
        }

        //Se valida que exista la categoria
        $category=Category::find($categoryId);
        if(!$category){
            return response()->json([
                'message' => 'POV: La categoria No existe '
            ]);
        }
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Obtener las palabras que el usuario ya ha visto 
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
                'message' => 'Ya no hay más palabras nuevas en esta categoría :( '
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
            'category' => $words->first()->category->name,
            'words' => $words,
        ]);
    }

    //Funcion para responder la definicion correscta de la palabra 
    public function checkAnswer( Request $request){
        $wordId=$request->input('word_id');
        $selectOption=$request->input('select_option');

        $word=Word::find($wordId);
        if(!$word){
            return response()->json([
                'message'=>'La palabra no existe'
            ]);
        }

        $option=$word->options->find($selectOption);

        if(!$option){
            return response()->json([
                'message'=>'opcion no valida'
            ]);
        }

        if($option ->is_correct==1){
            return response()->json ([
                'message'=>'Respuesta correctaaaaa!!!!',
                'correct'=>true
            ]);
        }
        else{
            return response()->json ([
                'message'=>'Respuesta Incorrecta :(',
                'correct'=>false
            ]);
        }
    }

    public function getWordLetter(Request $request){
        $letter=$request->input('letter');
        $categoryId=$request->input('category_id');

        if(strlen($letter)!=1){
            return response()->json([
                'message'=>"La letra debe de ser de 1 caracter"
            ]);
        }

        $category=Category::find($categoryId);

        if(!$category){
                return response()->json([
                'message'=>"La categoria no existe"
            ]);
        }

        $words=$category->words->filter(function ($word) use($letter){
            return stripos($word->word,$letter)===0;
        })->values();;

        if($words->isEmpty()){
            return response()->json([
                'message'=> "No se encontraron palabras que empiecen con esa letra :o"
            ]);
        }

        return response()->json([
            'message'=> $words
            ]);


    }

}

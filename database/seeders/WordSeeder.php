<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Word;
use App\Models\Category;


class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryTecnologia=Category::where('name','Tecnologia')->first();
        $categoryCiencia=Category::where('name','Ciencia')->first();
        $categoryDeportes=Category::where('name','Deportes')->first();
        $categoryArte=Category::where('name','Arte')->first();
        $categoryCocina=Category::where('name','Cocina')->first();

        Word::insert([
            ['word' => 'Computadora', 'category_id' =>$categoryTecnologia->id],
            ['word' => 'Nanotecnologia', 'category_id' =>$categoryTecnologia->id],
            ['word' => 'Internet', 'category_id' =>$categoryTecnologia->id],
            ['word' => 'Redes', 'category_id' =>$categoryTecnologia->id],
            ['word' =>'IA', 'category_id'=> $categoryTecnologia->id],
        ]);

        Word::insert([
            ['word' => 'Atomo', 'category_id' =>$categoryCiencia ->id],
            ['word' => 'Celula', 'category_id' =>$categoryCiencia ->id],
            ['word' => 'Fuerza', 'category_id' =>$categoryCiencia ->id],
            ['word' => 'Gravedad', 'category_id' =>$categoryCiencia ->id],
            ['word' =>'Energia', 'category_id'=> $categoryCiencia ->id],
        ]);

        Word::insert([
            ['word' => 'Futbol', 'category_id' =>$categoryDeportes ->id],
            ['word' => 'Baloncesto', 'category_id' =>$categoryDeportes ->id],
            ['word' => 'Tenis', 'category_id' =>$categoryDeportes ->id],
            ['word' => 'Ciclismo', 'category_id' =>$categoryDeportes ->id],
            ['word' =>'Natacion', 'category_id'=> $categoryDeportes ->id],
        ]);

        Word::insert([
            ['word' => 'Pintura', 'category_id' =>$categoryArte ->id],
            ['word' => 'Escultura', 'category_id' =>$categoryArte ->id],
            ['word' => 'Arte', 'category_id' =>$categoryArte ->id],
            ['word' => 'Teatro', 'category_id' =>$categoryArte ->id],
            ['word' =>'Fotografia', 'category_id'=> $categoryArte ->id],
        ]);

        Word::insert([
            ['word' => 'Batir', 'category_id' =>$categoryCocina ->id],
            ['word' => 'Tostar', 'category_id' =>$categoryCocina ->id],
            ['word' => 'Desmenuzar', 'category_id' =>$categoryCocina ->id],
            ['word' => 'Cocer', 'category_id' =>$categoryCocina ->id],
            ['word' =>'Sazonar', 'category_id'=> $categoryCocina ->id],
        ]);
    }
}

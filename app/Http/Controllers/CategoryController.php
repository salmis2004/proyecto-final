<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category; 

class CategoryController extends Controller
{
            //Funcion para obtener todas las categorias
            public function getCategory()
            {
                $category=Category::all();
        
                return response ()->json([
                    'categories'=>$category
                ]);
            } 
        
}

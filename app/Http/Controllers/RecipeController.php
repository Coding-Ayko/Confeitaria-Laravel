<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{

    
    public function recipes($id = null){
 
         return view ('recipes', 
         [
             'id' =>$id
         ]);
         
    }

    public function create() {

        $teste = 'teste';
        
        return view('/recipes/create', 
        [   
            'teste' => $teste
        ]);
    }



}

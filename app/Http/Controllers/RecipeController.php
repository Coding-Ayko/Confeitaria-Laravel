<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{

    
    public function receitas($id = null){
 
         return view ('receitas', 
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

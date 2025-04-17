<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{

    
    public function recipes($id = null){
        $recipes = Recipe::all();
        return view('recipes',['recipes' => $recipes]);
 
         
    }

    



  public function create()
{
    //add the create reciepe logic 
}


}

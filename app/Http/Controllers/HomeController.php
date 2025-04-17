<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{
    //separate these in 'show recipes' and 'index'
    public function index() {
        $recipes = Recipe::all();
        return view('welcome',['recipes' => $recipes]);
    }


    public function searchRecipe(Request $request){
        $query = $request->input('q'); // get the value from input
        $recipes = Recipe::where('title', 'like', '%' . $query . '%')->get(); // search how to do it wihout sql injetion
        
        //see how I can do show in the bottom side of the input
        return view('welcome', ['recipes' => $recipes]);
    }


}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{
    public function index() {
        $recipes = Recipe::all();
        return view('welcome',['recipes' => $recipes]);
    }


    public function searchRecipe(Request $request){
        $query = $request->input('q'); // get the value from input
        $recipes = Recipe::where('name', 'like', '%' . $query . '%')->get(); // search how to do it wihout sql injetion 
        return view('welcome', ['recipes' => $recipes]);
    }


}


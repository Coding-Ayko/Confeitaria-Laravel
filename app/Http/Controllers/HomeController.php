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

}

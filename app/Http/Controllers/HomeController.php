<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;

class HomeController extends Controller
{
    public function index() {
        $receitas = Receita::all();
        
        
        return view('welcome',['receitas' => $receitas]);
    
        
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtigosController extends Controller
{
    public function artg(){
        return view('/artigos');
    }
}

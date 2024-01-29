<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritosController extends Controller
{
    public function favs(){
        return view('/favoritos');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    public function favs(){
        return view('/favourites');
    }
}

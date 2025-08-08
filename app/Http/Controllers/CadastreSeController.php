<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastreSeController extends Controller
{
    public function cadastreSe()
    {
        return view('cadastre');
    }
}

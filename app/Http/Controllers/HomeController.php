<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        
        $nome = "Tatau";
        $idade = 19;
        $arr = [1,2,3,4,5];
        $nomes = ['Aline', 'Bárbara', 'Collins', 'Rebecca', 'Regina'];
        
        return view('welcome', 
        [
            'nome'=>$nome, 
            'idade'=>$idade , 
            'job'=>"estagiária de TI",
            'arr' => $arr,
            'nomes' => $nomes
            ]
        );
    }

}

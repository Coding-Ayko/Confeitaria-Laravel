<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastreSeController extends Controller
{
    public function cadastreSe(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');

        
        // return view('cadastre');
        return "Nome: $nome, Email: $email, Senha: $senha";
        // dd('return'); 
    }
}

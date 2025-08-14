<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\CadastroUser;
use Illuminate\Http\Request;

class CadastreSeController extends Controller
{
    public function cadastreSe()
    {
        return view('cadastre');
    }

    public function showCadastro($id)
    {
        $user = CadastroUser::findOrFail($id);
        // dd($user);
        return view('cadastros', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:cadastro_users,email',
            'senha' => 'required|min:6',
        ]);

        $user = new CadastroUser();
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->senha = Hash::make($request->senha); // criptografia segura
        $user->save();

        return redirect()->route('welcome')
            ->with('success', $user->nome . ' cadastrado com sucesso!');
    }
}

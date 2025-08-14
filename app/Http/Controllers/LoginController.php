<?php

namespace App\Http\Controllers;

use App\Models\CadastroUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // puxar os dados 
        // retornar na view

        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // return view ('criarNovo');
    }

    // todo o html e no botão salvar 
    // route{{teste.store}};

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //pegar os dados do request e vai jogar pro banco

         //return json('teste criado com sucesso')/; 

         $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
         ]);

        //Busca usuário pelo email
        $user = CadastroUser::where('email', $request->email)->first();

        // Verifica se usuário existe e senha confere
        if ($user && Hash::check($request->senha,$user->senha)) {
            // Salva dados do usuário na sessão
            session(['user_id' => $user->id, 'user_name' => $user->name]);

            return redirect()->route('main2'); //ou para a página inicial após o login
        }

        return back()->withErrors(['email' => 'email ou senha inválidos']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }

    public function logout()
{
    session()->flush();
    return redirect()->route('login');
}

}

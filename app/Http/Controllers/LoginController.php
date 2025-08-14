<?php

namespace App\Http\Controllers;

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
}

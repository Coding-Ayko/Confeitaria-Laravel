@extends('layouts.main')
@section('title', 'Cadastre-se') 
@section('content')
    <section>
        <div class="">
            <h1>CADASTRE-SE AQUI</h1>
            <p>Cadastre-se para receber nossas novidades e ofertas exclusivas!</p>
            <form>
                <input type="text" placeholder="Nome Completo" required>
                <input type="email" placeholder="E-mail" required>
                <input type="password" placeholder="Senha" required>
                <input type="submit">Cadastrar</button>
            </div>
        </section>
@endsection {{-- Precisa fechar a section para que ele funcione corretamente --}}
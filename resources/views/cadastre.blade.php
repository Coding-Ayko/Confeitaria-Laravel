<head>
    <link rel="stylesheet" href="{{ asset('css/cadastramento/cadastre_se.css') }}">
     <script src="{{ asset('js/gsap/gsap.min.js') }}"></script>
</head>

@extends('layouts.main')
@section('title', 'Cadastre-se')
@section('content')
    <section class="cadastre-content">
        <h1>CADASTRE-SE AQUI</h1>
        <p>Cadastre-se para receber nossas novidades e ofertas exclusivas!</p>
        <div class="cadastre-user">
            <form class="cadastre-form">
                <input type="text" placeholder="Nome Completo" required>
                <br>
                <input type="email" placeholder="E-mail" required>
                <br>
                <input type="password" placeholder="Senha" required>
                <br>
                <input type="submit" value="Cadastrar"></button>
            </div>
        </section>
@endsection {{-- Precisa fechar a section para que ele funcione corretamente --}}

<script>
    gsap.registerPlugin(SplitText);
    console.clear();

    document.fonts.ready.then
</script>
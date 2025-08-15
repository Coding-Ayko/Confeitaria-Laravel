<head>
    <link rel="stylesheet" href="{{ asset('css/cadastramento/cadastre_se.css') }}">

</head>

@extends('layouts.main')
@section('title', 'Cadastre-se')
@section('content')
    <section class="cadastre-content">
        <form action="{{ route('cadastre') }}" class="cadastre-form" method="POST">
                <h1>CADASTRE-SE AQUI</h1>
                <p>Cadastre-se para receber nossas novidades e ofertas exclusivas!</p>
                <div class="cadastre-user">
                @csrf
                {{-- serve para incluir automaticamente um token de segurança chamado CSRF token --}}
                <input type="text" name='nome' placeholder="Nome Completo" required>
                <br>
                <input type="email" name='email' placeholder="E-mail" required>
                <br>
                <input type="password" name='senha' placeholder="Senha" required>
                <br>
                <input type="submit" name='submit' value="Cadastrar"></button>
            </form>
        </div>
    </section>

    <script src="{{ asset('js/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('js/splittext.min.js') }}"></script>
    <script src="{{ asset('js/animacao-cadastro.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            gsap.from(".cadastre-form h1", {
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "back.out(1.7)"
            });

            gsap.from(".cadastre-form p", {
                y: 30,
                opacity: 0,
                duration: 1,
                delay: 0.3,
                ease: "power2.out"
            });

            gsap.from(".cadastre-form input", {
                y: 20,
                opacity: 0,
                stagger: 0.1,
                duration: 0.8,
                delay: 0.5
            });
        });
    </script>
@endsection {{-- Precisa fechar a section para que ele funcione corretamente --}}

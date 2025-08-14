<head>
    <link rel="stylesheet" href="{{ asset('css/LoginAoSistema/login.css') }}">
    <script src="{{ asset('js/gsap/gsap.min.js') }}"></script>
</head>

@extends('layouts.main')
@section('title', 'Cadastre-se')
@section('content')

    <section class="form-content">
        <div class="form">
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="submit" value="Acessar">
            </form>

        </div>
    </section>


@endsection

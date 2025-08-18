<head>
    <link rel="stylesheet" href="{{ asset('css/LoginAoSistema/login.css') }}">
</head>

@extends('layouts.main')
@section('title', 'Cadastre-se')
@section('content')

<section class="form-content">
    <div class="form">
        <form action="{{ route('login.store') }}" class="form-inp" method="POST">
                @csrf
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="submit" value="Acessar">
                <br><br>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </form>
            
        </div>
    </section>
    
    <script src="{{ asset('js/gsap/gsap.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            gsap.from(".form-inp input", {
                y: -50,
                opacity: 0,
                duration: 1,
                ease: "power1"
            });
        });
    </script>

@endsection

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
            <form action="{{route('cadastre.submit')}}" class="cadastre-form" method="POST">
                @csrf
                {{-- serve para incluir automaticamente um token de segurança chamado CSRF token --}}

                <input type="text" name='nome' placeholder="Nome Completo" required>
                <br>
                <input type="email" name='email' placeholder="E-mail" required>
                <br>
                <input type="password" name='password' placeholder="Senha" required>
                <br>
                <input type="submit" name='submit' value="Cadastrar"></button>
        </div>
    </section>
@endsection {{-- Precisa fechar a section para que ele funcione corretamente --}}

{{-- <script>
    gsap.registerPlugin(SplitText);
    console.clear();
    document.fonts.ready.then() => {
        gsap.set(".cadastre-content", {
            opacity: 1
        });

        let split = SplitText.create(".cadastre-content", {
            type: "chars, words",
            mask: "chars"
        });

        let tween = fsap.from(split.chars, {
            duration: 0.6,
            yPercent: "random([-150, 150])",
            xPercent: "random([-150, 150])",
            stagger: {
                from: "random",
                amount: 0.6,
            },
            ease: "power3.out"
        });

        document.querySelector("button").addEventListener("click", (e) => {
            tween.timeScale(0.5).play(0);
        });
    };
</script> --}}

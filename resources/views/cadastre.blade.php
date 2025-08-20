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

    <script>
        // ease: Define como a velocidade da animação varia ao longo do tempo.
        // delay: Está ligado ao tempo de espera antes de a animação começar.
        // ease, tipos:
        // back.in, back.out, back.inOut (fazem o movimento passar um pouco do alvo e voltar, tipo elástico)
        // elastic.in, elastic.out, elastic.inOut (aquele efeito de mola mesmo)
        // bounce.in, bounce.out, bounce.inOut (efeito quicando)
        // rough, steps(n), e até custom eases com curvas Bézier
        // power1.in, power1.out, power1.inOut: são apenas funções de aceleração (easing) que definem como a animação acontece ao longo do tempo
        // power1 → curva mais suave, aceleração/desaceleração leve.
        // power2 → curva mais acentuada, acelera/desacelera mais rápido.
        // power3 → ainda mais intensa.
        // power4 → bem intensa, efeito mais dramático de aceleração.
        // Overshoot é o quanto o elemento “passa do ponto final” antes de voltar para ele.
        // O número dentro do parêntese define a intensidade do overshoot (o quanto o elemento “passa do alvo” antes de voltar).
        document.addEventListener("DOMContentLoaded", () => {
            gsap.from(".cadastre-form h1", {
                // vai se mover 50px para esquerda
                y: 50,
                // controla a transparência, neste caso totalmente invisvel
                opacity: 0,
                // durará 2s
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

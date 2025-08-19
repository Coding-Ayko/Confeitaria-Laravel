<head>
    {{-- <link rel="stylesheet" href="{{asset("css/home/home.css")}}"> --}}
</head>

@extends('layouts.main')
@section('title', 'Blog Aykandi')
@section('content')

    <body>

        <div class="home-content">
            <div class="header-home-text">
                <img class="sparkle" src="\.\img\Sparkle.svg" alt="">
                <p class="subtitulo-blog">Pratos Saudáveis e Deliciosos!</p>
                <h1>Blog de Receitas <br> Gourmet</h1>
                <form action=" {{ route('search.recipe') }}" method="get">
                    <div id="divBusca">
                        <input type="text" id="q" placeholder="Busque por uma receita!" />
                        @component('botoes.botaoBuscar', [
                            'id' => 'btnBakery',
                            'color' => '#ffffff',
                            'background' => 'linear-gradient(180deg,  #a21872 30%, #5a0060 70%)',
                        ])
                            Buscar
                        @endcomponent
                    </div>
                </form>
            </div>

            <img class="cupcake" src="\.\img\Group 1000002256.svg" alt="">

            <div class="redes-sociais">
                <a href="#"><img src="\.\img\Facebook.png" alt=""></a>
                <a href="#"><img src="\.\img\insta.png" alt=""></a>
                <a href="#"><img src="\.\img\X.png" alt=""></a>
            </div>
        </div>

        <div class="novidades-semana-content">
            <h1>Novidades da Semana</h1>
            <div class="card-group">
                {{-- @foreach ($recipes as $recipe)
                    <div class="card-col-md-3">
                        <div class="card">
                            <img src="{{ asset('./img/novidades-semana/' . $recipe->id . '.png') }}" alt="">
                            <h4 class="card-title">{{ $recipe->title }}</h4>
                            <p class="card-text">{{ $recipe->description }}</p>
                        </div>
                        <div class="rating-img">
                            <img src="{{ asset('./img/rating.png') }}" alt="Rating" class="estrelas">
                        </div>
                    </div>
                @endforeach --}}
            </div>
            @component('botoes.botaoConferir', [
                'id' => 'btnBakery',
                'color' => '#ffffff',
                'background' => 'linear-gradient(180deg,  #a21872 30%, #5a0060 70%)',
            ])
                Fique por dentro das news!
            @endcomponent
        </div>

        <div class="sessao-brownie">
            <img class="trigo-fundo" src="./img/receita-brownie/trigo-grande-fundo.png" alt="">
            <img class="trigo-destaque" src="./img/receita-brownie/trigo-pequeno-destacado.png" alt="">

            <div class="header-brownie-text">
                <p class="subtitulo-brownie">Queridinho dos chefes da casa!</p>
                <img class="brilhinhos" src="./img/receita-brownie/estrelas-douradas.png" alt="">
                <h1>Receita<br> Brownie Avelã</h1>
                <p>O Brownie é um doce comumente consumido, e combinado com nossa receita especial fica ainda mais
                    desejável! Brownie contém em sua massa, selecionados grãos de avelã e nozes, sortidos em um creme de
                    chocolate belga, dando um sabor excepcional. As nozes por cima agregam tanto no visual, quando no sabor
                    crocante ao saboreálo. </p>

            </div>

            <div class="brownie-imgs">
                <img src="./img/receita-brownie/image-3-brownies.png" alt="">
            </div>
        </div>

        <div class="session-bakery">
            <div class="bakery-title">
                <h1 id="bola">Bakery</h1>
            </div>
            <div class="layout-bakery">
                <img class="pao" src="./img/bakery/paes-under-table.png" alt="">
                <div class="layout-right-bakery">
                    <p class="description-bakery"> <strong>Pães Artesanais Fresquinhos Toda Manhã</strong> <br>Nada como o
                        aroma de pão quentinho saindo do forno para começar bem o dia! Todas as manhãs, nossa padaria
                        prepara pães artesanais com ingredientes selecionados, fermentação natural e aquele cuidado especial
                        que dá gosto em cada mordida. Do clássico francês ao integral recheado, nossas fornadas trazem
                        variedade, crocância por fora e maciez por dentro. Perfeitos para acompanhar um café, um chá ou até
                        aquele brunch especial de domingo. Venha descobrir seu favorito!</p>
                    @component('botoes.botaoConferir', ['color' => '#d8d8d8'])
                        @slot('id')
                            {{-- pode passar apenas um valor por vez --}}
                            btnBakery
                        @endslot
                        @slot('background')
                            linear-gradient(180deg, #FFBA00 30%, #FF7A00 70%)
                        @endslot
                        Confira a variedade!
                    @endcomponent

                </div>
            </div>
        </div>

        <script src="{{ asset('js/gsap/gsap.min.js') }}"></script>

        <script>
            // Animação suave para mover a bolinha da esquerda para a direita
            gsap.to("#bola", {
                x: -400,
                duration: 5,
                ease: "power1.inOut",
                repeat: -1,
                yoyo: false
            });
        </script>

        {{-- <script src=""></script> --}}
    </body>
@endsection

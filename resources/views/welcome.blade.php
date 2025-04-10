@extends('layouts.main')
@section('title', 'Blog Aykandi')
@section('content')

<body>
    <div class="home-content">
        <div class="header-home-text">
            <img class="sparkle" src="\.\img\Sparkle.svg" alt="">
            <p class="subtitulo-blog">Pratos Saudáveis e Deliciosos!</p>
            <h1>Blog de Receitas <br> Gourmet</h1> 
            <form action="">
                <div id="divBusca">
                    <input type="text" id="f" placeholder="Busque por uma receita!"/>
                    <button id="btnBusca">Buscar</button>
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
            @foreach($receitas as $receita)
                <div class="card-col-md-3">
                    <div class="card">
                        <img src="{{ asset('./img/novidades-semana/' . $receita->id . '.png') }}" alt="">
                        <h4 class="card-title">{{ $receita->title }}</h4>
                        <p class="card-text">{{ $receita->description }}</p>
                    </div>
                    <div class="rating-img">
                        <img src="{{ asset('./img/rating.png') }}" alt="Rating" class="estrelas">
                    </div>
                </div>
            @endforeach
        </div>
        <button id="btnNovidades">Fique por dentro das news!</button>
    </div>

    <div class="sessao-brownie">
        <img class="trigo-fundo" src="./img/receita-brownie/trigo-grande-fundo.png" alt="">
        <img class="trigo-destaque" src="./img/receita-brownie/trigo-pequeno-destacado.png" alt="">

        <div class="header-brownie-text">
            <p class="subtitulo-brownie">Queridinho dos chefes da casa!</p>
            <img class="brilhinhos" src="./img/receita-brownie/estrelas-douradas.png" alt="">
            <h1>Receita<br> Brownie Avelã</h1> 
            <p>O Brownie é um doce comumente consumido, e combinado com nossa receita especial fica ainda mais desejável! Brownie contém em sua massa, selecionados grãos de avelã e nozes, sortidos em um creme de chocolate belga, dando um sabor excepcional. As nozes por cima agregam tanto no visual, quando no sabor crocante ao saboreálo. </p>
            <button id="btnBrownieAvela">Confira os sabores!</button>
        </div>

        <div class="brownie-imgs">
            <img src="./img/receita-brownie/image-3-brownies.png" alt="">
        </div>
    </div>
</body>

@endsection

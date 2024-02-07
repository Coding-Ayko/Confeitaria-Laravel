@extends('layouts.main')
@section('title','Teste')
@section('content')

<body>
    <div class="home-content">
        <div class="header-home-text">
            <img class="sparkle" src="\.\img\Sparkle.svg" alt="">
            <p class="subtitulo-blog">Pratos Saudáveis e Deliciosos!</p>
            <h1>Blog de Receitas <br> Gourmet</h1> 
            <div id="divBusca">
                <input type="text" id="f" placeholder="Busque por uma receita!"/>
                <button id="btnBusca" >Buscar</button>
            </div>
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
        <div class="novidades-rollside">
            <div class="nov-rollside-1">
                <img id="img-nov-rollside" src="" alt="">
                <h1>Lumpia with Suace</h1>
                <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do eiusmod tempor </p>
                <img id="rating-nov-rollside"  src="" alt="">
            </div>

            <div class="nov-rollside-2">
                <img id="img-nov-rollside" src="" alt="">
                <h1>Lumpia with Suace</h1>
                <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do eiusmod tempor </p>
                <img id="rating-nov-rollside"  src="" alt="">
            </div>

            <div class="nov-rollside-3">
                <img id="img-nov-rollside" src="" alt="">
                <h1>Lumpia with Suace</h1>
                <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do eiusmod tempor </p>
                <img id="rating-nov-rollside"  src="" alt="">
            </div>

            <div class="nov-rollside-4">
                <img id="img-nov-rollside" src="" alt="">
                <h1>Lumpia with Suace</h1> <!-- aqui vem dados em php dinâmizados -->
                <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do eiusmod tempor </p> <!-- aqui vem dados em php dinâmizados -->
                <img id="rating-nov-rollside"  src="" alt="">
            </div>
        </div>
    </div>

</body>
@endsection
@extends('layouts.main')
@section('title','Teste')
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
                    <button id="btnBusca" >Buscar</button>
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
        <div class="novidades-rollside">
            @foreach($receitas as $receita)
                <h1>{{$receita->title }}</h1>
                <p>{{$receita->description}}</p>
            @endforeach

            


            <!-- <div class="nov-rollside-1">
                <img id="img-nov-rollside" src="" alt="">
                @foreach($receitas as $receita)
                <h1>{{$receita->title }}</h1>
                <p>{{ $receita->description }}</p>
                @endforeach
                <img id="rating-nov-rollside"  src="" alt="">
            </div>

            <div class="nov-rollside-2">
                <img id="img-nov-rollside" src="" alt="">
                @foreach($receitas as $receita)
                <h1>{{$receita->title }}</h1>
                <p>{{ $receita->description }}</p>
                @endforeach
                <img id="rating-nov-rollside"  src="" alt="">
            </div>

            <div class="nov-rollside-3">
                <img id="img-nov-rollside" src="" alt="">
                @foreach($receitas as $receita)
                <h1>{{$receita->title }}</h1>
                <p>{{ $receita->description }}</p>
                @endforeach
                <img id="rating-nov-rollside"  src="" alt="">
            </div>

            <div class="nov-rollside-4">
                <img id="img-nov-rollside" src="" alt="">
                @foreach($receitas as $receita)
                <h1>{{$receita->title }}</h1>
                <p>{{ $receita->description }}</p>
                @endforeach
                <img id="rating-nov-rollside"  src="" alt="">
            </div> -->
        </div>
    </div>

</body>
@endsection
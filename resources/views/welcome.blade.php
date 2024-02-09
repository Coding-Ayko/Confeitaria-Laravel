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
            <div class="">
                <div class="card-group">
                    <div class=" card-col-md-3">
                        <div class="card-body">
                            <img src="{{("/./img/" . $receita->id .".png"  )}}" alt="">
                            <h4 class="card-title">{{$receita->title }}</h4>
                            <p class="card-text">{{$receita->description}}</p>
                        </div>
                    </div>
                </div>
            </div>   
            @endforeach
        </div>
        <button type="search" class="btn btn-primary">Buscar</button>



    </div>
    

</body>
@endsection
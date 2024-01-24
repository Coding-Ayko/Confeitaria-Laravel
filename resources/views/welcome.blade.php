<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')Aykandi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css\style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Outfit:wght@300&family=Quicksand:wght@500&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Merriweather:ital,wght@1,900&family=Miniver&family=Outfit:wght@300&family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <script src="js\script.js"></script>
        <script src="uikit/dist/js/uikit-icons.min.js"></script>
    </head>
    <body>
    @yield('content')
    <header>
    <div class="div-header-img">
      <a href="./index.php"><img style=" width: 218px; height: 32px; color:blue;" src="/./img/AykandiHeader.svg" alt="Aykandi"></a>
    </div>
    <div>
      <nav>
        <ul class="menu">
            <li class="menu"><a href="./.php">Página Inicial</a></li>
            <li><a href="./.php">News</a></li>
            <li><a href="./.php">Receitas</a></li>
            <li><a href="./.php">Artigos</a></li>
            <li><a href="./.php">Favoritos</a></li>
            <li><a href="./.php">Contato</a></li>
        </ul>
      </nav>
    </div>

    <div class="header-acesso">
      <nav>
        <ul class="login">
          <li id="login">
            <a  class="cta" href="./.php">
                Login 
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg> 
            </a>
        </li>
          <li><a href="./.php">Cadastre-se</a></li>
        </ul>
      </nav>
    </div>
    
</header>
<hr>

    <!-- <div class="main-content">
    <h2>Confeitaria Gourmet</h2>
    <p>Doces Saudáveis e Deliciosos!</p>
    <button>Faça seu pedido</button>
    <button>Conheça nossos doces</button>
    </div> -->

    <footer>
    <footer class="footer-bg">
    <div class="footer-container">
      <div>
        <a href="./index.html"><img style=" width: 218px; height: 32px;"  src="/./img/Aykandi.svg" alt="Bikcraft"></a>
      </div>
      
      <div class="">
        <nav>
        <ul class="">
          <li><a href="./.html">HOME</a></li>
          <li><a href="./.html">NEWS</a></li>
          <li><a href="./.html">RECEITAS</a></li>
          <li><a href="./.html">ARTIGOS</a></li>
          <li><a href="./.html">SOBRE</a></li>
          <li><a href="./.html">CONTATO</a></li>
        </ul>
        </nav>
      </div>
      <div>
      <form class="ai_inputWr__Pz3eQ">
        <span class="">Endereço de e-mail</span>
        <input type="text" name="promptInput" value="">
        <button>Generate</button>
    </form>
      </div>
      <div>
          <p class="">&copy; 2024 | Todos os direitos reservados.</p>
      </div>
    </div>
    </footer>
    </body>
</html>



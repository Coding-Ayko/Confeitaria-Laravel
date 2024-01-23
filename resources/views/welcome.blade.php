<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css\style.css">
        <script src="js\script.js"></script>
        <script src="uikit/dist/js/uikit-icons.min.js"></script>
    </head>
    <body>
    @yield('content')
    <header>
    <div class="div-header-img">
      <a href="./index.php"><img src="/./img/Aykandi.svg" fill="black" alt="Aykandi"></a>
    </div>
    <div>
      <nav>
        <ul class="">
          <li><a href="./.php">Página Inicial</a></li>
          <li><a href="./.php">Meus Favoritos</a></li>
          <li><a href="./.php">Receitas</a></li>
          <li><a href="./.php">Contato</a></li>
        </ul>
      </nav>
    </div>
    <div class="div-header-nav-login">
      <nav>
        <ul class="">
          <li><a href="./.php">Login</a></li>
          <li><a href="./.php">Cadastre-se</a></li>
        </ul>
      </nav>
    </div>

    </header>
    <footer>
    <footer class="footer-bg">
    <div class="footer container">
      <div>
        <a href="./index.html"><img src="/./img/Aykandi.svg" alt="Bikcraft"></a>
      </div>

      <div class="contato">
        <h2 class="font-2-l-b cor-0">CONTATO</h2>
          <ul class="contato-item font-2-m">
            <li><a href="tel:+551699999999">+55 16 9999-9999</li></a>
            <li><a href="mailto:contato@bikcraft.com">contato@bikcraft.com</li></a>
            <li>Rua Ali Perto, 27 - Botafogo</li>
            <li> Rio de Janeiro - RJ</li>
          </ul>
          <ul class="redes font-2-m">
            <li><img src="./img/redes/instagram.svg" alt="logo instagram"></li>
            <li><img src="./img/redes/facebook.svg" alt="logo facebook"></li>
            <li><img src="./img/redes/youtube.svg" alt="logo youtube"></li>
          </ul>
      </div>

      <div class="informacoes">
        <h2 class="font-2-l-b cor-0">INFORMAÇÕES</h2>
        <nav>
        <ul class="font-1-m cor-5">
          <li><a href="./bicicletas.html">Home</a></li>
          <li><a href="./seguros.html">Quem nós somos?</a></li>
          <li><a href="./contato.html">Receitas</a></li>
          <li><a href="./contato.html">Contato</a></li>
        </ul>
        </nav>
      </div>

      <p class="direitos font-2-m cor-6">Aykandi. &copy; Todos os direitos reservados. </p>
    </div>
  </footer>
    </footer>
    
    </body>
</html>

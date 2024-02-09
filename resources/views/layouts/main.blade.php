<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="\css\style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Outfit:wght@300&family=Quicksand:wght@500&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Merriweather:ital,wght@1,900&family=Miniver&family=Outfit:wght@300&family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="js\script.js"></script>
        <script src="uikit/dist/js/uikit-icons.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <header>
    <div class="div-header-img">
      <a href="./index.php"><img style=" width: 218px; height: 32px; color:blue;" src="/./img/AykandiHeader.svg" alt="Aykandi"></a>
    </div>
    <div>
      <nav>
        <ul class="menu-nav">
          <li><a href="/">HOME</a></li>
          <li><a href="/news">NEWS</a></li>
          <li class="dropdown">
            <a href="/receitas/teste" class="dropbtn">RECEITAS</a>
            <div class="dropdown-content">
              <a href="#">Criar</a>
              <a href="#">Entradas</a>
              <a href="#">Pratos Principais</a>
              <a href="#">Acompanhamentos</a>
              <a href="#">Sobremesas</a>
            </div>
          </li>
          <li><a href="/favoritos">FAVORITOS</a></li>
          <li><a href="/artigos">ARTIGOS</a></li>
          <li><a href="/contato">CONTATO</a></li>
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
          <li><a style=" font-size: 20px !important;" href="./.php">Cadastre-se</a></li>
        </ul>
      </nav>
    </div>
    
</header>
@yield('content')
<footer class=" footer-bg">
  <div  class="footer-content">
    <div class="img-footer">
      <a href="./index.html"><img style=" width: 218px; height: 32px;"  src="/./img/Aykandi.svg" alt="Bikcraft"></a>
    </div>
    <div class="nav-footer">
      <nav>
        <ul>
          <li><a href="./.html">HOME</a></li>
          <li>|</li>
          <li><a href="./.html">NEWS</a></li>
          <li>|</li>
          <li><a href="./.html">RECEITAS</a></li>
          <li>|</li>
          <li><a href="./.html">ARTIGOS</a></li>
          <li>|</li>
          <li><a href="./.html">SOBRE</a></li>
          <li>|</li>
              <li><a href="./.html">CONTATO</a></li>
            </ul>
          </nav>
        </div>
        <div class="email-contato">
          <input class="c-checkbox" type="checkbox" id="checkbox">
          <div class="c-formContainer">
            <form class="c-form" action="">
              <input class="c-form__input" placeholder="E-mail" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
              <label class="c-form__buttonLabel" for="checkbox">
                <button class="c-form__button" type="button">Enviar</button>
              </label>
              <label class="c-form__toggle" for="checkbox" data-title="Entrar em contato">
                </label>
              </form>
            </div>
          </div>
        </div>
      <p style="color: white; text-align: center;">&copy; 2024 | Todos os direitos reservados.</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>





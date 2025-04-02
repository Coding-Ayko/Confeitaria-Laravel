<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

# Projeto Confeitaria

Este projeto é um site de confeitaria desenvolvido utilizando Laravel e arquitetura MVC, com Bootstrap para estilização. O objetivo é aprender e aplicar conceitos do Laravel enquanto se constrói um sistema funcional para gerenciar pedidos, produtos e clientes.

## Tecnologias Utilizadas

- **Laravel** - Framework PHP para desenvolvimento web.
- **Bootstrap** - Biblioteca CSS para estilização responsiva.
- **MVC (Model-View-Controller)** - Arquitetura utilizada no projeto.
- **MySQL** - Banco de dados para armazenar informações do sistema.

## Funcionalidades do Site

- Listagem e gerenciamento de produtos da confeitaria.
- Sistema de pedidos com controle de status.
- Área administrativa para gestão de clientes e pedidos.
- Interface responsiva para facilitar a navegação.

## Como Rodar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/confeitaria-laravel.git
   ```
2. Acesse o diretório do projeto:
   ```bash
   cd confeitaria-laravel
   ```
3. Instale as dependências do Laravel:
   ```bash
   composer install
   ```
4. Configure o arquivo `.env` e gere a chave de aplicativo:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. Configure o banco de dados no arquivo `.env` e rode as migrations:
   ```bash
   php artisan migrate
   ```
6. Inicie o servidor local:
   ```bash
   php artisan serve
   ```

Agora, acesse `http://127.0.0.1:8000` no seu navegador para visualizar o site.

## Sobre o Laravel

Laravel é um framework de desenvolvimento web com uma sintaxe expressiva e elegante. Ele simplifica tarefas comuns, como roteamento, injeção de dependência, autenticação e muito mais. Algumas características do Laravel incluem:

- [Sistema de roteamento simplificado](https://laravel.com/docs/routing)
- [Container de injeção de dependência](https://laravel.com/docs/container)
- [ORM intuitivo para banco de dados](https://laravel.com/docs/eloquent)
- [Migrations para versionamento do banco de dados](https://laravel.com/docs/migrations)
- [Processamento de tarefas em background](https://laravel.com/docs/queues)
- [Broadcasting de eventos em tempo real](https://laravel.com/docs/broadcasting)

## Contribuição

Se quiser contribuir com melhorias ou novas funcionalidades, sinta-se à vontade para abrir um [pull request](https://github.com/seu-usuario/confeitaria-laravel/pulls) ou relatar um problema em [issues](https://github.com/seu-usuario/confeitaria-laravel/issues).

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

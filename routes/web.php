<?php
use Illuminate\Support\Facades\Route;

// Rotas usando action - Home Controller
use App\Http\Controllers\NewsController;
Route::get('/news', [NewsController::class, 'news']);

// Rotas usando action index- Home Controller
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

// Rotas usando action  favs- Favoritos Controller
use App\Http\Controllers\FavoritosController;
Route::get('/favoritos', [FavoritosController::class, 'favs']);

// Rotas usando action  artg- Artigos Controller
use App\Http\Controllers\ArtigosController;
Route::get('/artigos', [ArtigosController::class, 'artg']);

// Rotas usando action  contato - Contato Controller
use App\Http\Controllers\ContatoController;
Route::get('/contato', [ContatoController::class, 'contato']);





// Rotas usando action - Recipe Controller
use App\Http\Controllers\RecipeController;
Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::get('/contact', [RecipeController::class, 'contact']);
Route::get('/receitas/{id}', [RecipeController::class, 'receitas']);






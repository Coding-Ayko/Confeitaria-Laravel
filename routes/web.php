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
use App\Http\Controllers\ArticleController;
Route::get('/articles', [ArticleController::class, 'artg']);

// Rotas usando action  contato - Contact Controller
use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'contact']);


// Rotas usando action - Recipe Controller
use App\Http\Controllers\RecipeController;
Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::get('/contact', [RecipeController::class, 'contact']);
Route::get('/recipes/{id}', [RecipeController::class, 'recipes']);



<?php
use Illuminate\Support\Facades\Route;

// Rotas usando action - Home Controller
use App\Http\Controllers\NewsController;
Route::get('/news', [NewsController::class, 'news']);

// Rotas usando action index- Home Controller
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'searchRecipe'])->name('search.recipe');

// Rotas usando action  favs- Favoritos Controller
use App\Http\Controllers\FavouritesController;
Route::get('/favourites', [FavouritesController::class, 'favs']);

// Rotas usando action  artg- Artigos Controller
use App\Http\Controllers\ArticleController;
Route::get('/articles', [ArticleController::class, 'artg']);

// Rotas usando action  contato - Contact Controller
use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'contact']);


// Rotas usando action - Recipe Controller
use App\Http\Controllers\RecipeController;
Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::get('/recipes/{id}', [RecipeController::class, 'recipes']);

// Rotas usando actions - Cadastre-se Controller
use App\Http\Controllers\CadastreSeController;
Route::get('/cadastre', [CadastreSeController::class, 'cadastreSe'])-> name('cadastre');

// Rotas usando action - Login Controller
// use App\Http\Controllers\LoginController;
// Route::get('/login', [LoginController::class, 'login']);



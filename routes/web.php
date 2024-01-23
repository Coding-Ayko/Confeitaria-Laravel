<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = "Tatau";
    $idade = 19;
    $arr = [1,2,3,4,5];
    $nomes = ['Aline', 'Bárbara', 'Collins', 'Rebecca', 'Regina'];

    return view('welcome', 
    [
        'nome'=>$nome, 
        'idade'=>$idade , 
        'job'=>"Desenvolvedora de software",
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

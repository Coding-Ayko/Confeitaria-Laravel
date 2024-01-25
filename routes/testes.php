<?php 

use Illuminate\Support\Facades\Route;

Route::get('/user/{id}', function (string $id) {
	return 'User '.$id;
});

;Route::get('/user/{name?}', function (?string $name = null) {
  return $name;
});

Route::get('/user/{name?}', function (?string $name = 'John') {
  return $name;
});

Route::get('/user/{name}'), function (string $name) {
	//..
})-> where('name' , '[A-Za-z]+' );











<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favourites;

class Recipe extends Model
{
    use HasFactory;

    public function favourites()
    {
        return $this->hasMany(Favourites::class);
    } //this mean that a recipe can be favourited by many users

    
    public function favouredByUsers()
    {
        return $this->belongsToMany(User::class, 'favorites');
    } // this mean that I  can get all users who have favourited this recipe
}

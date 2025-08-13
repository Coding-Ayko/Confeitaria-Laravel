<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroUser extends Model
{
    protected $table = 'cadastro_users';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['id', 'nome', 'email','senha','ativo'];
    // protected $teste = 'oi maria:)';

    use HasFactory;

    public function cadastreSe() {
        $users = CadastroUser::all();
        return $users;
    }

}


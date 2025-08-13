<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Nessa tabela nn precisa escrever toda a descrição, o blueprint já faz isso para vc.
        Schema::create('cadastro_users', function(Blueprint $table){
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 100)->unique();
            $table->string('senha', 20);
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

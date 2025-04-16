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
        //alteração de tabela para receber mais parâmetros. 
        Schema::create('receitas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title", 100);
            $table->text("description");
            $table->string("category");
            $table->integer("rating");
            $table->boolean("private"); 
        // necessidade de adicionar os seguintes campos
        //$table->text("ingredients);
        //$table->text("prepare_mode");
        //$table->string("time",10);
        //$table->string("rendiment",100);
        //table->boolean("chefs_favourite")->default(false);
        //tem que alterar o nome da coluna category para id_category



        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receitas');
    }
};

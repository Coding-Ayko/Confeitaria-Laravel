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
        Schema::table('recipes', function (Blueprint $table) {
            // Need to add the following fields:
            $table->text("ingredients");
            $table->text("prepare_mode");
            $table->string("time", 10);
            $table->string("rendiment", 100);
            $table->boolean("chefs_favourite")->default(false);

            // To rename the column 'category' to 'id_category', it was necessary to run:
            // composer require doctrine/dbal
            $table->renameColumn("category", "id_category");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
            // Revert changes
            $table->dropColumn("ingredients", "prepare_mode", "time", "rendiment", "chefs_favourite");
            $table->renameColumn("id_category","category");
        });
    }
};

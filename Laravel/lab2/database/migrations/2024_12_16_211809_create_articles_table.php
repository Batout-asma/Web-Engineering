<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Exécute les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Crée une colonne 'id' (clé primaire)
            $table->string('title'); // Crée une colonne 'title' (VARCHAR)
            $table->text('content'); // Crée une colonne 'content' (TEXT)
            $table->timestamps(); // Crée 'created_at' et 'updated_at'
        });
    }

    /**
     * Annule les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

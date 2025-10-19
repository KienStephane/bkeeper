<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('client_id')->comment('Identifiant du client');// Clé primaire auto-incrémentée
            $table->string('client_nom', 50)->comment('Nom du client');
            $table->string('client_prenom', 50)->comment('Prénom du client');
            $table->string('client_tel', 20)->comment('Numéro de téléphone');// String pour garder le + si besoin du code pays
            $table->string('client_club', 50)->comment('Nom du club du client');
            $table->string('client_categorie', 20)->comment('Catégorie du client');
            $table->timestamps(); // created_at / updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};

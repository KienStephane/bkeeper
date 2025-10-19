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
        Schema::create('gants', function (Blueprint $table) {
            $table->increments('gant_id')->comment('Identifiant du gant');// Clé primaire auto-incrémentée
            $table->string('gant_nom', 50)->comment('Nom du gant');
            $table->integer('gant_taille')->comment('Taille du gant');
            $table->decimal('gant_prix_client', 5, 2)->comment('Prix client du gant');
            $table->decimal('gant_prix_revendeur', 5, 2)->comment('Prix revendeur du gant');
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
        Schema::dropIfExists('gants');
    }
};

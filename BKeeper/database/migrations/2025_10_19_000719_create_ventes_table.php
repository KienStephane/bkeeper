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
        Schema::create('ventes', function (Blueprint $table) {
            $table->increments('vente_id')->comment('Identifiant de la vente');// Clé primaire auto-incrémentée
            $table->integer('vente_client_id')->comment('Identifiant du client qui à acheté');
            $table->integer('vente_gant_id')->comment('Identifiant du gant vendu');
            $table->integer('vente_quantite')->comment('Quantité du même gant vendu');
            $table->decimal('vente_prix_client', 7, 2)->comment('Prix client total des mêmes gants vendu');
            $table->string('vente_date', 8)->comment('Date de la vente');
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
        Schema::dropIfExists('ventes');
    }
};

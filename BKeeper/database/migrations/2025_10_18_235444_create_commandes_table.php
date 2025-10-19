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
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('commande_id')->comment('Identifiant de la commande');// Clé primaire auto-incrémentée
            $table->integer('commande_gant_id')->comment('Identifiant du gant commandé');
            $table->integer('commande_quantite')->comment('Quantité du même gant commandé');
            $table->decimal('commande_prix_revendeur', 7, 2)->comment('Prix revendeur total des mêmes gants commandés');
            $table->string('commande_date', 8)->comment('Date de la commande');
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
        Schema::dropIfExists('commandes');
    }
};

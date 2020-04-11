<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIntermediaire1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produitcommandeab', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('produit_id')->unsigned()->index();
             $table->integer('commandeab_id')->unsigned()->index();
             $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
             $table->foreign('commandeab_id')->references('id')->on('commandeabonnee')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produitcommandeab');
    }
}

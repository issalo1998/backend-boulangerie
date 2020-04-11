<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIntermediaire2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produitcommande', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('produit_id')->unsigned()->index();
              $table->integer('commande_id')->unsigned()->index();
             $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
             $table->foreign('commande_id')->references('id')->on('commande')->onDelete('cascade');
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
        Schema::dropIfExists('produitcommande');
    }
}

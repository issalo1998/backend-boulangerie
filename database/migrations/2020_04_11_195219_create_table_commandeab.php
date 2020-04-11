<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCommandeab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandeabonnee', function (Blueprint $table) {
             $table->increments('id');
             $table->date("date");
             $table->string("mois");
             $table->integer('nombreticket');
             $table->integer('abonne_id')->unsigned()->index();
             $table->foreign('abonne_id')->references('id')->on('abonne')->onDelete('cascade');
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
        Schema::dropIfExists('commandeabonnee');
    }
}

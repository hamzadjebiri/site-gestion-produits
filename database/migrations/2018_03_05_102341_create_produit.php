<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


Schema::defaultStringLength(191);


class CreateProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {

             $table->increments('id_produit');

             $table->string('nom_produit');

             $table->string('site_produit');

             $table->float('prix_produit');

             $table->float('reference');

             $table->string('photo1_produit')->default('default.jpg');
             
             $table->integer('nom_marque')->unsigned();

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
        Schema::dropIfExists('produit');
    }
}

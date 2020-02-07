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

             $table->string('Nom_Produit');

             $table->string('Site_Produit');

             $table->float('Prix_Produit');

             $table->float('Référence');

             $table->string('Photo1_Produit')->default('default.jpg');
             
             //foreign key indirectly 
             $table->integer('Nom_Marque')->unsigned();

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

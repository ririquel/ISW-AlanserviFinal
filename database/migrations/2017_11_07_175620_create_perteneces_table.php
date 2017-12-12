<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertenecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perteneces', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');
=======
>>>>>>> origin/master
            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materiales')->onDelete('cascade');
            $table->integer('factura_id');
            $table->foreign('factura_id')->references('numero_factura')->on('facturas')->onDelete('cascade');
<<<<<<< HEAD
=======
            $table->integer('valor_total');
>>>>>>> origin/master
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
        Schema::drop('perteneces');
    }
}

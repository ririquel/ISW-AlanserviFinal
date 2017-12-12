<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_obra',100);
            $table->string('direccion_obra',100);
            $table->string('empresa_obra',100);
            $table->enum('rubro_obra', ['Servicio Publico','Privado'])->default('Privado');
            $table->integer('telefono_obra');
            $table->rememberToken();
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
        Schema::drop('obras');
    }
}

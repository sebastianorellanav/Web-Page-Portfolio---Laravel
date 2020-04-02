<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColeccionEtiquetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coleccion_etiquetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('id_coleccion')->unsigned()->nullable();
            $table->foreign('id_coleccion')->references('id')->on('coleccions')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_etiqueta')->unsigned()->nullable();
            $table->foreign('id_etiqueta')->references('id')->on('etiquetas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coleccion_etiquetas');
    }
}

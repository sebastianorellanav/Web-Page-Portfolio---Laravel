<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColeccionFotografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coleccion_fotografias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('id_coleccion')->unsigned()->nullable();
            $table->foreign('id_coleccion')->references('id')->on('coleccions')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_fotografia')->unsigned()->nullable();
            $table->foreign('id_fotografia')->references('id')->on('fotografias')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coleccion_fotografias');
    }
}

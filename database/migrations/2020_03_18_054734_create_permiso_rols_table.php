<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('id_permiso')->unsigned()->nullable();
            $table->foreign('id_permiso')->references('id')->on('permisos')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_rol')->unsigned()->nullable();
            $table->foreign('id_rol')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso_rols');
    }
}

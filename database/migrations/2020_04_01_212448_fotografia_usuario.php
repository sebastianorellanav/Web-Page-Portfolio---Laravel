<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FotografiaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotografia_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('id_fotografia')->unsigned()->nullable();
            $table->foreign('id_fotografia')->references('id')->on('fotografias')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotografia_users');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteRolUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merlin_rol_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_rol')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('merlin_users');
            $table->foreign('id_rol')->references('id')->on('merlin_rol');
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
        Schema::drop('merlin_rol_user');
    }
}

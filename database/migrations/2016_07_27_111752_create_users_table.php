<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('idrole')->unsigned();
            $table->string('foto',50)->default('assets/pages/img/avatars/nofoto.jpg');
            $table->string('menu',50)->default('menu.sider-admin');
            $table->boolean('activo')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('idrole')->references('id')->on('catalogo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

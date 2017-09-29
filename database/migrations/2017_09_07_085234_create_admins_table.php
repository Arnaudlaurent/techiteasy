<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users__admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login', '255')->unique();
            $table->string('first_name', '255');
            $table->string('name', '255');
            $table->string('email', '255');
            $table->string('password', '255');
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
        Schema::dropIfExists('admins');
    }
}
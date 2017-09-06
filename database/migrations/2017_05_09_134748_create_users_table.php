<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('login', '255')->unique();
            $table->string('email', '255');
            $table->string('password', '255');
            $table->rememberToken();
            $table->timestamps();
            $table->tinyInteger('questionnaire0');
            $table->tinyInteger('questionnaire1');
            $table->tinyInteger('questionnaire2');
            $table->time('option_tps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

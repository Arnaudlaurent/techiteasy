<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users__candidats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', '255');
            $table->string('name', '255');
            $table->string('email', '255');
            $table->tinyInteger('q0');
            $table->tinyInteger('q1');
            $table->tinyInteger('q2');
            $table->time('option_tps');
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
        Schema::dropIfExists('candidats');
    }
}

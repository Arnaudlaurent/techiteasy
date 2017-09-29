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

            /*$table->integer('admin');
            $table->integer('candidat');
            $table->integer('admin_id')->unsigned()->nullable();
            $table->integer('candidat_id')->unsigned()->nullable();

            $table->unique(['admin_id', 'candidat_id']);

            #foreign keys
            $table->foreign('admin_id')->references('id')->on('users__admins')->onDelete('SET NULL');
            $table->foreign('candidat_id')->references('id')->on('users__candidats')->onDelete('SET NULL');*/
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

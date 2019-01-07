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
            $table->increments('iduser');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('country');
            $table->date('dateofbirth');
            $table->string('username');
            $table->string('password');
            $table->binary('profile');
            $table->boolean('delete');
            $table->string('interests');
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

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
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('sex')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->string('city')->nullable();
            $table->longText('description')->nullable();
            $table->string('avatar', 100)->nullable();
			      $table->string('phone', 100)->nullable();
            $table->string('email')->unique();
            $table->integer('achievement_id')->unsigned()->nullable();
            $table->foreign('achievement_id')->references('id')->on('achievements');
            $table->boolean('profil_completed')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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

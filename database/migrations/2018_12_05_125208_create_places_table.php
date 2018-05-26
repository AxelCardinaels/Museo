<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adress');
            $table->float('note')->default(0);
            $table->string('lng')->nullable();
            $table->string('lat')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('website')->nullable();
            $table->longText('description')->nullable();
            $table->string('main_picture')->nullable();
            $table->integer('creator_id')->unsigned()->nullable();
            $table->foreign('creator_id')->references('id')->on('users');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('places');
    }
}

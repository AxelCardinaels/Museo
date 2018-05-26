<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriaRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_rating', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('note');
            $table->integer('rating_id')->unsigned();
            $table->foreign('rating_id')->references('id')->on('ratings')->onDelete('cascade');
            $table->integer('criteria_id')->unsigned();
            $table->foreign('criteria_id')->references('id')->on('criterias')->onDelete('cascade');
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
        Schema::dropIfExists('criteria_rating');
    }
}

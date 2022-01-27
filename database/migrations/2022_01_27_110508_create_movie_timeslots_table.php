<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTimeslotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_timeslots', function (Blueprint $table) {
            $table->unsignedBigInteger('movies_id');
            $table->unsignedBigInteger('timeslot_id');
            $table->foreign('movies_id')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('timeslot_id')->references('id')->on('timeslots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_timeslots');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price', 3, 2);
            $table->string('rating');
            $table->string('image')->default('user.png');
            // $table->string('director');
            // $table->string('stars');
            $table->year('year');
            $table->integer('runtime');
            $table->longText('description');
            // $table->foreignId('genre_id')->reference('id')->on('genre');
            $table->timestamps();

            $table->string('img');
            $table->date('start_date');
            $table->date('end_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
}

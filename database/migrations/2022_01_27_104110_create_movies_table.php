<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price', 5, 2);
            $table->string('runtime');
            $table->string('rating');
            $table->string('director');
            $table->string('genre');
            $table->string('img')->default('app/public/movies/placeholder.png');
            $table->year('year');
            $table->longText('description');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('movies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // $data = array(
        //     array('Action'),
        //     array('Adventure'),
        //     array('Animation'),
        //     array('Biography'),
        //     array('Comedy'),
        //     array('Crime'),
        //     array('Drama'),
        //     array('Horror'),
        //     array('Music'),
        //     array('Mystery'),
        //     array('Romance'),
        //     array('Thriller'),
        //     array('War'),
        // );

        // DB::table('genre')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre');
    }
}

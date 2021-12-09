<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('Action'),
            array('Adventure'),
            array('Animation'),
            array('Biography'),
            array('Comedy'),
            array('Crime'),
            array('Drama'),
            array('Horror'),
            array('Music'),
            array('Mystery'),
            array('Romance'),
            array('Thriller'),
            array('War'),
        );

        DB::table('genre')->insert($data);
    }
}

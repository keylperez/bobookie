<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            array('name' => 'Action'),
            array('name' => 'Adventure'),
            array('name' => 'Animation'),
            array('name' => 'Biography'),
            array('name' => 'Comedy'),
            array('name' => 'Crime'),
            array('name' => 'Drama'),
            array('name' => 'Horror'),
            array('name' => 'Music'),
            array('name' => 'Mystery'),
            array('name' => 'Romance'),
            array('name' => 'Thriller'),
            array('name' => 'War'),
        );

        DB::table('genre')->insert($data);
    }
}
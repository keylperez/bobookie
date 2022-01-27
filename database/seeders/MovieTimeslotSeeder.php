<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'movie_id' => '1',
                'timeslot_id' => '1',
            ),
            array(
                'movie_id' => '1',
                'timeslot_id' => '4',
            ),
            array(
                'movie_id' => '2',
                'timeslot_id' => '1',
            ),
            array(
                'movie_id' => '2',
                'timeslot_id' => '3',
            )
        );
        DB::table('movie_timeslot')->insert($data);
        //
    }
}

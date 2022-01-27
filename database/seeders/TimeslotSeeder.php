<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeslotSeeder extends Seeder
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
                'timeslot' => '11:00 AM',
            ),
            array(
                'timeslot' => '1:00 PM',
            ),
            array(
                'timeslot' => '3:00 PM',
            ),
            array(
                'timeslot' => '6:00 PM',
            ),
        );
        DB::table('timeslots')->insert($data);
        //
    }
}

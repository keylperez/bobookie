<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
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
                'user_id' => 4,
                'movie_id' => 1,
                'name' => 'dummy',
                'timeslot' => '11:00 AM',
                'date' => '2021-12-22',
                'status' => 'Confirmed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'user_id' => 4,
                'movie_id' => 2,
                'name' => 'dummy',
                'timeslot' => '1:00 PM',
                'date' => '2021-12-25',
                'status' => 'Confirmed',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );
        DB::table('tickets')->insert($data);
        //
    }
}

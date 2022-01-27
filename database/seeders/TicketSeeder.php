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
                'quantity' => 3,
                'user_id' => 1,
                'movie_id' => 1,
                'timeslot' => '11:00 AM',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'quantity' => 1,
                'user_id' => 2,
                'movie_id' => 2,
                'timeslot' => '1:00 PM',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );
        DB::table('tickets')->insert($data);
        //
    }
}

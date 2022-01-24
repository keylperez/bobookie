<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
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
                'title' => 'The Eternals',
                'price' => 125.00,
                'rating' => 5.0,
                'year' => 2021,
                'runtime' => 128,
                'description' => 'The Eternals, a race of immortal beings with superhuman powers who have secretly lived on Earth for thousands of years, reunite to battle the evil Deviants.',
                'start_date' => Carbon::parse('2021-12-20'),
                'end_date' => Carbon::parse('2022-01-15'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'title' => 'Venom',
                'price' => 230.00,
                'rating' => 4.0,
                'year' => 2021,
                'runtime' => 97,
                'description' => 'Eddie Brock is still struggling to coexist with the shape-shifting extraterrestrial Venom. When deranged serial killer Cletus Kasady also becomes host to an alien symbiote, Brock and Venom must put aside their differences to stop his reign of terror.',
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );

        DB::table('movie')->insert($data);
    }
}

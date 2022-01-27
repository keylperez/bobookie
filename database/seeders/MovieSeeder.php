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
                'rating' => 'PG-13',
                'year' => 2021,
                'runtime' => '1hr 58min',
                'img' => 'movies/eternals_poster.jpg',
                'description' => 'The Eternals, a race of immortal beings with superhuman powers who have secretly lived on Earth for thousands of years, reunite to battle the evil Deviants.',
                'start_date' => Carbon::parse('2021-12-20'),
                'end_date' => Carbon::parse('2022-01-15'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'title' => 'Venom',
                'price' => 230.00,
                'rating' => 'PG-13',
                'year' => 2021,
                'runtime' => '2hr 53min',
                'img' => 'movies/venom_poster.jpg',
                'description' => 'Eddie Brock is still struggling to coexist with the shape-shifting extraterrestrial Venom. When deranged serial killer Cletus Kasady also becomes host to an alien symbiote, Brock and Venom must put aside their differences to stop his reign of terror.',
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );

        DB::table('movies')->insert($data);
    }
}

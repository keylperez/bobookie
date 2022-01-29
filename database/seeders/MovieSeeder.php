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
                'director' => 'Chloé Zhao',
                'genre' => 'Superhero',
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
                'director' => 'Ruben Fleischer',
                'genre' => 'Horror',
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
            array(
                'title' => 'Moon Knight',
                'director' => 'Mohamed Diab',
                'genre' => 'Superhero',
                'price' => 230.00,
                'rating' => 'PG-13',
                'year' => 2022,
                'runtime' => '2hr 12min',
                'img' => 'movies/moonknight_poster.jpg',
                'description' => 'Moon Knight is a fictional character appearing in American comic books published by Marvel Comics. Created by writer Doug Moench and artist Don Perlin, the character first appeared in Werewolf by Night #32.',
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'title' => 'Spiderman: No Way Home',
                'director' => 'Jon Watts',
                'genre' => 'Superhero',
                'price' => 300.00,
                'rating' => 'PG-13',
                'year' => 2022,
                'runtime' => '3hr 45min',
                'img' => 'movies/spiderman_poster.jpg',
                'description' => "With Spider-Man's identity now revealed, our friendly neighborhood web-slinger is unmasked and no longer able to separate his normal life as Peter Parker from the high stakes of being a superhero. When Peter asks for help from Doctor Strange, the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.",
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'title' => 'The Matrix Resurrections',
                'director' => 'Lana Wachowski',
                'genre' => 'Fantasy',
                'price' => 500.00,
                'rating' => 'PG-13',
                'year' => 2022,
                'runtime' => '2hr 45min',
                'img' => 'movies/matrix_poster.jpg',
                'description' => "To find out if his reality is a physical or mental construct, Mr. Anderson, aka Neo, will have to choose to follow the white rabbit once more. If he's learned anything, it's that choice, while an illusion, is still the only way out of -- or into -- the Matrix. Neo already knows what he has to do, but what he doesn't yet know is that the Matrix is stronger, more secure and far more dangerous than ever before.",
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'title' => 'Shang-Chi',
                'director' => 'Destin Daniel Cretton',
                'genre' => 'Action',
                'price' => 500.00,
                'rating' => 'PG-13',
                'year' => 2022,
                'runtime' => '2hr 45min',
                'img' => 'movies/shangchi_poster.jpg',
                'description' => "To find out if his reality is a physical or mental construct, Mr. Anderson, aka Neo, will have to choose to follow the white rabbit once more. If he's learned anything, it's that choice, while an illusion, is still the only way out of -- or into -- the Matrix. Neo already knows what he has to do, but what he doesn't yet know is that the Matrix is stronger, more secure and far more dangerous than ever before.",
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'title' => 'Avatar 2',
                'director' => 'James Cameron',
                'genre' => 'Sci-fi',
                'price' => 600.00,
                'rating' => 'PG-13',
                'year' => 2022,
                'runtime' => '3hr 45min',
                'img' => 'movies/avatar_poster.jpg',
                'description' => "Jake Sully and Ney'tiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.",
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );

        DB::table('movies')->insert($data);
    }
}

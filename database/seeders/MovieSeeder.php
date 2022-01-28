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
            array(
                'title' => 'Moon Knight',
                'price' => 230.00,
                'rating' => 'PG-13',
                'year' => 2022,
                'runtime' => '2hr 12min',
                'img' => 'movies/moonknight_poster.jpeg',
                'description' => 'Moon Knight is a fictional character appearing in American comic books published by Marvel Comics. Created by writer Doug Moench and artist Don Perlin, the character first appeared in Werewolf by Night #32.',
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'title' => 'Spiderman: No Way Home',
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
                'title' => 'Matrix',
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
            array(
                'title' => 'Encanto',
                'price' => 299.00,
                'rating' => 'PG-13',
                'year' => 2022,
                'runtime' => '2hr 30min',
                'img' => 'movies/encanto_poster.jpeg',
                'description' => "Encanto tells the tale of an extraordinary family, the Madrigals, who live hidden in the mountains of Colombia, in a magical house, in a vibrant town, in a wondrous, charmed place called an Encanto.",
                'start_date' => Carbon::parse('2021-12-8'),
                'end_date' => Carbon::parse('2022-01-8'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            )
        );

        DB::table('movies')->insert($data);
    }
}

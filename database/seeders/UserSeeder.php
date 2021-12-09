<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('keyl', 'yuutaro', 'keyl@gmail.com', Hash::make('ejsux'), 'admin'),
            array('marc', 'marco', 'marco@gmail.com', Hash::make('marcawesome', 'admin')),
            array('hannah', 'draemada', 'hannah@gmail.com', Hash::make('keylawesome', 'admin')),
            array('dummy', 'dum', 'dum@gmail.com', Hash::make('dumpass', 'user')),
        );
        DB::table('users')->insert($data);
        // DB::table('users')->insert(
        //     array(
        //         'name' => 'keyl',
        //         'username' => 'yuutaro',
        //         'email' => 'keyl@gmail.com',
        //         'password' => Hash::make('ejsux'),
        //         'type' => 'admin'
        //     )
        // );

        // DB::table('users')->insert(
        //     array(
        //         'name' => 'marc',
        //         'username' => 'marco',
        //         'email' => 'marc@gmail.com',
        //         'password' => Hash::make('marcawesome'),
        //         'type' => 'admin'
        //     )
        // );

        // DB::table('users')->insert(
        //     array(
        //         'name' => 'hannah',
        //         'username' => 'draemada',
        //         'email' => 'hannah@gmail.com',
        //         'password' => Hash::make('keylawesome'),
        //         'type' => 'admin'
        //     )
        // );

        // DB::table('users')->insert(
        //     array(
        //         'name' => 'dumdum',
        //         'username' => 'dummyacc',
        //         'email' => 'dum@gmail.com',
        //         'password' => Hash::make('thisdum'),
        //         'type' => 'user'
        //     )
        // );
    }
}

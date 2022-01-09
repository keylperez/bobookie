<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            array(
                'name' =>  'keyl',
                'username' => 'yuutaro',
                'email' => 'keyl@gmail.com',
                'password' => Hash::make('ejsux'),
                'type' => 'admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'name' =>  'marc',
                'username' =>  'marco',
                'email' =>  'marco@gmail.com',
                'password' =>  Hash::make('marcawesome'),
                'type' =>  'admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'name' =>  'hannah',
                'username' =>  'draemada',
                'email' =>  'hannah@gmail.com',
                'password' =>  Hash::make(
                    'keylawesome'
                ),
                'type' =>  'admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'name' =>  'dummy',
                'username' =>  'dum',
                'email' =>  'dum@gmail.com',
                'password' =>  Hash::make(
                    'dumpass'
                ),
                'type' =>  'user',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
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

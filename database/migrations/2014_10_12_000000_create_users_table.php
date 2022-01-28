<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('username')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('type', ['admin', 'user'])->default('user');
            // $table->rememberToken();
            $table->timestamps();
        });

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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

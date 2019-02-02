<?php

use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'team_name' => 'admin',
            'email' => 'admin@vocomfest.com',
            'role' => '1',
            'password' => bcrypt('vocomfest19'),
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'team_name' => 'WDC TEAM',
            'email' => 'wdc@gmail.com',
            'role' => '3',
            'password' => bcrypt('vocomfest19'),
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'team_name' => 'MADC TEAM',
            'role' => '2',
            'email' => 'madc@gmail.com',
            'password' => bcrypt('vocomfest19'),
        ]);

        DB::table('users')->insert([
            'id' => '4',
            'team_name' => 'asfdasdas',
            'email' => 'asdasd@vocoasdasdmfest.com',
            'role' => '3',
            'password' => bcrypt('asdas'),
        ]);
        DB::table('users')->insert([
            'id' => '5',
            'team_name' => 'WDC TEAM',
            'email' => 'asdasd@gmail.com',
            'role' => '3',
            'password' => bcrypt('vocomfest19'),
        ]);
        DB::table('users')->insert([
            'id' => '6',
            'team_name' => 'MADC TEAM',
            'role' => '2',
            'email' => 'asdasdsad@gmail.com',
            'password' => bcrypt('vocomfest19'),
        ]);
        DB::table('users')->insert([
            'id' => '7',
            'team_name' => 'MADC TEAM',
            'role' => '2',
            'email' => 'sdadsdsd@gmail.com',
            'password' => bcrypt('vocomfest19'),
        ]);

        // factory(\App\User::class, 200)->create();
    }
}

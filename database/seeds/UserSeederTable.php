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
            'leader_email' => 'admin@vocomfest.com',
            'role' => '1',
            'password' => bcrypt('vocomfest19'),
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'team_name' => 'WDC TEAM',
            'leader_email' => 'wdc@gmail.com',
            'role' => '3',
            'password' => bcrypt('vocomfest19'),
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'team_name' => 'MADC TEAM',
            'role' => '2',
            'leader_email' => 'madc@gmail.com',
            'password' => bcrypt('vocomfest19'),
        ]);

        //factory(\App\User::class, 200)->create();
    }
}

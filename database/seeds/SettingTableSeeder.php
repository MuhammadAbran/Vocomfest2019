<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => 'Registration',
            'is_active' => 1,
        ]);

        DB::table('settings')->insert([
            'name' => 'Payment',
            'is_active' => 1,
        ]);
        DB::table('settings')->insert([
            'name' => 'Submssion #1',
            'is_active' => 1,
        ]);
        DB::table('settings')->insert([
            'name' => 'Submssion #2',
            'is_active' => 1,
        ]);
    }
}

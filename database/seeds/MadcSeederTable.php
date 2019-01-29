<?php

use Illuminate\Database\Seeder;

class MadcSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('madcs')->insert([
            'user_id' => '3',
            'leader_name' => 'Ade Dwi Putra',
            'leader_phone' => '082182627382',
            'instance_name' => 'UGM',
            'instance_address' => 'Bulaksumur',
            'co_leader_name' => 'EL',
            'co_leader_phone' => '082182627382',
            'co_leader_email' => 'el@gmail.com',
            'member_name' => 'Akazu',
            'member_email' => 'Akazu@gmail.com',
            'member_phone' => '082182627382',
            'progress' => '1'

        ]);
        DB::table('madcs')->insert([
            'user_id' => '3',
            'leader_name' => 'Ade Dwi Putra',
            'leader_phone' => '082182627382',
            'instance_name' => 'UGM',
            'instance_address' => 'Bulaksumur',
            'co_leader_name' => 'EL',
            'co_leader_phone' => '082182627382',
            'co_leader_email' => 'asdasd@gmail.com',
            'member_name' => 'Akazu',
            'member_email' => 'Akazu@gmail.com',
            'member_phone' => '082182627382',
            'progress' => '1'

        ]);
        DB::table('madcs')->insert([
            'user_id' => '3',
            'leader_name' => 'Ade Dwi Putra',
            'leader_phone' => '082182627382',
            'instance_name' => 'UGM',
            'instance_address' => 'Bulaksumur',
            'co_leader_name' => 'EL',
            'co_leader_phone' => '082182627382',
            'co_leader_email' => 'asdasd@gmail.com',
            'member_name' => 'Akazu',
            'member_email' => 'Akazu@gmail.com',
            'member_phone' => '082182627382',
            'progress' => '1'

        ]);

        //factory(\App\Madc::class, 100)->create();
    }
}

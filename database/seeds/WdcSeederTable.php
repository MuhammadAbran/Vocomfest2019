<?php

use Illuminate\Database\Seeder;

class WdcSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wdcs')->insert([
            'user_id' => '2',
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

        //factory(\App\Wdc::class, 100)->create();
    }
}

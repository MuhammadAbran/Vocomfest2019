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
        factory(\App\Madc::class, 100)->create();
    }
}

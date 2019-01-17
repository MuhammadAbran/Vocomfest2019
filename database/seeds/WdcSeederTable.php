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
        factory(\App\Wdc::class, 100)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeederTable::class);
        $this->call(MadcSeederTable::class);
        $this->call(WdcSeederTable::class);
        $this->call(SubmissionSeederTable::class);
        $this->call(NewsTableSeeder::class);
        $this->call(PaymentSeederTable::class);
        $this->call(GalleryTableSeeder::class);

    }
}

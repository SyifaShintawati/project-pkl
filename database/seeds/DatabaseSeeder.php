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
        $this->call(pendaftaranTableSeeder::class);
        $this->call(bukuTableSeeder::class);
        $this->call(bioTableSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\JenisSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JenisSeeder::class);
        $this->call(UserSeeder::class);
    }
}

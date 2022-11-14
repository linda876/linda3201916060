<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bendahara',
            'email' => 'GerejaST@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jenis;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create([
            'jenis' => 'Pemasukan Kolekte'
        ]);
        Jenis::create([
            'jenis' => 'Pemasukan Sumbangan'
        ]);
        Jenis::create([
            'jenis' => 'Pengeluaran'
        ]);
    }
}

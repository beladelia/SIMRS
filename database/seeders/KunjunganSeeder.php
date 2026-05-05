<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kunjungan;

class KunjunganSeeder extends Seeder
{
    public function run(): void
    {
        Kunjungan::create([
            'dokter_id' => 1,
            'tanggal' => '2026-05-01',
            'biaya' => 100000,
            'kepuasan' => 4
        ]);

        Kunjungan::create([
            'dokter_id' => 1,
            'tanggal' => '2026-05-02',
            'biaya' => 150000,
            'kepuasan' => 5
        ]);

        Kunjungan::create([
            'dokter_id' => 2,
            'tanggal' => '2026-05-03',
            'biaya' => 200000,
            'kepuasan' => 3
        ]);

        Kunjungan::create([
            'dokter_id' => 3,
            'tanggal' => '2026-05-04',
            'biaya' => 250000,
            'kepuasan' => 4
        ]);
    }
}
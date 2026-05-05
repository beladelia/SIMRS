<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokter;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        Dokter::create([
            'nama' => 'Dr. Andi',
            'spesialisasi' => 'Umum'
        ]);

        Dokter::create([
            'nama' => 'Dr. Siti',
            'spesialisasi' => 'Anak'
        ]);

        Dokter::create([
            'nama' => 'Dr. Budi',
            'spesialisasi' => 'Bedah'
        ]);
    }
}
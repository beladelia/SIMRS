<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DokterSeeder;
use Database\Seeders\KunjunganSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DokterSeeder::class,
            KunjunganSeeder::class,
        ]);
    }
}

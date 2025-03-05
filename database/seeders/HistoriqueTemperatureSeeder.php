<?php

namespace Database\Seeders;

use App\Models\HistoriqueTemperature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistoriqueTemperatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HistoriqueTemperature::factory(1000)->create();
    }
}

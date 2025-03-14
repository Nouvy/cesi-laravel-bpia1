<?php

namespace Database\Seeders;

use App\Models\Capteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Capteur::factory(100)->create();
    }
}

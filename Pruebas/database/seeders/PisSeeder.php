<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pis;

class PisSeeder extends Seeder
{
    
    public function run(): void
    {
        Pis::factory()->count(10)->create();
    }
}

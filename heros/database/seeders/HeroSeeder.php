<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::create([
            'name' => 'Superman',
            'gender' => 'Male',
            'race' => 'Kryptonian',
            'description' => 'A superhero from Krypton with immense strength.',
            'skill_id' => 1, 
        ]);

        Hero::create([
            'name' => 'Wonder Woman',
            'gender' => 'Female',
            'race' => 'Amazonian',
            'description' => 'A warrior princess with superhuman strength and combat skills.',
            'skill_id' => 2, 
        ]);
    }
}

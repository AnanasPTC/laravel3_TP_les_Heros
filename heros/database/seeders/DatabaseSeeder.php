<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\HeroSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Appel des autres seeders
        $this->call([
            SkillSeeder::class,
            HeroSeeder::class,
        ]);
    }
}



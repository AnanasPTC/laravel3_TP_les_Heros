<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Skillseeder extends Seeder
{
    public function run(): void
    {
        Skill::create([
            'name' => 'Fly',
        ]);
        
        Skill::create([
            'name' => 'Strenght',
        ]);
    }
}

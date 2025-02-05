<?php

namespace Database\Seeders;

use App\Models\Stormtrooper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StormtrooperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stormtrooper::factory()->create([
            "name" => "Anakin",
            "isActive" => true
        ]);

        Stormtrooper::factory(66)->create();
    }
}

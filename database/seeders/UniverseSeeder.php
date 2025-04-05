<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universe;  // Make sure this line is included

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Marvel and DC universes
        Universe::create(['name' => 'Marvel']);
        Universe::create(['name' => 'DC']);
    }
}

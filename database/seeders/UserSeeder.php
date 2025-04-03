<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Diego Diaz Gonzalez Manjarrez',
            'email' => 'diazdgm946@gmail.com', // Change to your preferred email
            'password' => Hash::make('Nachos2003'), // Change to your preferred password
        ]);
    }
}

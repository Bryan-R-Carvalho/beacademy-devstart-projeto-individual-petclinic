<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Owner::factory(5)->create();
        \App\Models\Pet::factory(5)->create();
        \App\Models\Vaccine::factory(5)->create();
        //\App\Models\VaccinePet::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

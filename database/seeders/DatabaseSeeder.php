<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'John',
            'middle_name' => 'D',
            'last_name' => 'Doe',
            'date_of_birth' => '1990-01-01',
            'place_of_birth' => 'New York',
            'sex' => 'Male',
            'citizenship' => 'American',
            'contact_number' => '1234567890',
            'has_existing_policy' => true,
            'interested_policies' => json_encode(['life', 'health']),
            'wants_representative' => false,
            'preferred_branch' => 'Main Office',
            'preferred_contact_methods' => json_encode(['email', 'phone']),
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

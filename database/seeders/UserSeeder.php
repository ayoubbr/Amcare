<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a specific admin user
        User::create([
            'name' => 'Admin Ambulance',
            'email' => 'admin@ambulance.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), 
            'phone' => '+212600000000',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create 3 more random users
        // User::factory()->count(3)->create();

        // Or, if you prefer to define them explicitly:
        /*
        $users = [
            [
                'name' => 'Jean Dupont',
                'email' => 'jean.dupont@example.com',
                'password' => Hash::make('MotDePasse1!'),
                'phone' => '+33612345678',
            ],
            [
                'name' => 'Marie Curie',
                'email' => 'marie.curie@example.com',
                'password' => Hash::make('MotDePasse2@'),
                'phone' => '+33712345679',
            ],
            [
                'name' => 'Pierre Martin',
                'email' => 'pierre.martin@example.com',
                'password' => Hash::make('MotDePasse3#'),
                'phone' => '+33687654321',
            ],
        ];

        foreach ($users as $userData) {
            User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'email_verified_at' => now(),
                'password' => $userData['password'],
                'phone' => $userData['phone'],
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        */
    }
}

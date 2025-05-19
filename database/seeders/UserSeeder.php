<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRoleId = Role::where('roleName', 'Admin')->first()?->id;
        $adminRoleId = $adminRoleId ?? 1;

        $admin = User::create([
            'name' => 'Abdellah abdo',
            'email' => 'abdo.abdell.2000@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('MyPlatform159'),
            'role_id' => $adminRoleId,
            'image' => null,
            'phone' => '0678125500',
            'remember_token' => null,
        ]);
    }
}

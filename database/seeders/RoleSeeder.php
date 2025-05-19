<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'roleName' => 'Admin',
                'description' => 'Accès complet à toutes les fonctionnalités de la plateforme',
            ],
        ];
        Role::upsert($roles, ['roleName'], ['description']);
    }
}

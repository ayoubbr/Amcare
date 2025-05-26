<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Zone; // Import Zone model

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zones = [
            [
                'name' => 'Casablanca Centre',
                'code' => 'CASA-CTR',
                'description' => 'Zone couvrant le centre-ville de Casablanca et les quartiers avoisinants.',
                'is_active' => true,
            ],
            [
                'name' => 'Rabat-Agdal',
                'code' => 'RBA-AGD',
                'description' => 'Zone couvrant le quartier Agdal à Rabat et ses environs.',
                'is_active' => true,
            ],
            [
                'name' => 'Marrakech Guéliz',
                'code' => 'RAK-GLZ',
                'description' => 'Zone de Guéliz et nouvelle ville de Marrakech.',
                'is_active' => true,
            ],
            [
                'name' => 'Tanger Ville',
                'code' => 'TNG-VIL',
                'description' => 'Zone urbaine de Tanger.',
                'is_active' => false, // Example of an inactive zone
            ],
        ];

        foreach ($zones as $zoneData) {
            Zone::create([
                'name' => $zoneData['name'],
                'code' => $zoneData['code'],
                'description' => $zoneData['description'],
                'is_active' => $zoneData['is_active'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

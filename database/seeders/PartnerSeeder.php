<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner; // Import Partner model

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name' => 'Hôpital Central de Casablanca',
                'logo_path' => 'assets/seed_images/partner-1.png',
                'website_url' => 'https://hopitalcasablanca.ma',
                'order' => 1,
                'is_published' => true,
            ],
            [
                'name' => 'Clinique Les Fleurs',
                'logo_path' => 'assets/seed_images/partner-2.png',
                'website_url' => 'https://cliniquelesfleurs.com',
                'order' => 2,
                'is_published' => true,
            ],
            [
                'name' => 'Assurances XYZ',
                'logo_path' => 'assets/seed_images/partner-3.jpg',
                'website_url' => 'https://assurancesxyz.ma',
                'order' => 3,
                'is_published' => true,
            ],
            [
                'name' => 'Ministère de la Santé Marocain',
                'logo_path' => 'assets/seed_images/partner-4.png',
                'website_url' => 'https://sante.gov.ma',
                'order' => 4,
                'is_published' => true,
            ],
        ];

        foreach ($partners as $partnerData) {
            Partner::create($partnerData);
        }
    }
}

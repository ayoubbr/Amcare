<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SliderImage; // Import SliderImage model

class SliderImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliderImages = [
            [
                'title' => 'Intervention Rapide 24/7',
                'image_path' => 'assets/seed_images/jeep-3.jpg',
                'order' => 1,
                'is_published' => true,
            ],
            [
                'title' => 'Technologie de Pointe',
                'image_path' => 'assets/seed_images/ambulance-team-2.jpg',
                'order' => 2,
                'is_published' => true,
            ],
            [
                'title' => 'Personnel Hautement Qualifié',
                'image_path' => 'assets/seed_images/hopital-2.jpg',
                'order' => 3,
                'is_published' => true,
            ],
            [
                'title' => 'Couverture Étendue',
                'image_path' => 'assets/seed_images/jeep-3.jpg',
                'order' => 4,
                'is_published' => false,
            ],
        ];

        foreach ($sliderImages as $imageData) {
            SliderImage::create($imageData);
        }
    }
}

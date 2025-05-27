<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExtraSetting;

class ExtraSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExtraSetting::updateOrCreate(
            ['key' => 'frontline_staff'],
            [
                'label' => 'Personnel de première ligne',
                'value' => '300',
                'icon_class' => 'icon-36', // Corresponds to your existing HTML
                'value_suffix' => '+',
                'order' => 1,
            ]
        );

        ExtraSetting::updateOrCreate(
            ['key' => 'specialized_vehicles'],
            [
                'label' => 'Véhicules spécialisés',
                'value' => '100',
                'icon_class' => 'icon-37', // Corresponds to your existing HTML
                'value_suffix' => '+',
                'order' => 2,
            ]
        );

        ExtraSetting::updateOrCreate(
            ['key' => 'patients_served'],
            [
                'label' => 'Patients servis',
                'value' => '15',
                'icon_class' => 'icon-38', // Corresponds to your existing HTML
                'value_suffix' => 'k+',
                'order' => 3,
            ]
        );

        // // Add a fourth one for variety, if needed for layout or future use
        // ExtraSetting::updateOrCreate(
        //     ['key' => 'successful_interventions'],
        //     [
        //         'label' => 'Interventions réussies',
        //         'value' => '98',
        //         'icon_class' => 'icon-like', // Example, you might need to add this icon class
        //         'value_suffix' => '%',
        //         'order' => 4,
        //     ]
        // );
    }
}

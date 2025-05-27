<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            PageSeeder::class,
            CategorySeeder::class,
            BlogPostSeeder::class,
            ServiceSeeder::class,
            ZoneSeeder::class,
            ServiceZoneSeeder::class,
            EventSeeder::class,
            FaqSeeder::class,
            SliderImageSeeder::class,
            PartnerSeeder::class,
            ExtraSettingSeeder::class,
        ]);
    }
}

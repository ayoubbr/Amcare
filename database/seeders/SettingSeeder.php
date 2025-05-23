<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'site_name' => 'Ambulance Team',
            'email' => 'Ambulance.team@yahoo.com',
            'logo' => 'assets/images/logo.png',
            'phones' => json_encode(['WhatsApp ' => '0637222220', 'WhatsApp' => '0661241832']),
            'footer_text' => '© 2025 Ambulance Team. All rights reserved.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

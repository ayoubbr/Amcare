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
            'email' => 'ambulance.team@yahoo.com',
            'logo' => 'assets/seed_images/logo-1-bg.png',
            'phones' =>  json_encode([
                ['key' => 'WhatsApp Business', 'value' => '+212637222220'],
                ['key' => 'WhatsApp', 'value' => '+212661241832']
            ]),
            'address' => 'Marrakech Marrakech-Safe, Maroc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Event; // Import Event model
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Journée Portes Ouvertes Amcare',
                'content' => '<p>Venez découvrir nos installations, rencontrer notre équipe et en apprendre plus sur nos services. Démonstrations de premiers secours et ateliers pour enfants.</p>',
                'event_date' => Carbon::now()->addMonths(1)->setHour(10)->setMinute(0),
                'location' => 'Siège Social Amcare, Casablanca',
                'image' => 'assets/seed_images/hopital-1.jpg',
                'is_published' => true,
            ],
            [
                'title' => 'Formation Gratuite aux Premiers Secours',
                'content' => '<p>Participez à notre session de formation gratuite aux gestes de premiers secours. Places limitées, inscription obligatoire.</p>',
                'event_date' => Carbon::now()->addWeeks(3)->setHour(14)->setMinute(30),
                'location' => 'Centre de Formation Amcare, Rabat',
                'image' => 'assets/seed_images/jeep-3.jpg',
                'is_published' => true,
            ],
            [
                'title' => 'Conférence sur la Prévention des Accidents Domestiques',
                'content' => '<p>Une conférence animée par des experts pour vous aider à identifier et prévenir les risques d\'accidents à la maison, notamment pour les enfants et les personnes âgées.</p>',
                'event_date' => Carbon::now()->addMonths(2)->setDay(15)->setHour(18)->setMinute(0),
                'location' => 'Palais des Congrès, Marrakech',
                'image' => 'assets/seed_images/ambulance-team-2.jpg',
                'is_published' => true,
            ],
            [
                'title' => 'Collecte de Sang en Partenariat avec l\'Hôpital Local',
                'content' => '<p>Amcare soutient la collecte de sang. Venez donner votre sang et sauver des vies. Chaque don compte.</p>',
                'event_date' => Carbon::now()->addDays(45)->setHour(9)->setMinute(0),
                'location' => 'Parking de l\'Hôpital Central',
                'image' => 'assets/seed_images/ambulance-team-3.jpg',
                'is_published' => false, // Example of an unpublished event
            ],
        ];

        foreach ($events as $eventData) {
            Event::create([
                'title' => $eventData['title'],
                'slug' => Str::slug($eventData['title']),
                'content' => $eventData['content'],
                'event_date' => $eventData['event_date'],
                'location' => $eventData['location'],
                'image' => $eventData['image'] ?? null,
                'is_published' => $eventData['is_published'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

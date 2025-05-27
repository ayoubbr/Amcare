<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Service; // Import Service model

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Transport Médical d\'Urgence',
                'short_description' => 'Intervention rapide pour toutes urgences médicales, 24h/24 et 7j/7.',
                'content' => '<p>Nos équipes d\'urgence sont prêtes à intervenir rapidement pour fournir des soins critiques et transporter les patients vers les établissements médicaux appropriés. Chaque ambulance est équipée de matériel de réanimation avancé.</p>',
                'image' => 'assets/seed_images/jeep-1.jpg',
                'order' => 1,
                'is_published' => true,
            ],
            [
                'title' => 'Transport Inter-Hospitalier',
                'short_description' => 'Transferts sécurisés de patients entre établissements de santé.',
                'content' => '<p>Nous assurons des transferts de patients stables ou critiques entre hôpitaux, cliniques ou centres de réadaptation, avec un suivi médical constant pendant le trajet.</p>',
                'image' => 'assets/seed_images/hopital-1.jpg',
                'order' => 2,
                'is_published' => true,
            ],
            [
                'title' => 'Assistance Événementielle',
                'short_description' => 'Couverture médicale pour événements sportifs, culturels et rassemblements.',
                'content' => '<p>Amcare propose des solutions de couverture médicale sur mesure pour tous types d\'événements, garantissant la sécurité des participants avec des équipes et du matériel adaptés sur site.</p>',
                'image' => 'assets/seed_images/hopital-2.jpg',
                'order' => 3,
                'is_published' => true,
            ],
            [
                'title' => 'Transport Sanitaire Non Urgent (VSL)',
                'short_description' => 'Transport pour consultations, examens, hospitalisations programmées.',
                'content' => '<p>Pour les déplacements médicaux non urgents, nos Véhicules Sanitaires Légers (VSL) offrent un transport confortable et adapté pour les patients autonomes ou nécessitant une aide légère.</p>',
                'image' => 'assets/seed_images/jeep-3.jpg',
                'order' => 4,
                'is_published' => true,
            ],
        ];

        foreach ($services as $serviceData) {
            Service::create([
                'title' => $serviceData['title'],
                'slug' => Str::slug($serviceData['title']),
                'short_description' => $serviceData['short_description'],
                'content' => $serviceData['content'],
                'image' => $serviceData['image'] ?? null,
                'order' => $serviceData['order'],
                'is_published' => $serviceData['is_published'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

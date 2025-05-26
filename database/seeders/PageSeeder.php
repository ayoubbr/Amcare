<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Page::where('slug', 'a-propos')->exists()) {
            Page::create([
                'title' => 'A Propos',
                'slug' => 'a-propos',
                'main_title' => 'L\'excellence dans les services médicaux d\'urgence',
                'content' => 'Chez Ambulance team, nous sommes fiers d\'offrir l\'excellence en matière de services médicaux d\'urgence. Notre équipe de professionnels hautement qualifiés et expérimentés',
                'meta_title' => 'À Propos de Amcare - Services Médicaux d\'Urgence',
                'meta_description' => 'Découvrez Amcare, votre partenaire de confiance pour des services médicaux d\'urgence rapides et fiables. Apprenez-en plus sur notre mission et notre équipe.',
                'description' => json_encode([
                    'Les équipes inclusives prennent en compte un plus large éventail de points de vue',
                    'Démontrer un engagement envers la diversité et l\'inclusion améliore',
                    'Adopter la diversité est conforme aux normes légales et éthiques'
                ]),
                'image' => 'assets/seed_images/sahara-1.jpg',
                'is_published' => true,
            ]);
        }

        if (!Page::where('slug', 'transport-securise')->exists()) {
            Page::create([
                'title' => 'Transport sécurisé',
                'slug' => 'transport-securise',
                'main_title' => '',
                'content' => 'Les services de transport sécurisé d\'Amcare jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable.',
                'meta_title' => '',
                'meta_description' => '',
                'description' => json_encode([]),
                'image' => 'assets/seed_images/vehicle.png',
                'is_published' => true,
            ]);
        }

        if (!Page::where('slug', 'service-sur-demande')->exists()) {
            Page::create([
                'title' => 'Service sur demande',
                'slug' => 'service-sur-demande',
                'main_title' => '',
                'content' => 'Les services de transport sécurisé d\'Amcare jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable.',
                'meta_title' => '',
                'meta_description' => '',
                'description' => json_encode([]),
                'image' => 'assets/seed_images/call.png',
                'is_published' => true,
            ]);
        }

        if (!Page::where('slug', 'transport-durgence')->exists()) {
            Page::create([
                'title' => 'Transport d\'urgence',
                'slug' => 'transport-durgence',
                'main_title' => '',
                'content' => 'Les services de transport sécurisé d\'Amcare jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable.',
                'meta_title' => '',
                'meta_description' => '',
                'description' => json_encode([]),
                'image' => 'assets/seed_images/ambulance-lights.png',
                'is_published' => true,
            ]);
        }


    }

    //  public function run(): void
    // {
    //     $pages = [
    //         [
    //             'title' => 'À Propos de Nous',
    //             'main_title' => 'Découvrez Amcare',
    //             'content' => '<p>Amcare est dédié à fournir des services d\'ambulance de la plus haute qualité avec compassion et professionnalisme. Notre mission est d\'être là pour vous lors des moments critiques, offrant des soins médicaux rapides et efficaces.</p><p>Notre équipe est composée de professionnels de la santé expérimentés et formés pour gérer une vaste gamme de situations d\'urgence. Nous utilisons des équipements modernes et des ambulances bien équipées pour assurer la sécurité et le confort de nos patients.</p>',
    //             'meta_title' => 'À Propos d\'Amcare | Services d\'Ambulance Professionnels',
    //             'meta_description' => 'Apprenez-en plus sur Amcare, notre mission, notre équipe et notre engagement envers l\'excellence dans les services médicaux d\'urgence.',
    //             'description' => json_encode([
    //                 'Intervention rapide 24/7',
    //                 'Personnel médical qualifié',
    //                 'Équipement de pointe',
    //                 'Transport sécurisé et confortable'
    //             ]),
    //             'image' => 'pages/about_us_banner.jpg', // Example path
    //             'is_published' => true,
    //         ],
    //         [
    //             'title' => 'Contactez-Nous',
    //             'main_title' => 'Entrez en Contact',
    //             'content' => '<p>Pour toute urgence, veuillez appeler notre numéro d\'urgence. Pour des questions générales ou des informations sur nos services, vous pouvez nous joindre via le formulaire ci-dessous ou par téléphone pendant les heures de bureau.</p>',
    //             'meta_title' => 'Contactez Amcare | Assistance et Urgences',
    //             'meta_description' => 'Contactez Amcare pour des services d\'ambulance, des demandes d\'informations ou une assistance. Nous sommes disponibles pour vous aider.',
    //             'description' => json_encode([
    //                 'Support client réactif',
    //                 'Informations détaillées sur les services',
    //                 'Prise de rendez-vous pour transports non urgents'
    //             ]),
    //             'image' => 'pages/contact_banner.jpg', // Example path
    //             'is_published' => true,
    //         ],
    //         [
    //             'title' => 'Nos Engagements Qualité',
    //             'main_title' => 'Engagement envers l\'Excellence',
    //             'content' => '<p>Chez Amcare, la qualité est au cœur de tout ce que nous faisons. Nous nous engageons à maintenir les normes les plus élevées en matière de soins aux patients, de sécurité et de performance opérationnelle.</p><ul><li>Formation continue de notre personnel.</li><li>Maintenance rigoureuse de nos véhicules et équipements.</li><li>Protocoles médicaux basés sur les meilleures pratiques.</li><li>Écoute active des retours de nos patients pour une amélioration continue.</li></ul>',
    //             'meta_title' => 'Engagements Qualité Amcare | Normes Élevées',
    //             'meta_description' => 'Découvrez les engagements qualité d\'Amcare pour des services d\'ambulance fiables et sécurisés, axés sur le bien-être du patient.',
    //             'description' => json_encode([
    //                 'Normes de sécurité strictes',
    //                 'Personnel hautement qualifié',
    //                 'Amélioration continue des services'
    //             ]),
    //             'is_published' => true,
    //         ],
    //         [
    //             'title' => 'Politique de Confidentialité',
    //             'main_title' => 'Votre Vie Privée, Notre Priorité',
    //             'content' => '<p>Amcare s\'engage à protéger la confidentialité de vos informations personnelles et médicales. Cette politique décrit comment nous collectons, utilisons et protégeons vos données.</p><p>Nous ne partageons vos informations qu\'avec les parties nécessaires à la fourniture de vos soins et conformément aux lois en vigueur.</p>',
    //             'meta_title' => 'Politique de Confidentialité | Amcare',
    //             'meta_description' => 'Consultez la politique de confidentialité d\'Amcare pour comprendre comment nous protégeons vos données personnelles et médicales.',
    //             'description' => json_encode([]),
    //             'is_published' => true,
    //         ],
    //     ];

    //     foreach ($pages as $pageData) {
    //         Page::create([
    //             'title' => $pageData['title'],
    //             'slug' => Str::slug($pageData['title']),
    //             'main_title' => $pageData['main_title'] ?? $pageData['title'],
    //             'content' => $pageData['content'],
    //             'meta_title' => $pageData['meta_title'],
    //             'meta_description' => $pageData['meta_description'],
    //             'description' => $pageData['description'],
    //             'image' => $pageData['image'] ?? null,
    //             'is_published' => $pageData['is_published'],
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]);
    //     }
    // }
}


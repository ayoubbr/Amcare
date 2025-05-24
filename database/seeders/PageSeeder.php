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
                'image' => null,
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
                'image' => null,
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
                'image' => null,
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
                'image' => null,
                'is_published' => true,
            ]);
        }
    }
}

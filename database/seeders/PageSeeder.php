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
        if (!\App\Models\Page::where('slug', 'about')->exists()) {
            \App\Models\Page::create([
                'title' => 'About Us',
                'slug' => 'about',
                'content' => 'Chez Amcare, nous sommes fiers d\'offrir l\'excellence dans les services médicaux d\'urgence. Notre équipe de professionnels hautement qualifiés et expérimentés est dédiée à fournir des soins rapides, compatissants et efficaces à ceux qui en ont besoin. Nous comprenons que les urgences médicales peuvent être stressantes et bouleversantes, c\'est pourquoi nous nous efforçons de rendre l\'expérience aussi fluide et rassurante que possible pour nos patients et leurs familles.',
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
    }
}

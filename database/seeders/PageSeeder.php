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
        $slides = [
            [
                'logo' => '<img src="https://cdn-icons-png.freepik.com/256/15228/15228159.png?uid=R120847014&ga=GA1.1.1306162642.1747995481&semt=ais_hybrid" width="40" alt="Ambulance Icon">',
                'title' => 'Transport sécurisé',
                'description' => 'Les services de transport sécurisé d`\Ambulance Team jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable.'
            ],
            [
                'logo' => '<img src="https://cdn-icons-png.freepik.com/256/13641/13641122.png?uid=R120847014&ga=GA1.1.1306162642.1747995481&semt=ais_hybrid" width="40" alt="Urgence Icon">',
                'title' => 'Service sur demande',
                'description' => 'Les services de transport sécurisé d`\Ambulance Team jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable.'
            ],
            [
                'logo' => '<img src="https://cdn-icons-png.freepik.com/256/10190/10190889.png?uid=R120847014&ga=GA1.1.1306162642.1747995481&semt=ais_hybrid" width="40" alt="Transport Icon">',
                'title' => 'Transport d\'urgence',
                'description' => 'Les services de transport sécurisé d\'Ambulance Team jouent un rôle essentiel dans le système de santé, en fournissant un transport sûr et fiable.'
            ],
        ];


        $questions = [
            [
                'question' => 'C\'est quoi l\'urgance?',
                'reponse' => 'C\'est avoir une situation compliquée',
            ],
            [
                'question' => 'Comment sauver la vie de quelqu\'un?',
                'reponse' => 'Par nous appelée dans les numéros qui existe dans les services',
            ],
            [
                'question' => 'Où est-t-il votre local?',
                'reponse' => 'A Marrakech',
            ],
        ];
    
        Page::create([
            'title' => 'About',
            'slug' => 'about',
            'content' => '<h1>Qui sommes-nous</h1>',
            'meta_title' => 'About - Ambulance Team',
            'description' => json_encode($slides),
            'image' => '<div> Icônes conçues par <a href="https://www.flaticon.com/fr/auteurs/lakonicon" title="lakonicon"> lakonicon </a> from <a href="https://www.flaticon.com/fr/" title="Flaticon">www.flaticon.com</a></div>',
            'is_published' => true,
        ]);

        Page::create([
            'title' => 'FAQ',
            'slug' => 'faq',
            'content' => '<h1>Questions/Réponses</h1>',
            'meta_title' => 'FAQ - Ambulance Team',
            'description' => json_encode($questions),
            'image' => '<div> Icônes conçues par <a href="https://www.flaticon.com/fr/auteurs/lakonicon" title="lakonicon"> lakonicon </a> from <a href="https://www.flaticon.com/fr/" title="Flaticon">www.flaticon.com</a></div>',
            'is_published' => true,
        ]);
    }
}

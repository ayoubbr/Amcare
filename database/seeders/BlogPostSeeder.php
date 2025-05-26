<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\BlogPost;
use App\Models\Category;
use Carbon\Carbon;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        if ($categories->isEmpty()) {
            $this->command->info('Aucune catégorie trouvée. Veuillez d\'abord exécuter CategorySeeder.');
            return;
        }

        $posts = [
            [
                'title' => 'Les gestes qui sauvent : Guide pratique',
                'content' => '<p>Apprendre les gestes de premiers secours peut faire la différence en cas d\'urgence. Cet article vous guide à travers les étapes essentielles à connaître.</p><h3>RCP (Réanimation Cardio-Pulmonaire)</h3><p>Description de la RCP...</p><h3>Position Latérale de Sécurité (PLS)</h3><p>Quand et comment mettre quelqu\'un en PLS...</p>',
                'image' => 'blog/gestes_qui_sauvent.jpg',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'Comprendre l\'AVC : Signes et symptômes',
                'content' => '<p>L\'Accident Vasculaire Cérébral (AVC) est une urgence médicale majeure. Reconnaître rapidement les signes peut sauver des vies et réduire les séquelles. Apprenez la méthode FAST (Face, Arms, Speech, Time).</p>',
                'image' => 'blog/avc_symptomes.jpg',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(10),
            ],
            [
                'title' => 'L\'importance d\'une trousse de premiers secours à domicile',
                'content' => '<p>Avoir une trousse de premiers secours bien équipée à la maison est crucial pour faire face aux petits accidents du quotidien. Que doit-elle contenir ?</p><ul><li>Pansements</li><li>Désinfectant</li><li>Compresses stériles</li><li>Ciseaux</li></ul>',
                'image' => 'blog/trousse_secours.jpg',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(2),
            ],
            [
                'title' => 'Voyager en toute sécurité : Conseils pour les problèmes de santé à l\'étranger',
                'content' => '<p>Préparer un voyage inclut aussi de penser à sa santé. Vaccins, assurance voyage, médicaments à emporter... tous nos conseils pour partir l\'esprit tranquille.</p>',
                'is_published' => false, // Example of an unpublished post
                'published_at' => null,
            ],
        ];

        foreach ($posts as $postData) {
            BlogPost::create([
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'content' => $postData['content'],
                'image' => $postData['image'] ?? null,
                'category_id' => $categories->random()->id, // Assign a random existing category
                'is_published' => $postData['is_published'],
                'published_at' => $postData['published_at'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

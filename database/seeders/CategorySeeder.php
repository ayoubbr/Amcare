<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $categories = [
            ['name' => 'Actualités Médicales'],
            ['name' => 'Conseils de Santé'],
            ['name' => 'Prévention et Sécurité'],
            ['name' => 'Témoignages et Histoires'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq; // Import Faq model

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Quels types d\'urgences médicales traitez-vous ?',
                'answer' => 'Notre service d\'ambulance est équipé pour gérer un large éventail d\'urgences médicales, y compris les traumatismes, les problèmes cardiaques, les difficultés respiratoires, les AVC, et bien plus encore. Nos équipes sont formées pour stabiliser les patients et les transporter en toute sécurité.',
            ],
            [
                'question' => 'Quel équipement vos ambulances transportent-elles ?',
                'answer' => 'Nos ambulances sont équipées de matériel médical de pointe, incluant des défibrillateurs, des moniteurs cardiaques, des ventilateurs, des médicaments d\'urgence, et tout le nécessaire pour les soins intensifs mobiles.',
            ],
            [
                'question' => 'Offrez-vous des transferts inter-établissements ?',
                'answer' => 'Oui, nous proposons des services de transfert inter-hospitaliers pour les patients nécessitant un déplacement entre différents établissements de santé, que ce soit pour des soins spécialisés ou une continuité de traitement.',
            ],
            [
                'question' => 'Vos services sont-ils couverts par une assurance ?',
                'answer' => 'Nous travaillons avec la plupart des compagnies d\'assurance. Nous vous recommandons de vérifier auprès de votre assureur les détails de votre couverture pour les transports médicaux d\'urgence et non urgents. Nous pouvons vous assister dans les démarches administratives.',
            ],
             [
                'question' => 'Comment puis-je demander une ambulance en cas d\'urgence ?',
                'answer' => 'En cas d\'urgence, composez immédiatement notre numéro d\'urgence dédié [VOTRE NUMÉRO D\'URGENCE ICI]. Restez en ligne et fournissez clairement votre nom, votre localisation précise, la nature de l\'urgence et le nombre de personnes impliquées.',
            ],
        ];

        foreach ($faqs as $faqData) {
            Faq::create([
                'question' => $faqData['question'],
                'answer' => $faqData['answer'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

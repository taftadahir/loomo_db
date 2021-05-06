<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'label' => 'English',
            'code' => 'en', 
        ]);
        Language::create([
            'label' => 'Chinese',
            'code' => 'zh', 
        ]);
        Language::create([
            'label' => 'Hindi',
            'code' => 'hi', 
        ]);
        Language::create([
            'label' => 'Spanish',
            'code' => 'es', 
        ]);
        Language::create([
            'label' => 'French',
            'code' => 'fr', 
        ]);
        Language::create([
            'label' => 'Standard Arabic',
            'code' => 'ar', 
            'directionality' => 'rtl'
        ]);
        Language::create([
            'label' => 'Bengali',
            'code' => 'bn', 
        ]);
        Language::create([
            'label' => 'Russian',
            'code' => 'ru', 
        ]);
    }
}

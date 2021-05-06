<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use League\CommonMark\Normalizer\SlugNormalizer;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugifier = new SlugNormalizer();
        $label = 'High Tech';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Jeux & Console';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Informatique & Bureau';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Jouets, Enfants & Bébés';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Cuisine & Maison';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Beauté & Santé & Bien-être';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Epicerie & Boissons & Entretien';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Vêtements & Chaussures & Bijoux & Accessoires';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Sports & Loisirs';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Automobile & Industrie';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
        $label = 'Handmade';
        Category::create([
            'parent_id' => null,
            'label' => $label,
            'slug' => $slugifier->normalize($label),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use League\CommonMark\Normalizer\SlugNormalizer;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugifier = new SlugNormalizer();
        $names = ['Apple', 'Amazon', 'Microsoft', 'Google', 'Samsung', 'Coca-Cola', 'Nike', 'IBM', 'BMW', 'Toyota', 'Mercedes', 'McDonald’s', 'Disney'];
        foreach($names as $name){
            Brand::create([
                'name' => $name,
                'slug' => $slugifier->normalize($name), 
            ]);
        }
    }
}

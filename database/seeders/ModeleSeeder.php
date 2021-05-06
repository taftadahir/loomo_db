<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Modele;
use Illuminate\Database\Seeder;

class ModeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modele::create([
            'brand_id' => Brand::where('name', 'Apple')->first()->id,
            'code' => 'A2215',
            'name' => 'iPhone 11 Pro',
        ]);
        Modele::create([
            'brand_id' => Brand::where('name', 'Apple')->first()->id,
            'code' => 'A2217',
            'name' => 'iPhone 11 Pro',
        ]);
        Modele::create([
            'brand_id' => Brand::where('name', 'Apple')->first()->id,
            'code' => 'A2160',
            'name' => 'iPhone 11 Pro',
        ]);
        Modele::create([
            'brand_id' => Brand::where('name', 'Apple')->first()->id,
            'code' => 'A2221',
            'name' => 'iPhone 11',
        ]);
        Modele::create([
            'brand_id' => Brand::where('name', 'Apple')->first()->id,
            'code' => 'A2223',
            'name' => 'iPhone 11',
        ]);
        Modele::create([
            'brand_id' => Brand::where('name', 'Apple')->first()->id,
            'code' => 'A2111',
            'name' => 'iPhone 11',
        ]);
    }
}

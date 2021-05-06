<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'label' => 'XXS', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => 'XS', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => 'S', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => 'M', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => 'L', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => 'XL', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => 'XXL', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => '3XL', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => '4XL', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => '5XL', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => '6XL', 
            'type' => 'clothing'
        ]);
        Size::create([
            'label' => '35', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '36', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '37', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '38', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '39', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '40', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '41', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '42', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '43', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '44', 
            'type' => 'footwear'
        ]);
        Size::create([
            'label' => '45', 
            'type' => 'footwear'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\ShippingMode;
use Illuminate\Database\Seeder;

class ShippingModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShippingMode::create(['title' => 'Achat à la boutique']);
        ShippingMode::create(['title' => 'Livraison par le vendeur']);
        ShippingMode::create(['title' => 'Livraison par notre site']);
        ShippingMode::create(['title' => 'Livraison par une tierce ']);
    }
}

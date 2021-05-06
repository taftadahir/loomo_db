<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create(['label' => 'Carte bancaire']);
        PaymentMethod::create(['label' => 'Cash à la livraison']);
        PaymentMethod::create(['label' => 'A la boutique']);
        PaymentMethod::create(['label' => 'Check']);
        PaymentMethod::create(['label' => 'Paypal']);
    }
}

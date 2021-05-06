<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'label' => 'Argentine Peso',
            'code' => 'ARS',
            'symbol' => '$',
            'spaced' => true,
            'symbol_position' => 'left',
            'fractional_separator' => ',',
            'thousand_separator' => '.',
        ]);
        Currency::create([
            'label' => 'Canadian Dollar',
            'code' => 'CAD',
            'symbol' => '$',
            'spaced' => true,
            'symbol_position' => 'left',
            'fractional_separator' => '.',
            'thousand_separator' => ',',
        ]);
        Currency::create([
            'label' => 'Yuan Renminbi',
            'code' => 'CNY',
            'symbol' => '¥',
            'spaced' => true,
            'symbol_position' => 'left',
            'fractional_separator' => '.',
            'thousand_separator' => ',',
        ]);
        Currency::create([
            'label' => 'Euro',
            'code' => 'EUR',
            'symbol' => '€',
            'spaced' => false,
            'description' => 'European Union (Austria, Belgium, Bulgaria, Croatia, Republic of Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Germany, Greece, Hungary, Ireland, Italy, Latvia, Lithuania, Luxembourg, Malta, Netherlands, Poland, Portugal, Romania, Slovakia, Slovenia, Spain, and Sweden.)',
            'symbol_position' => 'left',
            'fractional_separator' => ',',
            'thousand_separator' => '.',
        ]);
        Currency::create([
            'label' => 'Indian Rupee',
            'code' => 'INR',
            'symbol' => '₹',
            'spaced' => true,
            'symbol_position' => 'left',
            'fractional_separator' => '.',
            'thousand_separator' => ',',
        ]);
        Currency::create([
            'label' => 'Yen',
            'code' => 'JPY',
            'symbol' => '¥',
            'spaced' => false,
            'symbol_position' => 'left',
            'fractional_separator' => '.',
            'thousand_separator' => ',',
        ]);
    }
}

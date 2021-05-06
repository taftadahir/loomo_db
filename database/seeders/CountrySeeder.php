<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Currency;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'currency_id' => Currency::where('code', 'ARS')->first()->id,
            'name' => 'Argentina',
            'code' => 'ARG',
            'number' => '032',
            'phone_indicatif' => '54',
        ]);
        Country::create([
            'currency_id' => Currency::where('code', 'CAD')->first()->id,
            'name' => 'Canada',
            'code' => 'CAN',
            'number' => '124',
            'phone_indicatif' => '1',
        ]);
        Country::create([
            'currency_id' => Currency::where('code', 'CNY')->first()->id,
            'name' => 'China',
            'code' => 'CHN',
            'number' => '156',
            'phone_indicatif' => '86',
        ]);
        Country::create([
            'currency_id' => Currency::where('code', 'EUR')->first()->id,
            'name' => 'France',
            'code' => 'FRA',
            'number' => '250',
            'phone_indicatif' => '33',
        ]);
        Country::create([
            'currency_id' => Currency::where('code', 'INR')->first()->id,
            'name' => 'India',
            'code' => 'IND',
            'number' => '356',
            'phone_indicatif' => '91',
        ]);
        Country::create([
            'currency_id' => Currency::where('code', 'JPY')->first()->id,
            'name' => 'Japan',
            'code' => 'JPN',
            'number' => '392',
            'phone_indicatif' => '81',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // India
        City::create([
            'name' => 'Mumbai',
            'country_id' => Country::where([
                ['code', 'IND'],
                ['number', '356']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Delhi',
            'country_id' => Country::where([
                ['code', 'IND'],
                ['number', '356']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Bangalore',
            'country_id' => Country::where([
                ['code', 'IND'],
                ['number', '356']
            ])->first()->id
        ]);

        // Argentina
        City::create([
            'name' => 'Buenos Aires',
            'country_id' => Country::where([
                ['code', 'ARG'],
                ['number', '032']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Córdoba',
            'country_id' => Country::where([
                ['code', 'ARG'],
                ['number', '032']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Rosario',
            'country_id' => Country::where([
                ['code', 'ARG'],
                ['number', '032']
            ])->first()->id
        ]);
        City::create([
            'name' => 'La Plata',
            'country_id' => Country::where([
                ['code', 'ARG'],
                ['number', '032']
            ])->first()->id
        ]);

        // Canada
        City::create([
            'name' => 'Toronto',
            'country_id' => Country::where([
                ['code', 'CAN'],
                ['number', '124']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Montreal',
            'country_id' => Country::where([
                ['code', 'CAN'],
                ['number', '124']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Vancouver',
            'country_id' => Country::where([
                ['code', 'CAN'],
                ['number', '124']
            ])->first()->id
        ]);

        // China
        City::create([
            'name' => 'Shanghai',
            'country_id' => Country::where([
                ['code', 'CHN'],
                ['number', '156']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Beijing',
            'country_id' => Country::where([
                ['code', 'CHN'],
                ['number', '156']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Chongqing',
            'country_id' => Country::where([
                ['code', 'CHN'],
                ['number', '156']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Tianjin',
            'country_id' => Country::where([
                ['code', 'CHN'],
                ['number', '156']
            ])->first()->id
        ]);

        // France
        City::create([
            'name' => 'Paris',
            'country_id' => Country::where([
                ['code', 'FRA'],
                ['number', '250']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Marseille',
            'country_id' => Country::where([
                ['code', 'FRA'],
                ['number', '250']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Lyon',
            'country_id' => Country::where([
                ['code', 'FRA'],
                ['number', '250']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Toulouse',
            'country_id' => Country::where([
                ['code', 'FRA'],
                ['number', '250']
            ])->first()->id
        ]);

        // Japan
        City::create([
            'name' => 'Tokyo',
            'country_id' => Country::where([
                ['code', 'JPN'],
                ['number', '392']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Yokohama',
            'country_id' => Country::where([
                ['code', 'JPN'],
                ['number', '392']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Osaka',
            'country_id' => Country::where([
                ['code', 'JPN'],
                ['number', '392']
            ])->first()->id
        ]);
        City::create([
            'name' => 'Nagoya',
            'country_id' => Country::where([
                ['code', 'JPN'],
                ['number', '392']
            ])->first()->id
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create(['label' => 'Brand new']);
        Condition::create(['label' => 'Like new']);
        Condition::create(['label' => 'Excellent']);
        Condition::create(['label' => 'Very Good']);
        Condition::create(['label' => 'Good']);
        Condition::create(['label' => 'Used']);
        Condition::create(['label' => 'Fair']);
        Condition::create(['label' => 'Poor']);
        Condition::create(['label' => 'Non fonctioning']);
        Condition::create(['label' => 'Bad condition']);
    }
}

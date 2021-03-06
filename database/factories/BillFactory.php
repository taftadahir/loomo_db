<?php

namespace Database\Factories;

use App\Models\Bill;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'payment_id' => Payment::all()->random()->id,
        ];
    }
}

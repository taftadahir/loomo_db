<?php

namespace Database\Factories;

use App\Models\Currency;
use App\Models\Price;
use App\Models\Product;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

class PriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Price::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'product_id' => Product::all()->random()->id,
            'type' => $this->faker->randomElement(['normal', 'promotion']),
            'amount' => $this->faker->randomFloat(2, 1.00, 30000.00),
            'enabled' => $this->faker->boolean(),
            'enabled_at' => $this->faker->randomElement([$this->faker->dateTime(), null]),
            'disabled_at' => $this->faker->dateTimeThisDecade('+2 years'),
            'currency_id' =>Currency::all()->random()->id
        ];
    }
}

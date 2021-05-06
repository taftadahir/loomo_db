<?php

namespace Database\Factories;

use App\Models\Discount;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Discount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id ,
            'status_id' => Status::where('type', 'coupon')->get()->random()->id,
            'label' => $this->faker->words(3, true),
            'description' => $this->faker->sentences(3, true),
            'type' => $this->faker->randomElement(['fixed', 'percent']),
            'value' => $this->faker->randomFloat(2, 0.00, 100.0),
            'enabled_at' => $this->faker->dateTime,
            'disabled_at' => $this->faker->dateTime
        ];
    }
}

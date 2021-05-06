<?php

namespace Database\Factories;

use App\Models\Coupon;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coupon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'status_id' => Status::where('type', 'coupon')->get()->random()->id, 
            'code' => $this->faker->numerify('coup-#########'),
            'label' => $this->faker->words(3, true),
            'type' => $this->faker->randomElement(['fixed', 'percent']),
            'value' => $this->faker->randomFloat(2, 0.00, 100.0),
            'enabled_at' => $this->faker->dateTime,
            'disabled_at' => $this->faker->dateTime
        ];
    }
}

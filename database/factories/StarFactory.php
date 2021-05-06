<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\Star;
use Illuminate\Database\Eloquent\Factories\Factory;

class StarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Star::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $order = Order::all()->random();
        return [
            'user_id' => $order->user_id,
            'order_id' => $order->id,
            'product_id' => Product::all()->random()->id,
            'value' => $this->faker->randomElement(['0', '1', '2', '3', '4', '5']),
            'comment' => $this->faker->sentences(3, true)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Currency;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::all()->random()->id,
            'currency_id' => Currency::all()->random()->id,
            'order_id' => Order::all()->random()->id,
            'amount' => $this->faker->randomFloat(2, 0.00, 10000.00),
            'quantity' => $this->faker->randomNumber(5)
        ];
    }
}

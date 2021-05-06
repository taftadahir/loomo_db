<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\City;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\ShippingMode;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::all()->random()->id;
        $shipping = Shipping::where('user_id', $user_id)->firstOrCreate([
            'user_id' => $user_id,
            'shipping_mode_id' => ShippingMode::all()->random()->id,
            'address_id' => Address::where('id', $user_id)->firstOrCreate([
                'user_id' => $user_id,
                'city_id' => City::all()->random()->id]
                )->id
        ]);
        return [
            'user_id' => $user_id,
            'status_id' => Status::where('type', 'order')->get()->random()->id,
            'shipping_id' => $shipping->id,
            'order_number' => $this->faker->unique()->numerify('order-#########')
        ];
    }
}

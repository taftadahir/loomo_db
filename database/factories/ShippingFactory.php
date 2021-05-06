<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\City;
use App\Models\Shipping;
use App\Models\ShippingMode;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipping::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::all()->random()->id;
        return [
            'user_id' => $user_id,
            'shipping_mode_id' => ShippingMode::all()->random()->id,
            'address_id' => Address::where('id', $user_id)->firstOrCreate([
                'user_id' => $user_id,
                'city_id' => City::all()->random()->id]
            )->id
        ];
    }
}

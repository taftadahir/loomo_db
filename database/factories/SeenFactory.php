<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Seen;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['product', 'store']);
        return [
            'user_id' => User::all()->random()->id,
            'seen_able_type' => $type,
            'seen_able_id' => $type == 'product' ? Product::all()->random()->id : Store::all()->random()->id
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'name' => $this->faker->words(2, true),
            'email' => $this->faker->email,
            'cover' => 'assets/stores/covers/' . $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg']),
            'logo' => 'assets/stores/logos/' . $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg']),
            'enabled' => $this->faker->boolean,
            'description' => $this->faker->sentences(5, true),
        ];
    }
}

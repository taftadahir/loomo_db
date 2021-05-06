<?php

namespace Database\Factories;

use App\Models\Follow;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Follow::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $follow_able_type = $this->faker->randomElement(['user', 'store']);
        return [
            'user_id' => User::all()->random()->id,
            'follow_able_type' => $follow_able_type,
            'follow_able_id' => $follow_able_type == 'user' ? User::all()->random()->id : Store::all()->random()->id
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $notify_able_type = $this->faker->randomElement(['user', 'store']);
        return [
            'type' => $this->faker->randomElement(['mail', 'internal']),
            'notify_able_type' => $notify_able_type,
            'notify_able_id' => $notify_able_type == 'user' ? User::all()->random()->id : Store::all()->random()->id,
            'data' => $this->faker->sentences(3, true),
            'read_at' => $this->faker->dateTime
        ];
    }
}

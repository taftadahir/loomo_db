<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $first_name = $this->faker->firstName;
        $last_name = $this->faker->lastName;
        $nick_name = strtolower($first_name);
        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'nick_name' => $nick_name,
            'full_name' => $first_name . ' ' . $last_name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'birth_date' => $this->faker->dateTime,
            'avatar' => 'assets/avatars/' . $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg']),
            'status_id' => Status::where('type', 'user')->get()->random()->id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

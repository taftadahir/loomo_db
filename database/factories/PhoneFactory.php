<?php

namespace Database\Factories;

use App\Models\Phone;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $phone_able_type = $this->faker->randomElement(['user', 'store']);
        if($phone_able_type == 'user'){
            $phone_able_id = User::all()->random()->id;
        }else{
            $phone_able_id = Store::all()->random()->id;
        }
         
        return [
            'number' => $this->faker->phoneNumber,
            'indicator' => $this->faker->countryCode,
            'phone_able_type' => $phone_able_type,
            'phone_able_id' => $phone_able_id
        ];
    }
}

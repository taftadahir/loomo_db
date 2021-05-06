<?php

namespace Database\Factories;

use App\Models\Phone;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone_id' => Phone::all()->random()->id,
            'full_name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
        ];
    }
}

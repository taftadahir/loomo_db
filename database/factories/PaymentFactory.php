<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'order_id' => Order::all()->random()->id,
            'payment_method_id' => PaymentMethod::all()->random()->id
        ];
    }
}

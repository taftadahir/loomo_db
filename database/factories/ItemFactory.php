<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Currency;
use App\Models\Item;
use App\Models\Price;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_id = Product::all()->random()->id;
        $item_able_type = $this->faker->randomElement(['cart', 'wishlist']);
        return [
            'product_id' => $product_id,
            'price_id' => Price::where('product_id', $product_id)->firstOrCreate([
                'user_id' => User::all()->random()->id,
                'product_id' => $product_id,
                'type' => $this->faker->randomElement(['normal', 'promotion']),
                'amount' => $this->faker->randomFloat(2, 1.00, 30000.00),
                'enabled' => $this->faker->boolean(),
                'enabled_at' => $this->faker->randomElement([$this->faker->dateTime(), null]),
                'disabled_at' => $this->faker->dateTimeThisDecade('+2 years'),
                'currency_id' =>Currency::all()->random()->id
            ]),
            'item_able_type' => $item_able_type,
            'item_able_id' => $item_able_type == 'cart' ? Cart::all()->random()->id : Wishlist::all()->random()->id,
            'quantity' => $this->faker->randomNumber(5),
        ];
    }
}

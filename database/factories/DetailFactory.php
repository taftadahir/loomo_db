<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Coupon;
use App\Models\Currency;
use App\Models\Detail;
use App\Models\Language;
use App\Models\Modele;
use App\Models\Product;
use App\Models\Size;
use App\Models\Store;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $detail_able_type = $this->faker->randomElement(['product', 'user', 'store']);
        if ($detail_able_type == 'product') {
            $detail_type = $this->faker->randomElement(['color', 'size', 'brand', 'category', 'supplier', 'coupon', 'modele']);
            $detail_id = Product::all()->random()->id;
        }
        if ($detail_able_type == 'user') {
            $detail_type = 'language';
            $detail_id = User::all()->random()->id;
        }
        if ($detail_able_type == 'store') {
            $detail_type = 'currency';
            $detail_id = Store::all()->random()->id;
        }
        
        return [
            'detail_type' => $detail_type,
            'detail_id' => $detail_id,
            'detail_able_type' => $detail_able_type,
            'detail_able_id' => $this->getId($detail_type)
        ];
    }

    public function getId($type)
    {
        if ($type == 'color') {
            return Color::all()->random()->id;
        }
        if ($type == 'size') {
            return Size::all()->random()->id;
        }
        if ($type == 'brand') {
            return Brand::all()->random()->id;
        }
        if ($type == 'category') {
            return Category::all()->random()->id;
        }
        if ($type == 'supplier') {
            return Supplier::all()->random()->id;
        }
        if ($type == 'coupon') {
            return Coupon::all()->random()->id;
        }
        if ($type == 'modele') {
            return Modele::all()->random()->id;
        }
        if ($type == 'currency') {
            return Currency::all()->random()->id;
        }
        if ($type == 'language') {
            return Language::all()->random()->id;
        }
    }
}

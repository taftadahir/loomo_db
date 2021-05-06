<?php

namespace Database\Factories;

use App\Models\Condition;
use App\Models\Product;
use App\Models\Status;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Normalizer\SlugNormalizer;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->words(3, true);
        $slugifier = new SlugNormalizer();
        $images = [];
        return [
            'user_id' => User::all()->random()->id,
            'status_id' => Status::where('type', 'product')->get()->random()->id,
            'condition_id' => Condition::all()->random()->id,
            'store_id' => Store::all()->random()->id,
            'title' => $title,
            'slug' => $slugifier->normalize($title),
            'reference' => $this->faker->unique()->uuid,
            'is_featured' => $this->faker->boolean(),
            'description' => $this->faker->sentences(3, true),
            'stock' => $this->faker->randomNumber(5, false),
            'keywords' => strtr($this->faker->words(5, true), ' ', ','),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Newsletter;
use App\Models\NewsletterTopic;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsletterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Newsletter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->safeEmail,
            'newsletter_topic_id' => NewsletterTopic::all()->random()->id
        ];
    }
}

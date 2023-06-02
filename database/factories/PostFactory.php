<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->realText(50);
        return [
            'title' => $title,
            'slug'  => Str::slug($title),
            'thumbnail' => $this->faker->imageUrl(640, 480),
            'body' => $this->faker->realTextBetween(1000, 2000),
            'active' => $this->faker->boolean,
            'publish_at' => $this->faker->dateTime,
            'user_id' => 1,
        ];
    }
}

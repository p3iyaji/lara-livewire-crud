<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::pluck('id')->toArray();
        $title = $this->faker->words(2, true);
        return [
            'prod_name' => $title,
            'slug' => Str::slug($title, '_'),
            'image' => fake()->imageUrl(),
            'description' => fake()->realText(2000),
            'price' => fake()->randomFloat(2, 20, 5000),
            'qty' => fake()->randomNumber(),
            'category_id' => fake()->randomElement($categories),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

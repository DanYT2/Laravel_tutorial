<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    #[ArrayShape(['user_id' => "\Illuminate\Database\Eloquent\Factories\Factory", 'category_id' => "\Illuminate\Database\Eloquent\Factories\Factory", 'title' => "string", 'slug' => "string", 'excerpt' => "string", 'body' => "string"])] public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'excerpt' => '<p>'.implode('</p><p>',$this->faker->paragraphs(2)). '</p>',
            'body' => '<p>'.implode('</p><p>',$this->faker->paragraphs(6)). '</p>',
        ];
    }
}

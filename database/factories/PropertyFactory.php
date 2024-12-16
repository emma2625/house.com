<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pic = fake()->image(public_path('uploads/properties'),640,480,null,false,true);
        $path = 'uploads/properties/' . $pic;
        return [
            'name' => fake()->name,
            'price' => fake()->numberBetween(1000000,9999999),
            'address' => fake()->address,
            'state' => fake()->state,
            'status' => fake()->randomElement(['sale','rent']),
            'category_id' => Category::inRandomOrder()->first()->id,
            'picture' => $path,
            'description' => fake()->realText(500)
        ];
    }
}

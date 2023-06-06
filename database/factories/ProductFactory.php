<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;



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
        $faker = Faker::create();
        return [
            'name' => $faker->name(),
            'price' => $faker->randomFloat(2, 8, 20),
            'stock' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}

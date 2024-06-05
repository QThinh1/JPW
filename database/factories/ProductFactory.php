<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = Product::class;
    public function definition()
    {
        return [
            'img' => $this->faker->url(),
            'name' => $this->faker->name(),
            'desc' => $this->faker->realText(),
            'price' => $this->faker->randomDigit(),
            'category_id' => 1,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'desc' => $this->faker->url(),
            'user_id' => 1,
            'status' => 0,
            'receiver' => $this->faker->name(),
        ];
    }
}

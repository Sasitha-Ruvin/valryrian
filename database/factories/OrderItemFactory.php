<?php

namespace Database\Factories;


use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = OrderItem::class;

    public function definition(): array
    {
        return [
            'order_id'=>Order::factory(),
            'product_id'=>Product::factory(),
            'quantity'=>$this->faker->numberBetween(1,3),
            'price'=>$this->faker->randomFloat(2,5,500),

            //
        ];
    }
}
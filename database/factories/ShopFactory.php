<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' =>'店舗',
           'description' =>fake()->readtext(),
           'max_price' =>fake()->numberBetween(2000,10000),
           'min_price' =>fake()->numberBetween(100,2000),
           
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Row;
use App\Models\Slot;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->bothify('#?'),
            'row_id' => Row::factory(),
            'product_id' => Product::factory(),
        ];
    }
}
<?php

namespace Database\Factories\Market;

use App\Models\Market\Brand;
use App\Models\Market\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Market\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => 'product' . $name,
            'introduction' => $this->faker->text(),
            'image' => $this->faker->randomDigit(),
            'weight' => $this->faker->randomDigit(),
            'width' => $this->faker->randomDigit(),
            'height' => $this->faker->randomDigit(),
            'length' => $this->faker->randomDigit(),
            'price' => $this->faker->randomDigit(),
            'tags' => $name,
            'category_id' => ProductCategory::factory()->create()->id,
            'brand_id' => Brand::factory()->create()->id,
        ];
    }
}

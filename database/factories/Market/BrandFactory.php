<?php

namespace Database\Factories\Market;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Market\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $orgName = $this->faker->name();
        return [
            'persian_name' => $orgName,
            'original_name' => $this->faker->name(),
            'logo' => $this->faker->text(),
            'tags' => 'slug_' . $orgName,
        ];
    }
}

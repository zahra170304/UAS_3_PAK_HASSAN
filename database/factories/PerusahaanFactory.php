<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perusahaan>
 */
class PerusahaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'company_name' => $this->faker->company,
            'tagline' => $this->faker->catchPhrase,
            'company_description' => $this->faker->paragraph,
            'website' => $this->faker->url,
            'facebook' => $this->faker->userName,
            'twitter' => '@' . $this->faker->userName,
            'linkedin' => $this->faker->userName,
            'featured_image' => $this->faker->imageUrl(640, 480, 'business', true),
            'logo' => $this->faker->imageUrl(100, 100, 'logo', true),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Perusahaan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PekerjaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'perusahaan_id' => Perusahaan::factory(),
            'job_title' => $this->faker->jobTitle,
            'location' => $this->faker->city,
            'region' => $this->faker->state,
            'job_type' => $this->faker->randomElement(['Part Time', 'Full Time']),
            'description' => $this->faker->paragraph,
        ];
    }
}

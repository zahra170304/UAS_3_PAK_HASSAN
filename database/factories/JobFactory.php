<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'job_title' => $this->faker->jobTitle,
            'location' => $this->faker->city,
            'region' => $this->faker->state,
            'job_type' => $this->faker->randomElement(['Part Time', 'Full Time']),
            'description' => $this->faker->paragraph,
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

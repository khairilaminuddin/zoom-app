<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Zoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zoom>
 */
class ZoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'api_key' => fake()->unique()->uuid(),
            'user_id' => User::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'  => $this->faker->sentence(3),
            'status' => $this->faker->randomElement(['backlog', 'done']),
        ];
    }
}

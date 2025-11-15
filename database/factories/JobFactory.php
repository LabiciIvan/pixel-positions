<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'     => fake()->jobTitle(),
            // 'salary'    => fake()->randomNumber(5),
            'salary'    => fake()->randomElement(['$10,000 USD', '$50,000 USD', '$150,000 USD']),
            'url'       => fake()->url(),
            'featured'  => fake()->boolean()
        ];
    }

    public function alternateSchedule(): Factory {
        return $this->state( new Sequence(
            ['schedule'  => 'fulltime'],
            ['schedule'  => 'part-time'],
        ));
    }

    public function alternateLocation(): Factory {
        return $this->state(new Sequence(
            ['location' => 'site'],
            ['location' => 'remote'],
        ));
    }

    public function alternateFeatured(): Factory {
        return $this->state(new Sequence(
            ['featured' => true],
            ['featured' => false],
        ));
    }
}

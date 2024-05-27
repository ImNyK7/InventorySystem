<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kodecust' => fake()->numerify(),
            'perusahaancust' => fake()->company(),
            'kontakcust' => fake()->name(),
            'kotacust' => fake()->city(),
            'alamatcust' => fake()->address(),
            'notelponcust' => fake()->phoneNumber(),
            'termcust' => fake()->numberBetween(0,30),
            'limitcust' => fake()->randomFloat()
        ];
    }
}

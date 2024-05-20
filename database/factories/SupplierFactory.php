<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kodesupp' => fake()->numerify(),
            'perusahaansupp' => fake()->company(),
            'kontaksupp' => fake()->name(),
            'kotasupp' => fake()->city(),
            'alamatsupp' => fake()->address(),
            'notelponsupp' => fake()->phoneNumber(),
            'termsupp' => fake()->numberBetween(5,30),
        ];
    }
}

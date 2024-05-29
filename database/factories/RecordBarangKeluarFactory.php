<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecordBarangKeluar>
 */
class RecordBarangKeluarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kodebrgklr' => fake()->numerify('BM-####'),
            'tanggalbrgklr' => fake()->dateTime,
            'jmlhbrgklr' => fake()->numberBetween(1,50),
            'satuanbrg_id' => mt_rand(1,6),
            'namabrgklr' => fake()->word(),
            'hrgjual' => fake()->randomFloat(),
            'kategori_id' => mt_rand(1,3),
            'customer_id' => mt_rand(1,5),
            'noseribrgklr' => fake()->numerify(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecordBarangMasuk>
 */
class RecordBarangMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kodebrgmsk' => fake()->numerify('BM-####'),
            'tanggalbrgmsk' => fake()->dateTime,
            'jmlhbrgmsk' => fake()->numberBetween(1,50),
            'satuanbrg_id' => mt_rand(1,6),
            'stokbarang_id' => mt_rand(1,2),
            'hrgbeli' => fake()->randomFloat(),
            'kategori_id' => mt_rand(1,3),
            'supplier_id' => mt_rand(1,5),
        ];
    }
}

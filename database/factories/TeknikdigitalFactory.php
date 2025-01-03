<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teknikdigital>
 */
class TeknikdigitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->randomNumber(8, true), // Nim dengan 8 digit angka
            'name' => $this->faker->name(), // Nama lengkap
            'pract_group' => 'TD-' . $this->faker->numberBetween(1, 66), // Format TD-XX
            'report_1' => $this->faker->numberBetween(0, 100),
            'pract_1' => $this->faker->numberBetween(0, 100),
            'total_1' => $this->faker->numberBetween(0, 100),
            'report_2' => $this->faker->numberBetween(0, 100),
            'pract_2' => $this->faker->numberBetween(0, 100),
            'total_2' => $this->faker->numberBetween(0, 100),
            'report_3' => $this->faker->numberBetween(0, 100),
            'pract_3' => $this->faker->numberBetween(0, 100),
            'total_3' => $this->faker->numberBetween(0, 100),
            'report_4' => $this->faker->numberBetween(0, 100),
            'pract_4' => $this->faker->numberBetween(0, 100),
            'total_4' => $this->faker->numberBetween(0, 100),
            'report_5' => $this->faker->numberBetween(0, 100),
            'pract_5' => $this->faker->numberBetween(0, 100),
            'total_5' => $this->faker->numberBetween(0, 100),
            'report_6' => $this->faker->numberBetween(0, 100),
            'pract_6' => $this->faker->numberBetween(0, 100),
            'total_6' => $this->faker->numberBetween(0, 100),
            'report_7' => $this->faker->numberBetween(0, 100),
            'pract_7' => $this->faker->numberBetween(0, 100),
            'total_7' => $this->faker->numberBetween(0, 100),
            'report_8' => $this->faker->numberBetween(0, 100),
            'pract_8' => $this->faker->numberBetween(0, 100),
            'total_8' => $this->faker->numberBetween(0, 100),
            'total_score' => $this->faker->numberBetween(0, 100),
            'resp' => $this->faker->numberBetween(0, 100),
            'final_score' => $this->faker->numberBetween(0, 100),
            'grade' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'attend_sos' => $this->faker->randomElement([0, 5]),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courses = ['BSIS', 'ACT', 'BSA', 'BSAIS', 'BAB', 'BSSW'];
        return [
            'uuid' => Str::uuid(),
            'student_id' => 'STU' . str_pad($this->faker->unique->numberBetween(1, 10000), 5, '0', STR_PAD_LEFT),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'year_level'=> $this->faker->numberBetween(1, 4),
            'course' => $this->faker->randomElement($courses),
        ];
    }
}

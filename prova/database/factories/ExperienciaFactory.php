<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ExperienciaFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
     'empresa' => $this->faker->words(2, true),
     'inicio' => $this->faker->dateTimeBetween(),
     'fim' => '',
     'atual_trabalho' => $this->faker->boolean(),
     'cargo' => $this->faker->word()
    ];
  }
}

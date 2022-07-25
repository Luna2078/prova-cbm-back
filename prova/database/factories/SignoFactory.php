<?php

namespace Database\Factories;

use App\Models\Signo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class SignoFactory extends Factory
{
  protected $model = Signo::class;
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
     'nome' => $this->faker->word()
    ];
  }
}

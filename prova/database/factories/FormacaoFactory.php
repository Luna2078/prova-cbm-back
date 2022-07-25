<?php

namespace Database\Factories;

use App\Models\Instituicao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class FormacaoFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
     'instituicao_id' => Instituicao::factory()->create()->id,
     'nome' => $this->faker->words(3, true)
    ];
  }
}

<?php

namespace Database\Factories;

use App\Enums\SignoEnum;
use App\Enums\TiposSanguineoEnum;
use App\Models\Instituicao;
use App\Models\Perfil;
use App\Models\Signo;
use App\Models\TipoSanguineo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class PerfilFactory extends Factory
{
  protected $model = Perfil::class;
  
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
     'tipos_sanguineo_id' => $this->faker->numberBetween(1, count(TiposSanguineoEnum::cases())),
     'signo_id' => $this->faker->numberBetween(1, count(SignoEnum::cases())),
     'cpf' => $this->faker->cpf(false),
     'nome' => $this->faker->name(),
     'data_nascimento' => $this->faker->date('Y-m-d','-18 years'),
     'email' => $this->faker->email(),
     'telefone' => $this->faker->cellphoneNumber(false),
     'resumo' => $this->faker->sentence
    ];
  }
}

<?php

namespace App\Rules;

use App\Models\Perfil;
use Closure;
use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Support\Facades\DB;
use Illuminate\Translation\PotentiallyTranslatedString;

class CpfValidation implements InvokableRule
{
  /**
   * Run the validation rule.
   *
   * @param string $attribute
   * @param mixed $value
   * @param Closure(string): PotentiallyTranslatedString $fail
   * @return void
   */
  public function __invoke($attribute, $value, $fail)
  {
    // Extrai somente os números
    $value = preg_replace('/[^0-9]/is', '', $value);
    
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($value) != 11) {
      $fail('Os dígitos informados diferente de 11.');
    }
    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $value)) {
      $fail('Você informou um cpf com uma sequência de dígitos repetidos.');
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
      for ($d = 0, $c = 0; $c < $t; $c++) {
        $d += $value[$c] * (($t + 1) - $c);
      }
      $d = ((10 * $d) % 11) % 10;
      if ($value[$c] != $d) {
        $fail('O CPF informado é inválido.');
      }
    }
    if (Perfil::query()->where('cpf','=',$value)->exists()){
      $fail('O CPF informado já está cadastrado no banco de dados.');
    }
  }
}

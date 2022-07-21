<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }
  
  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules(): array
  {
    return [
     'tipo_sanguineo_id' => 'required|int',
     'signo_id' => 'required|int',
     'cpf' => 'required|max:11',
     'nome' => 'required|string',
     'data_nascimento' => 'required|date|date_format:d-m-Y',
     'email' => 'required|string',
     'telefone' => 'required|string',
     'resumo' => 'nullable|string'
    ];
  }
}

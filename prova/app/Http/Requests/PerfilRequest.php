<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

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
     'tipos_sanguineo_id' => 'required|int',
     'signo_id' => 'required|int',
     'cpf' => 'required|max:14|min:11',
     'nome' => 'required|string|max:50',
     'data_nascimento' => 'required|date|date_format:Y-m-d',
     'email' => 'required|string|max:45',
     'telefone' => 'required|max:15|min:11',
     'experiencia' => 'required|array',
     'formacao' => 'required|array',
     'resumo' => 'nullable|text'
    ];
  }
  
  protected function failedValidation(Validator $validator)
  {
    throw new HttpResponseException(response()->json($validator->errors(), ResponseAlias::HTTP_UNPROCESSABLE_ENTITY));
  }
}

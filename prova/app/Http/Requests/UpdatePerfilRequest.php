<?php

namespace App\Http\Requests;

use App\Rules\CpfValidation;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class UpdatePerfilRequest extends FormRequest
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
     'tipos_sanguineo_id' => 'int',
     'signo_id' => 'int',
     'cpf' => ['string',new CpfValidation],
     'nome' => 'string|max:50',
     'data_nascimento' => 'date|date_format:Y-m-d',
     'email' => 'string|max:45',
     'telefone' => 'max:15|min:11',
     'experiencia' => 'array',
     'formacao' => 'array',
     'resumo' => 'nullable|string'
    ];
  }
  
  protected function failedValidation(Validator $validator)
  {
    throw new HttpResponseException(response()->json($validator->errors(), ResponseAlias::HTTP_UNPROCESSABLE_ENTITY));
  }
}

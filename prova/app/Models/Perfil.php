<?php

namespace App\Models;

use App\Enums\SignoEnum;
use App\Enums\TipoSanguineoEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property TipoSanguineoEnum $tipo_sanguineo_id
 * @property SignoEnum $signo_id
 * @property string $cpf
 * @property string $nome
 * @property Carbon $data_nascimento
 * @property string $email
 * @property string $telefone
 * @property string $resumo
 */
class Perfil extends Model
{
  use HasFactory;
  
  protected $table = 'perfis';
  protected $primaryKey = 'id';
  protected $fillable = [
   'tipo_sanguineo_id',
   'signo_id',
   'cpf',
   'nome',
   'data_nascimento',
   'email',
   'telefone',
   'resumo'
  ];
  protected $visible = [
   'id',
   'tipo_sanguineo_id',
   'signo_id',
   'cpf',
   'nome',
   'data_nascimento',
   'email',
   'telefone',
   'resumo'
  ];
  protected $casts = [
   'tipo_sanguineo_id' => TipoSanguineoEnum::class,
   'signo_id' => SignoEnum::class,
   'data_nascimento' => 'datetime',
  ];
  
  public function tipoSanguineo()
  {
    return $this->hasOne(TipoSanguineo::class,'id','tipo_sanguineo_id');
  }
  
  public function signo()
  {
    return $this->hasOne(Signo::class,'id','signo_id');
  }
  
}

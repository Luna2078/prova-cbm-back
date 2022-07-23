<?php

namespace App\Models;

use App\Enums\SignoEnum;
use App\Enums\TiposSanguineoEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property TiposSanguineoEnum $tipos_sanguineo_id
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
  use SoftDeletes;
  
  protected $table = 'perfis';
  protected $primaryKey = 'id';
  protected $fillable = [
   'tipos_sanguineo_id',
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
   'tipos_sanguineo_id',
   'signo_id',
   'cpf',
   'nome',
   'data_nascimento',
   'email',
   'telefone',
   'resumo',
   'created_at',
   'updated_at',
   'tipoSanguineo',
   'signo',
   'competenciaPerfis',
   'experiencia'
  ];
  protected $casts = [
   'tipos_sanguineo_id' => TiposSanguineoEnum::class,
   'signo_id' => SignoEnum::class,
   'data_nascimento' => 'datetime',
  ];
  
  public function tipoSanguineo()
  {
    return $this->hasOne(TipoSanguineo::class, 'id', 'tipos_sanguineo_id');
  }
  
  public function signo()
  {
    return $this->hasOne(Signo::class, 'id', 'signo_id');
  }
  
  public function competenciaPerfis()
  {
    return $this->belongsToMany(CompetenciaPerfis::class, 'competencias_perfis');
  }
  
  public function experiencia()
  {
    return $this->hasMany(Experiencia::class);
  }
}

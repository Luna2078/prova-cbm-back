<?php

namespace App\Models;

use App\Enums\SignoEnum;
use App\Enums\TiposSanguineoEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * @property Instituicao $instituicao_id
 * @property Perfil $perfil_id
 * @property string $nome
 */
class Formacao extends Model
{
  use HasFactory;
  use SoftDeletes;
  
  protected $table = 'formacao';
  protected $primaryKey = 'id';
  protected $fillable = [
   'instituicao_id',
   'perfil_id',
   'nome'
  ];
  protected $visible = [
   'id',
   'instituicao_id',
   'perfil_id',
   'nome',
   'created_at',
   'updated_at',
   'instituicao',
   'perfil'
  ];
  
  public function instituicao()
  {
    return $this->hasOne(Instituicao::class, 'id', 'instituicao_id');
  }
  
  public function perfil()
  {
    return $this->belongsTo(Perfil::class, 'perfil_id');
  }
}

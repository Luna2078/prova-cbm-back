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
 * @property Perfil $perfil_id
 * @property string $empresa
 * @property Carbon $inicio
 * @property Carbon $fim
 * @property bool $atual_trabalho
 * @property string $cargo
 */
class Experiencia extends Model
{
  use HasFactory;
  use SoftDeletes;
  
  protected $table = 'experiencias';
  protected $primaryKey = 'id';
  protected $fillable = [
   'empresa',
   'inicio',
   'fim',
   'atual_trabalho',
   'cargo',
  ];
  protected $visible = [
   'id',
   'perfil_id',
   'empresa',
   'inicio',
   'fim',
   'atual_trabalho',
   'cargo',
   'created_at',
   'updated_at'
  ];
  protected $casts = [
   'inicio', 'fim' => 'datetime',
   'atual_trabalho' => 'bool'
  ];
  
  public function perfil()
  {
    return $this->belongsTo(Perfil::class, 'id');
  }
}

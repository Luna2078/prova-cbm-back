<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenciaPerfis extends Model
{
  use HasFactory;
  
  protected $table = 'competencias_perfis';
  protected $primaryKey = 'id';
  protected $fillable = [
   'competencia_id',
   'perfil_id'
  ];
  protected $visible = [
   'id',
   'competencia_id',
   'perfil_id',
   'perfil',
   'competencia'
  ];
  
  public function perfil()
  {
    return $this->hasMany(Perfil::class, 'id', 'perfil_id');
  }
  
  public function competencia()
  {
    return $this->hasMany(Competencia::class,'id','competencia_id');
  }
}

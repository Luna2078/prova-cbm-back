<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
  use HasFactory;
  
  protected $table = 'competencias';
  protected $primaryKey = 'id';
  protected $fillable = [
   'nome'
  ];
  protected $visible = [
   'id',
   'nome',
   'perfis'
  ];
  
  public function perfis()
  {
    return $this->belongsToMany(Perfil::class,'competencias_perfis');
  }
}

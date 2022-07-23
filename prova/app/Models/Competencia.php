<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
  use HasFactory;
  
  protected $table = 'competencias';
  protected $primaryKey = 'id';
  protected $visible = [
   'id',
   'nome',
   'competenciaPerfis'
  ];
  
  public function competenciaPerfis()
  {
    return $this->belongsToMany(CompetenciaPerfis::class, 'competencias_perfis');
  }
}

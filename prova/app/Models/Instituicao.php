<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
  use HasFactory;
  
  protected $table = 'instituicoes';
  protected $primaryKey = 'id';
  protected $visible = [
   'id',
   'nome'
  ];
  
  public function formacao()
  {
    return $this->belongsTo(Formacao::class,'instituicao_id');
  }
}

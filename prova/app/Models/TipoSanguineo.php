<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSanguineo extends Model
{
  use HasFactory;
  
  protected $table = 'tipos_sanguineos';
  protected $primaryKey = 'id';
  protected $visible = [
   'id',
   'nome'
  ];
}

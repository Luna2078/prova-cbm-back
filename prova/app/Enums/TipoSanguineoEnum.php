<?php

namespace App\Enums;

enum TipoSanguineoEnum :int
{
  case APositivo = 1;
  case BPositivo = 2;
  case OPositivo = 3;
  case ABPositivo = 4;
  case ANegativo = 5;
  case BNegativo = 6;
  case ONegativo = 7;
  case ABNegativo = 8;
  
  public function nome(): string
  {
    return match ($this){
      self::APositivo => 'A+',
      self::BPositivo => 'B+',
      self::OPositivo => 'O+',
      self::ABPositivo => 'AB+',
      self::ANegativo => 'A-',
      self::BNegativo => 'B-',
      self::ONegativo => 'AB-',
      self::ABNegativo => 'O-'
    };
  }
}
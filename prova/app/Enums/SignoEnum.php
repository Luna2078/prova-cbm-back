<?php

namespace App\Enums;

enum SignoEnum: int
{
  case Aries = 1;
  case Touro = 2;
  case Gemeos = 3;
  case Cancer = 4;
  case Leao = 5;
  case Virgem = 6;
  case Libra = 7;
  case Escorpiao = 8;
  case Sagitario = 9;
  case Capricornio = 10;
  case Aquario = 11;
  case Peixes = 12;
  
  public function nome(): string
  {
    return match ($this) {
      self::Aries => 'Áries',
      self::Touro => 'Touro',
      self::Gemeos => 'Gêmeos',
      self::Cancer => 'Câncer',
      self::Leao => 'Leão',
      self::Virgem => 'Virgem',
      self::Libra => 'Libra',
      self::Escorpiao => 'Escorpião',
      self::Sagitario => 'Sagitário',
      self::Capricornio => 'Capricónio',
      self::Aquario => 'Aquário',
      self::Peixes => 'Peixes'
    };
  }
}
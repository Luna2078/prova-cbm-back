<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
     CompetenciasSeeder::class,
     InstituicoesSeeder::class,
     SignoSeeder::class,
     TiposSanguineosSeeder::class
    ]);
  }
}

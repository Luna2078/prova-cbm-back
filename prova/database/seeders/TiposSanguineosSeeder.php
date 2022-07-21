<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSanguineosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('tipos_sanguineos')->insert([
     [
      "id" => 1,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "A+"
     ],[
      "id" => 2,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "B+"
     ],[
      "id" => 3,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "O+"
     ],[
      "id" => 4,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "AB+"
     ],[
      "id" => 5,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "A-"
     ],[
      "id" => 6,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "B-"
     ],[
      "id" => 7,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "O-"
     ],[
      "id" => 8,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "AB-"
     ]
    ]);
  }
}

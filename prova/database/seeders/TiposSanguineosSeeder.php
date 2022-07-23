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
      "nome" => "A+",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "B+",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "O+",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "AB+",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "A-",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "B-",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "O-",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "AB-",
      "created_at" => now(),
      "updated_at" => now()
     ]
    ]);
  }
}

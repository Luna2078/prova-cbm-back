<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstituicoesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('instituicoes')->insert([
     [
      "id" => 1,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "FANESE"
     ],[
      "id" => 2,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "UFS"
     ],[
      "id" => 3,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "UNIT"
     ],[
      "id" => 4,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "NASSAU"
     ],[
      "id" => 5,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "PIO X"
     ]
    ]);
  }
}

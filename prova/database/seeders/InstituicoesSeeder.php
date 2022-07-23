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
      "nome" => "FANESE",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "UFS",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "UNIT",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "NASSAU",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "PIO X",
      "created_at" => now(),
      "updated_at" => now()
     ]
    ]);
  }
}

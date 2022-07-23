<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenciasSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('competencias')->insert([
     [
      "nome" => "php",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "java",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "typescript",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "angular",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "react",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "ruby",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "vue",
      "created_at" => now(),
      "updated_at" => now()
     ],[
      "nome" => "node",
      "created_at" => now(),
      "updated_at" => now()
     ]
    ]);
  }
}

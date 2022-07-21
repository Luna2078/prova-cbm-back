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
      "id" => 1,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "php"
     ],[
      "id" => 2,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "java"
     ],[
      "id" => 3,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "typescript"
     ],[
      "id" => 4,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "angular"
     ],[
      "id" => 5,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "react"
     ],[
      "id" => 6,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "ruby"
     ],[
      "id" => 7,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "vue"
     ],[
      "id" => 8,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "node-"
     ]
    ]);
  }
}

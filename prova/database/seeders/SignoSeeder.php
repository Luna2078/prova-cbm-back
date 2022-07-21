<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SignoSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    DB::table('signos')->insert([
     [
     "id" => 1,
     "created_at" => now(),
     "updated_at" => now(),
     "nome" => "Áries"
    ],[
      "id" => 2,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Touro"
    ],[
      "id" => 3,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Gêmeos"
    ],[
      "id" => 4,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Câncer"
    ],[
      "id" => 5,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Leão"
    ],[
      "id" => 6,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Virgem"
    ],[
      "id" => 7,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Libra"
    ],[
      "id" => 8,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Escorpião"
    ],[
      "id" => 9,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Sagitário"
    ],[
      "id" => 10,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Capricórnio"
    ],[
      "id" => 11,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Aquário"
    ],
     [
      "id" => 12,
      "created_at" => now(),
      "updated_at" => now(),
      "nome" => "Peixes"
     ]
    ]);
  }
}

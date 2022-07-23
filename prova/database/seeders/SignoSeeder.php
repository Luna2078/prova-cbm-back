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
      "nome" => "Áries",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Touro",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Gêmeos",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Câncer",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Leão",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Virgem",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Libra",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Escorpião",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Sagitário",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Capricórnio",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Aquário",
      "created_at" => now(),
      "updated_at" => now()
     ], [
      "nome" => "Peixes",
      "created_at" => now(),
      "updated_at" => now()
     ]
    ]);
  }
}

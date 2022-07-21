<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('experiencias', function (Blueprint $table) {
      $table->id()->autoIncrement()->primary();
      $table->integer('perfil_id');
      $table->foreign('perfil_id')->references('id')->on('perfis')
       ->onUpdate('RESTRICT')->onDelete('RESTRICT');
      $table->string('empresa',45);
      $table->date('inicio');
      $table->date('fim');
      $table->boolean('atual_trabalho');
      $table->string('cargo',255);
      $table->timestamps();
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('experiencias');
  }
};

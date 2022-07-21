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
    Schema::create('competencias_perfis', function (Blueprint $table) {
      $table->integer('competencia_id');
      $table->foreign('competencia_id')->references('id')->on('competencias')
       ->onUpdate('RESTRICT')->onDelete('RESTRICT');
      $table->integer('perfil_id');
      $table->foreign('perfil_id')->references('id')->on('perfis')
       ->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
    Schema::dropIfExists('competencias_perfis');
  }
};

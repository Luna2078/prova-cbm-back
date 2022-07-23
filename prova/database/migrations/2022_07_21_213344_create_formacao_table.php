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
    Schema::create('formacao', function (Blueprint $table) {
      $table->integer('id', true);
      $table->integer('instituicao_id');
      $table->foreign('instituicao_id')->references('id')->on('instituicoes')
       ->onUpdate('RESTRICT')->onDelete('RESTRICT');
      $table->integer('perfil_id');
      $table->foreign('perfil_id')->references('id')->on('perfis')
       ->onUpdate('RESTRICT')->onDelete('RESTRICT');
      $table->string('nome',255);
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
    Schema::dropIfExists('formacao');
  }
};

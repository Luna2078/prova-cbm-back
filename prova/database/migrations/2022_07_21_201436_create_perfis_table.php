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
    Schema::create('perfis', function (Blueprint $table) {
      $table->id()->autoIncrement()->primary();
      $table->integer('tipos_sanguineo_id');
      $table->foreign('tipos_sanguineo_id')->references('id')->on('tipos_sanguineos')
       ->onUpdate('RESTRICT')->onDelete('RESTRICT');
      $table->integer('signo_id');
      $table->foreign('signo_id')->references('id')->on('signos')
       ->onUpdate('RESTRICT')->onDelete('RESTRICT');
      $table->string('cpf', 11);
      $table->string('nome', 50);
      $table->date('data_nascimento');
      $table->string('email', 45);
      $table->string('telefone', 45);
      $table->text('resumo');
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
    Schema::dropIfExists('perfis');
  }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatorioEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio_estados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('data');
            $table->string('grafico');
            $table->string('estado');
            $table->integer('confirmado_total')->nullable();
            $table->integer('confirmado_hoje')->nullable();
            $table->integer('recuperado_total')->nullable();
            $table->integer('recuperado_hoje')->nullable();
            $table->integer('morte_total')->nullable();
            $table->integer('morte_hoje')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorio_estados');
    }
}

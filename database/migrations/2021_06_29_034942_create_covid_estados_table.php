<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_estados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('data');
            $table->string('estado_id');
            $table->string('estado_nome');
            $table->integer('confirmado_total');
            $table->integer('confirmado_hoje');
            $table->integer('recuperado_total');
            $table->integer('recuperado_hoje');
            $table->integer('morte_total');
            $table->integer('morte_hoje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covid_estados');
    }
}

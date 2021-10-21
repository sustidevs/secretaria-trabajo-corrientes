<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioAtencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_atencions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('oficina_id')->constrained();
            $table->foreignId('dia_id')->constrained();
            $table->time('horario_inicio');
            $table->time('horario_fin');
            $table->integer('cant_max_turno');
            $table->integer('intervalo_turno');//En minutos
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
        Schema::dropIfExists('horario_atencions');
    }
}

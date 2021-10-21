<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->foreignId('oficina_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('solicitante_id')->constrained('personas');
            $table->foreignId('abogado_id')->constrained('personas');
            $table->integer('motivo')->nullable();
            $table->boolean('posee_abogado');
            $table->date('fecha');
            $table->time('hora');
            $table->boolean('conciliacion_positiva')->nullable();
	        $table->integer('estado')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('turnos');
    }
}

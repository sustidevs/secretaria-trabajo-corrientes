<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->foreignId('tipo_tramite_id')->constrained();
            $table->string('titulo')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('tipo')->default(1); //TODO Revisar por qué default(1)
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
        Schema::dropIfExists('requisitos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EvaluacionLicenciaturasEscolarizado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('evaluacion_licenciaturas_escolarizado', function(Blueprint $table){
            $table->increments('id');
            $table->string('clave');
            $table->string('nombre');
           
            
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
        Schema::dropIfExists('evaluacion_licenciaturas_escolarizado');
    }
}

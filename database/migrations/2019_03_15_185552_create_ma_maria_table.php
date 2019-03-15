<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaMariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ma_maria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMaestro')->unsigned();
            $table->foreign('idMaestro')->references('id')->on('evaluacion_maestros');
            $table->integer('idMateria')->unsigned();
            $table->foreign('idMateria')->references('id')->on('evaluacion_materiasesco');
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
        Schema::dropIfExists('ma_maria');
    }
}

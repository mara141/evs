<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndieleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indieleccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tema');
            $table->string('pregunta');
            $table->string('TipoRespuesta');
            $table->date('dateinicio');
            $table->date('datefinal');
            $table->string('time');
            $table->string('path');
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
        Schema::drop('indieleccions');
    }
}

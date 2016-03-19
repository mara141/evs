<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleccions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alias_id')->unsigned();
            $table->foreign('alias_id')->references('id')->on('insts');
            $table->string('tema');
            $table->string('pregunta');
            $table->string('TipoRespuesta');
            $table->date('dateinicio');
            $table->datetime('datefinal');
            $table->time('time');
            $table->time('time1');
            $table->string('file');
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
        Schema::drop('eleccions');
    }
}

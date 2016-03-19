<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectionImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('images');
            $table->integer('votes');
            $table->integer('election_id');
            $table->integer('is_draft');
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
        Schema::drop('election_images');
    }
}

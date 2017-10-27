<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('match_master_id')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->string('place');
            $table->integer('team0_id')->unsigned();
            $table->integer('team1_id')->unsigned();
            $table->timestamps();

            $table->foreign('match_master_id')->references('id')->on('users');
            $table->foreign('team0_id')->references('id')->on('teams');
            $table->foreign('team1_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}

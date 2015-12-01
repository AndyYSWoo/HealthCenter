<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sportsentry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportsentry', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('device_id');
            $table->integer('type');
            $table->integer('timescale');
            $table->integer('level');
            $table->integer('last_time');
            $table->float('calories');
            $table->float('value');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->string('description');
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
        Schema::drop('sportsentry');
    }
}

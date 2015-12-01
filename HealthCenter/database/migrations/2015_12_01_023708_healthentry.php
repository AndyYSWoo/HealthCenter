<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Healthentry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthentry', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('device_id');
            $table->integer('timescale');
            $table->integer('level');
            $table->integer('type');
            $table->datetime('begin_time');
            $table->datetime('end_time');
            $table->integer('last_time');
            $table->float('value');
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
        Schema::drop('healthentry');
    }
}

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
            $table->integer('device_id')->nullable();
            $table->integer('type');
            $table->integer('timescale')->nullable();
            $table->integer('level')->nullable();
            $table->integer('last_time');
            $table->float('calories');
            $table->float('value');
            $table->float('value2')->nullable();
            $table->datetime('start_time');
            $table->datetime('end_time')->nullable();
            $table->string('description')->nullable();
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

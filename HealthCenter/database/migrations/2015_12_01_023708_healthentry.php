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
            $table->integer('device_id')->nullable();
            $table->integer('timescale')->nullable();
            $table->integer('level')->nullable();
            $table->integer('type');
            $table->datetime('begin_time')->nullable();
            $table->datetime('end_time')->nullable();
            $table->integer('last_time')->nullable();
            $table->float('value');
            $table->float('value2')->nullable();
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
        Schema::drop('healthentry');
    }
}

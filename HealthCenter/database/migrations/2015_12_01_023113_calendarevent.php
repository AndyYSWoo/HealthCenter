<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Calendarevent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarevent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id');
            $table->integer('client_id')->nullable();
            $table->string('title');
            $table->integer('status');
            $table->integer('type');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->datetime('start_time')->nullable();
            $table->datetime('end_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calendarevent');
    }
}

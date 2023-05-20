<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('train_id');
            $table->unsignedBigInteger('departure_locality_id');
            $table->unsignedBigInteger('arrival_locality_id');
            $table->dateTime('date');
            $table->integer('travel_time');

            $table->foreign('train_id')->references('id')->on('trains');
            $table->foreign('departure_locality_id')->references('id')->on('localities');
            $table->foreign('arrival_locality_id')->references('id')->on('localities');
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
        Schema::dropIfExists('shedules');
    }
}

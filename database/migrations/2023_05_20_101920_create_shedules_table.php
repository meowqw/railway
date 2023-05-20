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
            $table->id();
            $table->unsignedBigInteger('train_id');
            $table->unsignedBigInteger('departure_location_id');
            $table->unsignedBigInteger('arrival_location_id');
            $table->dateTime('date');
            $table->integer('travel_time');
            $table->timestamps();

            $table->foreign('train_id')->references('id')->on('trains');
            $table->foreign('departure_location_id')->references('id')->on('localities');
            $table->foreign('arrival_location_id')->references('id')->on('localities');
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

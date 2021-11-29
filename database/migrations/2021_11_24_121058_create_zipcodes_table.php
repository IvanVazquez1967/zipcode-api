<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('code');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('municipality_id');
            $table->unsignedBigInteger('settlement_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('zone_id');
            $table->timestamps();

            $table->foreign('settlement_id')->references('id')->on('settlements');
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('zone_id')->references('id')->on('zones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zipcodes');
    }
}


<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("name");
            $table->bigInteger("countriesID")->unsigned();
            $table->foreign('countriesID')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.appservi
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}

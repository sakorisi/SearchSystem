<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('place_address');
            $table->integer('lunchprice');
            $table->integer('dinnerprice');
            $table->integer('seatnum');
            $table->datetime('open');
            $table->datetime('close');
            $table->datetime('average_stay_time');
            $table->string('tag');
            $table->string('station');
            $table->datetime('walk_mintue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}

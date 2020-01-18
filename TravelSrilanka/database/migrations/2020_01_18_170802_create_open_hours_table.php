<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpenHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('day');
            $table->String('open_time');
            $table->String('close_time');
            $table->BigInteger('nationalPark_id');
            $table->timestamps();

            $table->foreign('nationalPark_id')
            ->references('id')->on('national_parks')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('open_hours');
    }
}

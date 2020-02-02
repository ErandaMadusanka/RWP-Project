<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeachActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beach_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('description');
            $table->date('date');
            $table->time('time');
            $table->String('image')->nullable();
            $table->BigInteger('beach_id')->unsigned();
            $table->timestamps();

            $table->foreign('beach_id')
            ->references('id')->on('beaches')
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
        Schema::dropIfExists('beach_activities');
    }
}

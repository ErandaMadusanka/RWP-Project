<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String("name");
            $table->String("description");
            $table->String("month");
            $table->date("date");
            $table->time("time");
            $table->String("venue");
            $table->String("organized_by");
            $table->String("website");
            $table->integer("contact_info");
            $table->BigInteger('user_id');
            $table->BigInteger('city_id');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('city_id')
            ->references('id')->on('cities')
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
        Schema::dropIfExists('events');
    }
}

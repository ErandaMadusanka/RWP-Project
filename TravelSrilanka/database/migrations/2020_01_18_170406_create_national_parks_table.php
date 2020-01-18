<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_parks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('description');
            $table->Integer('latitude');
            $table->Integer('longitude');
            $table->Integer('contact_info');
            $table->String('website');
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
        Schema::dropIfExists('national_parks');
    }
}

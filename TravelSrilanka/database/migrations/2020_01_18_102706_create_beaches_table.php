<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beaches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('description');
            $table->String('latitude');
            $table->String('longitude');
            $table->String('image')->nullable();
            // nullable() assign to foreign keys becouse it have't defalut value ,[DB CHECK]
            $table->BigInteger('user_id')->unsigned();
            $table->BigInteger('city_id')->unsigned();
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
        Schema::dropIfExists('beaches');
    }
}

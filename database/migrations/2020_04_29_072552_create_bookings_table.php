<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('lastname');
            $table->string('document');
            $table->string('email');
            $table->string('phone');
            $table->date('start');
            $table->date('end');
            $table->boolean('breakfast')->default(0);
            $table->boolean('pets')->default(0);
            $table->foreignId('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');

            //$table->integer('pets_number')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}

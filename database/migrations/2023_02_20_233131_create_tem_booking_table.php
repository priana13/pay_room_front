<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_booking', function (Blueprint $table) {
            $table->id();
            $table->string('temp_code');
            $table->string('name');
            $table->string('phone_number');
            $table->string('warga_negara');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('day_qty');
            $table->integer('room');
            $table->integer('guest');
            $table->integer('hotel_id');
            $table->string('slug');
            $table->string('transaction_code')->nullable();
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
        Schema::dropIfExists('temp_booking');
    }
};

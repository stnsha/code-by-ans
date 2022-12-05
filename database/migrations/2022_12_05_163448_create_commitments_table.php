<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitments', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('recurrence'); //daily, weekly, monthly, year, one time
            $table->timestamp('date_start');
            $table->timestamp('date_end');
            $table->double('subtotal');
            $table->double('advance_deduction');
            $table->double('final_total');
            $table->integer('mode_of_payment');
            $table->integer('reminder_id')->nullable();
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
        Schema::dropIfExists('commitments');
    }
};
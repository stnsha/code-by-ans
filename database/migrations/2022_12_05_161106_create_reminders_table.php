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
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //appointment
            $table->string('description'); //psychiatiarsit
            $table->string('location'); //htj
            $table->timestamp('date_start'); //1/2 9am
            $table->timestamp('date_end');
            $table->integer('priority_level');
            $table->integer('type')->default(1); //appointment
            $table->integer('relationship')->default(1); //self
            $table->string('remarks')->default(''); //none
            $table->integer('expenses_id')->nullable(); //none
            $table->softDeletes();
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
        Schema::dropIfExists('reminders');
    }
};
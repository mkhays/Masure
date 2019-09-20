<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->boolean('status');
            $table->tinyInteger('employment_type');
            $table->tinyInteger('staff_type');
            $table->tinyInteger('staff_level');
            $table->integer('duty_station');
            $table->integer('department');
            $table->integer('created_by')->nullable();
            $table->integer('modified_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}

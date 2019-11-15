<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMalariaSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malaria_surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_name');
            $table->boolean('ispregnant');
            $table->date('dob');
            $table->enum('gender',['male','female']);
            $table->string('plabtest');
            $table->string('hopitalname');
            $table->string('hostpitalrecno');
            $table->string('parastemia');
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
        Schema::dropIfExists('malaria_surveys');
    }
}

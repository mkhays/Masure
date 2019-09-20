<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_instances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->integer('financial_year_id');
            $table->integer('user_id');
            $table->integer('created_by')->nullable();
            $table->integer('last_updated_by')->nullable();
            $table->dateTime('last_update_date')->nullable();
            $table->integer('leave_type');
            $table->float('leave_balance');
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
        Schema::dropIfExists('leave_instances');
    }
}

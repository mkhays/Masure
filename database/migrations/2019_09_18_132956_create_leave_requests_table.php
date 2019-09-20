<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->integer('leave_type_id');
            $table->string('leave_dates');
            $table->float('leave_days');
            $table->dateTime('leave_request_date');
            $table->string('leave_comment')->nullable();
            $table->integer('status');
            $table->string('supervisor_comment')->nullable();
            $table->string('hr_comment')->nullable();
            $table->integer('supervisor_review')->nullable();
            $table->integer('hr_review')->nullable();
            $table->dateTime('supervisor_review_date')->nullable();
            $table->dateTime('hr_review_Date')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('attachment_link')->nullable();
            $table->integer('delegatee')->nullable();
            $table->integer('finacial_year');
            $table->integer('supervisor_id')->nullable();
            $table->integer('hr_id')->nullable();
            $table->longText('general_notes')->nullable();
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
        Schema::dropIfExists('leave_requests');
    }
}

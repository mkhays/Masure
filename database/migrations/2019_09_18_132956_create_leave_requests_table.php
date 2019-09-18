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
            $table->string('leave_comment');
            $table->integer('status');
            $table->string('supervisor_comment');
            $table->string('hr_comment');
            $table->integer('supervisor_review');
            $table->integer('hr_review');
            $table->dateTime('supervisor_review_date');
            $table->dateTime('hr_review_Date');
            $table->integer('created_by');
            $table->string('attachment_link');
            $table->integer('delegatee');
            $table->integer('finacial_year');
            $table->integer('supervisor_id');
            $table->integer('hr_id');
            $table->longText('general_notes');
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

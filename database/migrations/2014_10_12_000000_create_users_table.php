<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('position');
            $table->string('nin')->nullable();
            $table->string('passport_number')->nullable();
            $table->integer('nationality');
            $table->string('photo_link')->nullable();
            $table->boolean('status');
            $table->integer('gender');
            $table->date('date_of_birth');
            $table->string('telephone')->nullable();
            $table->string('navision_numner')->nullable()->unique();
            $table->integer('clockin_number')->unique()->nullable();
            $table->timestamp('last_update_date')->nullable();
            $table->integer('last_update_user')->nullable();
            $table->string('title');
            $table->mediumText('general_notes')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('supervisor_id');
            $table->integer('created_by')->nullable();
            $table->integer('modified_by')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

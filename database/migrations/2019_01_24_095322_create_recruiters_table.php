<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',40)->nullable();
            $table->string('firstname',40)->nullable();
            $table->string('lastname',40)->nullable();
            $table->string('location',50)->nullable();
            $table->string('country',50)->nullable();
            $table->string('mobile',15)->nullable();
            $table->string('gender',10)->nullable();
            $table->string('status',20)->nullable();
            $table->string('membership',100)->nullable();
            $table->dateTime('membership_start_date')->nullable();
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
        Schema::dropIfExists('recruiters');
    }
}

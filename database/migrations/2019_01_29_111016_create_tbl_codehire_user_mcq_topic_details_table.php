<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCodehireUserMcqTopicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    public function up()
    {
        Schema::create('tbl_codehire_user_mcq_topic_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');
            $table->integer('attempt_id')->unsigned();
            $table->foreign('attempt_id')->references('id')->on('tbl_codehire_user_attempts');
            $table->string('topic_name',765);
            $table->integer('correct_ans_count');
            $table->integer('total_ans_count');
            $table->float('topic_average_marks',8,2)->nullable();
            $table->integer('topic_topper_marks')->nullable();
            $table->integer('skillpage_id');
            $table->integer('incorrect_ans_count');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_codehire_user_mcq_topic_details');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblContestQuestionStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    public function up()
    {
        Schema::create('tbl_contest_question_structure', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');
            $table->string('question_type',255);
            $table->integer('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('tbl_codingcontest_question_topics')->nullable();
            $table->string('topic_name',255);
            $table->integer('marks');
            $table->integer('cnt');
            $table->integer('scoring_logic_id');
            $table->integer('incorrect_marks');
            $table->tinyInteger('order_num');
            $table->tinyInteger('status');
            $table->integer('added_on');
            $table->integer('created_at');
            $table->integer('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_contest__question_structure');
    }
}

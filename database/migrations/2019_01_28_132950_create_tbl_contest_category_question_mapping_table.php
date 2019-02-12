<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblContestCategoryQuestionMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_contest_category_question_mapping', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('tbl_codingcontest_question_master');
            $table->integer('added_on');
            $table->tinyInteger('status');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('tbl_codingcontest_question_category');
            $table->integer('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('tbl_codingcontest_question_topics');
            $table->string('cat_name',250);
            $table->string('parent_category')->nullable();
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
        Schema::dropIfExists('tbl_contest_category_question_mapping');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCondingcontestQuestionTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *      */ 

   

    public function up()
    {
        Schema::create('tbl_codingcontest_question_template', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');
            $table->integer('lang_id')->unsigned();
            $table->foreign('lang_id')->references('id')->on('tbl_codingcontest_languages');
            $table->text('code_template');
            $table->integer('testcase_id')->unsigned();
            $table->foreign('testcase_id')->references('id')->on('tbl_codingcontest_testcases');
            $table->text('testcase_template');
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
        Schema::dropIfExists('tbl_codingcontest_question_template');
    }
}

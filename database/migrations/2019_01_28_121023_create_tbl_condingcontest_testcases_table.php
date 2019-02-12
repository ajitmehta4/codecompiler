<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCondingcontestTestcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_codingcontest_testcases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('recruiters');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('tbl_codingcontest_question_master');
            $table->string('type',255);
            $table->string('title',255);
            $table->text('description');
            $table->text('input');
            $table->text('output');
            $table->double('weightage', 8, 2);
            $table->double('timeout_limit', 8, 2);
            $table->double('memory_limit', 8, 2);
            $table->integer('loop_count');
            $table->text('explain_test');
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
        Schema::dropIfExists('tbl_codingcontest_testcases');
    }
}

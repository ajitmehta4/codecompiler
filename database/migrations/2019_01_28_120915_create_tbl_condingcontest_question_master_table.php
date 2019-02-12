<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCondingcontestQuestionMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_codingcontest_question_master', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';
            $table->increments('id');
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('recruiters');
            $table->string('category',150);
            $table->integer('difficulty_level')->default(0);
            $table->boolean('mcq')->default(0)->change();
            $table->integer('status');
            $table->text('title');           
            $table->text('answer_options');
            $table->text('correct_answer');
            $table->text('question_tags');            
            $table->integer('marks');
            $table->string('function_name',255);
            $table->text('description');            
            $table->text('constraints');
            $table->text('input_format');
            $table->text('output_format');
            $table->text('sample_input');
            $table->text('sample_output');
            $table->string('languages',250);
            $table->integer('memory_limit');           
            $table->float('max_execution_time', 8, 2);
            $table->integer('created_on');
            $table->integer('updated_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_codingcontest_question_master');
    }
}

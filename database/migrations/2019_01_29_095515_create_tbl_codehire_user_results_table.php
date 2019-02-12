<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCodehireUserResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
	
	
	
	    
    public function up()
    {
        Schema::create('tbl_codehire_user_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');
            $table->integer('attemp_id')->unsigned();
            $table->foreign('attemp_id')->references('id')->on('tbl_codehire_user_attempts');
            $table->string('question_token',765)->nullable();
            $table->string('encrypt_token',765);
            $table->string('type',60);
            $table->integer('question_id');
            $table->tinyInteger('hasCompiled');
            $table->string('compileResult',765);
            $table->tinyInteger('testcase_status');
            $table->tinyInteger('pass_testcase_count');
            $table->tinyInteger('total_testcases'); 
            $table->string('language',60);
            $table->integer('codeComplexity')->nullable();
            $table->integer('tc1');
            $table->integer('tc2');
            $table->integer('tc3');
            $table->double('marks',8,2);
            $table->integer('code_submitted_on');
            $table->integer('submitted_on')->nullable();
            $table->string('answer_option',765);
            $table->string('answer_status',3);
            $table->binary('code');
            $table->integer('added_on')->nullable();
            $table->integer('status');
            $table->string('platform_type',150);
            $table->integer('time_taken');
            $table->float('total_execution_time',8,2);
            $table->float('memory_usage',8,2);
            $table->binary('marks_details')->nullable();
            $table->float('correctness',8,2);
            $table->float('consistency',8,2);
            $table->float('uniqueness',8,2);
            $table->float('resource_usage',8,2);
            $table->float('performance',8,2);
            $table->float('adaptability',8,2);          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_codehire_user_results');
    }
}

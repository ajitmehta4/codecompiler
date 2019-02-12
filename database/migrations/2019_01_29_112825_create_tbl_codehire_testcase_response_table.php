<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCodehireTestcaseResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       
    public function up()
    {
        Schema::create('tbl_codehire_testcase_response', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('testcase_id')->nullable();
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');            
            $table->integer('attempt_id')->unsigned();
            $table->foreign('attempt_id')->references('id')->on('tbl_codehire_user_attempts');
            $table->string('encrypt_token',765)->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('is_pass',['TRUE','FALSE']);
            $table->text('input_values');
            $table->text('candidate_output');
            $table->text('expected_output');
            $table->float('execution_time',8,2);          
            $table->enum('is_outof_memory',['TRUE','FALSE']);
            $table->string('loop_count',30)->nullable();
            $table->float('score',8,2)->nullable();
            $table->string('error_message',765);
            $table->float('memory_usage',8,2);
            $table->smallInteger('status');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_codehire_testcase_response');
    }
}

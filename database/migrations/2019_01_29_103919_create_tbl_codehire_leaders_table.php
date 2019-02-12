<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCodehireLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_codehire_leaders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');
            $table->integer('attempt_id')->unsigned();
            $table->foreign('attempt_id')->references('id')->on('tbl_codehire_user_attempts');
            $table->string('encrypt_token',765)->nullable();
            $table->double('marks',8,2);
            $table->integer('added_on');
            $table->string('language',600);
            $table->integer('question_id')->nullable();
            $table->integer('result_id')->nullable();
            $table->float('total_execution_time',8,2);
            $table->tinyInteger('status');
            $table->integer('rank');
            $table->integer('old_rank');
            $table->float('score',8,2);
            $table->float('percentile',8,2);
            $table->float('memory_usage',8,2);
            $table->string('platform_type',300)->nullable();
            $table->smallInteger('shortlist_status');
            $table->integer('updated_on');
            $table->integer('coding_marks');
            $table->integer('mcq_marks');            
            $table->tinyInteger('evaluation_status');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_codehire_leaders');
    }
}

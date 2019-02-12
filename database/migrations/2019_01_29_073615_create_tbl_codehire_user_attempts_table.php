<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCodehireUserAttemptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_codehire_user_attempts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('encrypt_token',765);
            $table->integer('quiz_start_time');
            $table->integer('quiz_end_time');
            $table->integer('quiz_submitted_on');
            $table->integer('quiz_remaining_time');
            $table->integer('quiz_first_attempt_time');
            $table->double('marks', 8, 2)->nullable();
            $table->string('status', 3);
            $table->ipAddress('ip_address');
            $table->binary('question_ids');
            $table->string('language', 600)->nullable();
            $table->integer('question_id')->nullable();
            $table->integer('user_test_id')->nullable();            
            $table->integer('correct_answers')->default(0);
            $table->integer('incorrect_answers')->default(0);
            $table->string('supported_device',765)->nullable();
            $table->binary('apps_description')->nullable();
            $table->string('url',765)->nullable();            
            $table->float('total_execution_time',8,2)->nullable();
            $table->integer('attempt_status');
            $table->float('memory_usage',8,2)->nullable();
            $table->string('platform_type',30);
            $table->string('source',765)->default('web');
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
        Schema::dropIfExists('tbl_codehire_user_attempts');
    }
}

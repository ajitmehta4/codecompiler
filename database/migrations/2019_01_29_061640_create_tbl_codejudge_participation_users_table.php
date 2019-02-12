<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCodejudgeParticipationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('tbl_codejudge_participation_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('contest_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('tbl_codingcontest_contest');
            $table->integer('added_on');
            $table->binary('marks_details');
            $table->double('marks', 8, 2);
            $table->binary('latest_marks');
            $table->binary('attempt_count');
            $table->integer('rank');
            $table->float('score', 8, 2);
            $table->float('percentile', 8, 2);          
            $table->integer('status');
            $table->integer('old_rank');
            $table->tinyInteger('reg_source');
            $table->integer('shortlist');
            $table->integer('complete_status');
            $table->string('job_change',30)->nullable();
            $table->string('relocate',30)->nullable();
            $table->enum('is_register',['Y','N']);
            $table->string('custom_field_1',765)->nullable();
            $table->string('custom_field_2',765)->nullable();
            $table->string('custom_field_3',765)->nullable();
            $table->string('rank_status',3);
            $table->integer('updated_on');
            $table->binary('shortlist_client_ids');            
            $table->string('answer_file',765);
            $table->string('custom_field_4',765)->nullable();
            $table->string('custom_field_5',765)->nullable();
            $table->string('custom_field_6',765)->nullable();
            $table->string('custom_field_7',765)->nullable();
            $table->string('custom_field_8',765)->nullable();
            $table->string('participation_source',465)->nullable();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_codejudge_participation_users');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCondingcontestContestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_codingcontest_contest', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recruiter_id')->unsigned();
            $table->foreign('recruiter_id')->references('id')->on('recruiters');
            $table->string('platform_type',250);
            $table->string('title',250);
            $table->string('purpose')->nullable();
            $table->text('description')->nullable();
            $table->text('instructions')->nullable();  
            $table->string('profile_image',50)->default('profile.jpg');
            $table->string('header_image',50)->default('header.jpg');
            $table->integer('start_date');
            $table->integer('end_date');
            $table->text('languages');
            $table->integer('difficulty_level')->default(0);
            $table->integer('duration');
            $table->enum('is_private',['Y', 'N'])->default('N');            
            $table->enum('status',['DRAFT','PUBLISHED'])->default('DRAFT');
            $table->enum('enabled',['Y','N'])->default('Y');
                $table->integer('participation_started_on');
                $table->integer('participation_ended_on');
                $table->string('question_order',20)->default('ASC');
                $table->integer('user_attempts')->default(0);
                $table->double('total_marks', 8, 2)->default(0);
                $table->enum('webcam_enable', ['Y', 'N'])->default('N');
                $table->string('master_password')->nullable();
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
        Schema::dropIfExists('tbl_codingcontest_contest');
    }
}

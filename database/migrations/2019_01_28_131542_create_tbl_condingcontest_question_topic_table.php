<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCondingcontestQuestionTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_codingcontest_question_topics', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('tbl_codingcontest_question_category')->nullable();
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
        Schema::dropIfExists('tbl_codingcontest_question_topics');
    }
}

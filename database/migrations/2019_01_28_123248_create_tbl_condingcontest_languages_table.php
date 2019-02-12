<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCondingcontestLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('tbl_codingcontest_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language_key',250);
            $table->string('language',250);
            $table->string('tg_contest_language',250)->change();
            $table->string('version',250);
            $table->integer('timelimit');
            $table->integer('memorylimit');   
            $table->string('libraries',255);
            $table->string('additional_libraries',255);
            $table->integer('skillpage_id');
            $table->tinyInteger('auto_template_flag');
            $table->integer('auto_template_flag_stdio');
            $table->string('data_type_exception',250);
            $table->string('source_file_extension',250);
            $table->string('executable_file_extension',250);
            $table->string('compiler_utility',250);
            $table->string('executor_utility',250);
            $table->tinyInteger('quality_flag');
            $table->text('keywords');    
            $table->text('restricted_words');    
            $table->text('conditional_words');    
            $table->text('loop_words');    
            $table->text('actions_winding'); 
            $table->tinyInteger('type_id');  
            $table->string('display_order');
            $table->boolean('is_interpreted')->default(0);
            $table->boolean('status')->default(1);
            $table->string('compiler_image_name',255);
            $table->string('lizard_language',255);
            $table->string('filename',255);
            $table->string('executable_filename',255);
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
        Schema::dropIfExists('tbl_codingcontest_languages');
    }
}

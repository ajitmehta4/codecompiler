<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username',100)->nullable();
            $table->string('firstname',50)->nullable();
            $table->string('lastname',50)->nullable();
            $table->string('gender',6)->nullable();
            $table->string('phone',15)->unique();
            $table->string('experience',20)->nullable();
            $table->string('degree',50)->nullable();
            $table->string('institute',100)->nullable();
            $table->string('github_url')->nullable();
            $table->string('stackoverflow_url')->nullable();
            $table->string('profile_image',100)->nullable();
            $table->string('designation',100)->nullable();
            $table->string('skills')->nullable();
            $table->string('role')->nullable();          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('gender');
            $table->dropColumn('phone');
            $table->dropColumn('experience');
            $table->dropColumn('institute');
            $table->dropColumn('github_url');
            $table->dropColumn('stackoverflow_url');
            $table->dropColumn('profile_image');
            $table->dropColumn('designation');
            $table->dropColumn('skills'); 
            $table->dropColumn('role');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtherfieldToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('work_details')->nullable();
            $table->string('education_details')->nullable();
            $table->string('extra_skills')->nullable();
            $table->string('resume_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropColumn('logo_url');
            $table->dropColumn('tag_line');
            $table->dropColumn('firstname_lastname');
            $table->dropColumn('short_description');
            $table->dropColumn('dob');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('work_details ');
            $table->dropColumn('education_details');
            $table->dropColumn('extra_skills');
            $table->dropColumn('resume_url');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRemainingfieldsToPostsTable extends Migration
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
            $table->string('logo_url')->nullable();
            $table->string('tag_line')->nullable();
            $table->string('firstname_lastname')->nullable();
            $table->string('short_description')->nullable();
            $table->string('dob')->nullable();
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
        });
    }
}

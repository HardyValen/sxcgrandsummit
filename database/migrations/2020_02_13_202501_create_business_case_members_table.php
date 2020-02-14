<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessCaseMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_case_members', function (Blueprint $table) {
            $table->bigIncrements('business_case_member_id');
            $table->bigInteger('business_case_team_id')->unsigned();
            $table->foreign('business_case_team_id')->references('business_case_team_id')->on('business_case_teams')->onDelete('cascade');

            $table->string('name', 256);
            $table->string('age', 2);
            $table->string('gender', 16);
            $table->string('phone', 256);
            $table->string('major', 256);
            $table->string('batch', 256);
            $table->string('KTM', 256);
            $table->string('email', 256);
            $table->string('line', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_case_members');
    }
}

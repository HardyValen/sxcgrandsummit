<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummitMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summit_members', function (Blueprint $table) {
            $table->bigIncrements('summit_member_id');
            $table->bigInteger('summit_team_id')->unsigned();
            $table->foreign('summit_team_id')->references('summit_team_id')->on('summit_teams')->onDelete('cascade');

            $table->string('fullname', 256);
            $table->string('university', 256);
            $table->string('major', 256);
            $table->string('batch', 256);
            $table->string('phone', 256);
            $table->string('line', 256);
            $table->string('ch_select', 128);        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('summit_members');
    }
}

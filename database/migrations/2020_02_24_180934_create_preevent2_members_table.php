<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreevent2MembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preevent2_members', function (Blueprint $table) {
            $table->bigIncrements('preevent2_member_id')->unsigned();

            $table->string('fullname', 256);
            $table->string('gender', 32);
            $table->string('email', 256);
            $table->string('phone', 256);
            $table->string('hometown', 256);
            $table->string('major', 256);
            $table->string('university', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preevent2_members');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis_data', function (Blueprint $table) {
            $table->bigIncrements('Id')->unsigned();
            $table->string("nama", 256);
			$table->string("gender", 16);
			$table->string("email", 256); 
			$table->string("usia", 2);
			$table->string("line", 256);
			$table->string("univ", 256);
			$table->string("jurusan", 256);
			$table->string("domisili", 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regis_data');
    }
}

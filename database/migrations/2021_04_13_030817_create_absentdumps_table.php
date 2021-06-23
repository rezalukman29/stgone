<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsentdumpsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absentdumps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->nullable();
            $table->string('nik')->nullable();
            $table->integer('code')->nullable();
            $table->string('hour')->nullable();
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
        Schema::drop('absentdumps');
    }
}

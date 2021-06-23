<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nik')->nullable();
            $table->date('date')->nullable();
            $table->string('in')->nullable();
            $table->string('out')->nullable();
            $table->string('absent_code')->nullable();
            $table->string('shift')->nullable();
            $table->string('detail')->nullable();
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
        Schema::drop('absents');
    }
}

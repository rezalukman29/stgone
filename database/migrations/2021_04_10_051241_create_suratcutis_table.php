<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuratcutisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratcutis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nik')->nullable();
            $table->date('datestart')->nullable();
            $table->date('dateend')->nullable();
            $table->integer('days')->nullable();
            $table->string('detail')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suratcutis');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTutorBimbel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_bimbel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tutor',false,true);
            $table->foreign('id_tutor')->references('id')->on('tutor')->onDelete('cascade');
            $table->integer('id_bimbel',false,true);
            $table->foreign('id_bimbel')->references('id')->on('bimbel')->onDelete('cascade');
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
        Schema::drop('tutor_bimbel');
    }
}

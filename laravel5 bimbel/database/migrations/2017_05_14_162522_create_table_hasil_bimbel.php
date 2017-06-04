<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHasilBimbel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_bimbel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelajar',false,true);
            $table->foreign('id_pelajar')->references('id')->on('pelajar')->onDelete('cascade');
            $table->integer('id_bimbel',false,true);
            $table->foreign('id_bimbel')->references('id')->on('bimbel')->onDelete('cascade');
            $table->integer('nilai');
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
        Schema::drop('hasil_bimbel');
    }
}

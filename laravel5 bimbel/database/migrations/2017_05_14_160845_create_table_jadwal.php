<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelajar',false,true);
            $table->foreign('id_pelajar')->references('id')->on('pelajar')->onDelete('cascade');
            $table->integer('id_ruangan',false,true);
            $table->foreign('id_ruangan')->references('id')->on('ruangan')->onDelete('cascade');
            $table->integer('id_tutor_bimbel',false,true);
            $table->foreign('id_tutor_bimbel')->references('id')->on('tutor_bimbel')->onDelete('cascade');
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
        Schema::drop('jadwal');
    }
}

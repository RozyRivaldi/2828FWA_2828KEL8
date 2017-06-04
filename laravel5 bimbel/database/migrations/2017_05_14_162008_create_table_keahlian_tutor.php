<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKeahlianTutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keahlian_tutor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_keahlian',false,true);
            $table->foreign('id_keahlian')->references('id')->on('keahlian')->onDelete('cascade');
            $table->integer('id_tutor',false,true);
            $table->foreign('id_tutor')->references('id')->on('tutor')->onDelete('cascade');
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
        Schema::drop('keahlian_tutor');
    }
}

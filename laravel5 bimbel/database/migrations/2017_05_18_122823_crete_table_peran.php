<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteTablePeran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengguna_id',false,true);
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
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
        Schema::drop('peran');
    }
}

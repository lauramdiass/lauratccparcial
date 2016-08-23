<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrevista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('arquivo');
            $table->date('data');
            $table->integer('id_pcd')->unsigned();
            $table->foreign('id_pcd')
                   ->references('id')->on('pcd')
                   ->onDelete('cascade');
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
        Schema::drop('entrevista');
    }
}

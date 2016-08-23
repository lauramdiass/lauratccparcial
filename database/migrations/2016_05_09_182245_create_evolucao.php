<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvolucao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evolucao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
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
        Schema::drop('evolucao');
    }
}

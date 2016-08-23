<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdicional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adicional', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('motivo');
            $table->string('nome');
            $table->string('tipo');
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
        Schema::drop('adicional');
    }
}

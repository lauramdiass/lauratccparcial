<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcd', function (Blueprint $table) {
                        $table->increments('id');
            $table->string('cpf');
            $table->string('nome');
            $table->string('rg');
            $table->string('sexo');
            $table->string('nis');
            $table->date('data_nascimento');
            $table->integer('id_mae');
            $table->integer('id_pai');
            $table->integer('id_responsavel');
            $table->integer('id_endereco')->unsigned();
             $table->foreign('id_endereco')
                   ->references('id')->on('endereco')
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
        Schema::drop('pcd');
    }
}

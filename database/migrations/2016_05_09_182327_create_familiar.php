<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiar', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nome');
             $table->string('parentesco');
             $table->string('cpf')->unique();
             $table->date('data_nascimento');
             $table->boolean('dependente');
             $table->string('escolaridade');
             $table->string('estado_civil');
             $table->string('mae');
             $table->string('pai');
             $table->string('nis');
             $table->string('profissao');
             $table->string('rg');
             $table->double('renda');
             $table->integer('id_familiar')->unsigned();
             $table->foreign('id_familiar')
                   ->references('id')->on('familiar')
                   ->onDelete('cascade');
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
        Schema::drop('familiar');
    }
}
